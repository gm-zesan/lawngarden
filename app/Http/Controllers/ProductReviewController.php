<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Session;
class ProductReviewController extends Controller
{
    public function index()
    {
        $reviews = ProductReview::with('product', 'user')->get();
        return view('admin.reviews.product', compact('reviews'));
    }


    public function store(Request $request, $product)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:1000',
        ]);
        $customer = Customer::find(Session::get('customer_id'));
        ProductReview::create([
            'product_id' => $product,
            'user_id' => $customer->id,
            'rating' => $request->rating,
            'review' => $request->review, 
        ]);
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }

    public function changeReviewStatus($id)
    {
        $review = ProductReview::findOrFail($id);
        $review->status = !$review->status;
        $review->save();
        return redirect()->back()->with('success', 'Review status updated successfully.');
    }

    public function deleteReview($id)
    {
        $review = ProductReview::findOrFail($id);
        $review->delete();
        return redirect()->back()->with('success', 'Review deleted successfully.');
    }


}
