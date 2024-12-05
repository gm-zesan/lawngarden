<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Donation;
use App\Models\Product;
use App\Models\Project;
use App\Models\WebsiteReview;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class MyCommerceController extends Controller
{
    public function index() {
        return view('website.home.index', [
            'products' => Product::with('category')
                            ->where('status', 1)
                            ->orderBy('id', 'desc')
                            ->take(4)
                            ->get(),
            'blogs' => Blog::with(['category', 'createdBy'])
                            ->orderBy('id', 'desc')
                            ->take(3)
                            ->get(),
            'reviews' => WebsiteReview::where('status', 1)->orderBy('id', 'desc')->get(),
        ]);
    }

    public function allProjects(){
        $projects = Project::all();
        return view('website.projects.index', ['projects' => $projects]);
    }

    public function projectDetails($id){
        $project = Project::find($id);
        return view('website.projects.details', ['project' => $project]);
    }
    
    public function allProducts(Request $request){
        $sortby = $request->input('sortby', 'latest');
        $query = Product::query();
        if ($sortby === 'price_low_high') {
            $query->orderBy('selling_price', 'asc');
        } elseif ($sortby === 'price_high_low') {
            $query->orderBy('selling_price', 'desc');
        } else {
            $query->orderBy('created_at', 'desc');
        }
        $products = $query->paginate(9);
        return view('website.products.index',['products'=>$products]);
    }



    public function category($id){
        $products = Product::where('category_id',$id)->where('status',1)->orderBy('id','desc')->paginate(9);
        return view('website.products.index', [
            'products' => $products,
        ]);
    }

    public function subCategory($id){
        $products = Product::where('sub_category_id',$id)->where('status',1)->orderBy('id','desc')->paginate(9);
        return view('website.products.index',['products'=>$products]);
    }

    public function detail($id) {
        $product = Product::with('reviews')->find($id);
        $reviews = $product->reviews()->where('status', 1)->get();
        $product->hit_count += 1;
        $product->save();

        $relatedProducts = Product::where('category_id', $product->category_id)
                           ->where('id', '!=', $id)
                           ->orderBy('id', 'desc')
                           ->limit(4)
                           ->get();
    
        return view('website.products.details', [
            'product' => $product,
            'reviews' => $reviews,
            'relatedProducts' => $relatedProducts
        ]);
    }

    public function contact(){
        return view('website.contact.index');
    }


    public function donation(){
        $projects = Project::all();
        return view('website.donation.index', ['projects' => $projects]);
    }

    public function donationStore(Request $request){
        try {
            $this->validate($request, [
                'username' => 'required|max:100',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|numeric|not_regex:/[a-z]/i',
                'payment_method' => 'required',
                'amount' => 'required|numeric',
            ], [
                'username.required' => 'Name is required',
                'username.max' => 'Name should be less than 100 characters',
                'phone.required' => 'Phone is required',
                'phone.regex' => 'Invalid phone number',
                'phone.not_regex' => 'Invalid phone number',
                'payment_method.required' => 'Payment method is required',
                'amount.required' => 'Amount is required',
                'amount.numeric' => 'Amount should be numeric',
            ]);

            $data = $request->all();
            Donation::create($data);

            return response()->json([
                'status' => 201,
                'data' => $data,
                'success' => true,
                'message' => 'Donation Successful'
            ]);
        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->toArray();
            return response()->json([
                'success' => false,
                'errors' => $errors
            ]);
        }
    }



    public function about(){
        return view('website.about.index');
    }

    public function blog(){
        $blogs = Blog::with('category', 'createdBy')->paginate(6);
        $latestBlogs = Blog::with('category', 'createdBy')->orderBy('id', 'desc')->take(3)->get();
        $blogCategories = BlogCategory::all();
        return view('website.blog.index', ['blogs' => $blogs, 'blogCategories' => $blogCategories, 'latestBlogs' => $latestBlogs]);
    }

    public function blogDetail($id){
        $blog = Blog::find($id);
        $reviews = $blog->reviews()->where('status', 1)->get();
        $latestBlogs = Blog::with('category', 'createdBy')->where('id', '!=', $id)->orderBy('id', 'desc')->take(3)->get();
        $blogCategories = BlogCategory::all();
        return view('website.blog.detail', ['blog' => $blog, 'reviews' => $reviews, 'blogCategories' => $blogCategories, 'latestBlogs' => $latestBlogs]);
    }

    public function categoryWiseBlogs($id){
        $blogs = Blog::where('category_id', $id)->with('category', 'createdBy')->paginate(6);
        $latestBlogs = Blog::with('category', 'createdBy')->orderBy('id', 'desc')->take(3)->get();
        $blogCategories = BlogCategory::all();
        return view('website.blog.index', ['blogs' => $blogs, 'blogCategories' => $blogCategories, 'latestBlogs' => $latestBlogs]);
    }
    
}
