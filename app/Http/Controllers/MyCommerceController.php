<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Product;
use App\Models\WebsiteReview;
use Illuminate\Http\Request;

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
        return view('website.projects.index');
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
