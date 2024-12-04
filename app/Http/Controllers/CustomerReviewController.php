<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\WebsiteReview;
use Illuminate\Http\Request;
use Session;
class CustomerReviewController extends Controller
{

    
    public function index()
    {
        $reviews = WebsiteReview::with('user')->get();
        return view('admin.reviews.website', compact('reviews'));
    }

    public function reviewForm()
    {
        $user = Customer::find(Session::get('customer_id'));
        $review = WebsiteReview::where('user_id', $user->id)->first();

        return view('customer.review', compact('review'));
    }

    public function submitReview(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:1000',
        ]);
        
        $customer = Customer::find(Session::get('customer_id'));

        // Update or create the customer's review
        WebsiteReview::updateOrCreate(
            ['user_id' => $customer->id],
            [
                'rating' => $request->rating,
                'review' => $request->review,
            ]
        );

        return redirect()->back()->with('success', 'Your review has been submitted.');
    }

    public function changeReviewStatus($id)
    {
        $review = WebsiteReview::findOrFail($id);
        $review->status = !$review->status;
        $review->save();
        return redirect()->back()->with('success', 'Review status updated successfully.');
    }

    public function deleteReview($id)
    {
        $review = WebsiteReview::findOrFail($id);
        $review->delete();
        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
