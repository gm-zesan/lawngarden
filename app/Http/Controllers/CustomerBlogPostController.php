<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CustomerBlogPostController extends Controller
{
    public function index()
    {
        $customer = Customer::find(Session::get('customer_id'));
        $blogs = $customer->blogs;
        return view('customer.blog-post', compact('blogs'));
    }

    public function create()
    {
        $categories = BlogCategory::all();
        return view('customer.create-blog-post', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ],[
            'title.required' => 'The title field is required.',
            'description.required' => 'The description field is required.',
        ]);
        $data = $request->all();

        if($request->file('image')){
            $data['image'] = Blog::getImageUrl($request);
        }
        $customer = Customer::find(Session::get('customer_id'));
        $data['created_by'] = $customer->id;
        Blog::create($data);

        return redirect()->back()->with('message','Blog created successfully.');
    }
}
