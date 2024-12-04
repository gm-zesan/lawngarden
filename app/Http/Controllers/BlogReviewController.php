<?php

namespace App\Http\Controllers;

use App\Models\BlogReview;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;
class BlogReviewController extends Controller
{

    
    public function index()
    {
        $reviews = BlogReview::with('blog', 'user')->get();
        return view('admin.reviews.blog', compact('reviews'));
    }

    public function store(Request $request, $blogId)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:1000',
        ]);
        $customer = Customer::find(Session::get('customer_id'));
        BlogReview::create([
            'blog_id' => $blogId,    
            'user_id' => $customer->id,
            'rating' => $request->rating,
            'review' => $request->review, 
        ]);
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }

    public function changeReviewStatus($id)
    {
        $review = BlogReview::findOrFail($id);
        $review->status = !$review->status;
        $review->save();
        return redirect()->back()->with('success', 'Review status updated successfully.');
    }

    public function deleteReview($id)
    {
        $review = BlogReview::findOrFail($id);
        $review->delete();
        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
