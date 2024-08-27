<?php

namespace App\Http\Controllers;

use App\Models\Owner\Hostels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;


class ReviewController extends Controller
{
    public function store(Request $request, $hostel_id)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please log in to submit your review.');
        }

        // Validate the form data
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'review' => 'required|string|max:500',
        ]);

        // Create the review
        Review::create([
            'hostel_id' => $hostel_id,
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your review has been submitted!');
    }

    public function show($id)
{
    // Fetch the hostel
    $hostel = Hostels::with('rooms')->findOrFail($id);

    // Fetch reviews related to this hostel
    $reviews = Review::where('hostel_id', $id)
                     ->with('user') // Assuming Review has a relationship with User
                     ->orderBy('created_at', 'desc')
                     ->get();

    return view('hostel-detail', compact('hostel', 'reviews'));
}
}

