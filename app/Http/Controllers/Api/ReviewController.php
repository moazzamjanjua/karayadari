<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'hostel_id' => 'required|exists:hostels,id', // Ensure that hostel exists
            'rating' => 'required|integer|min:1|max:5', // Rating should be between 1 to 5
            'review' => 'required|string|max:255', // Review content
            'user_id' => 'required|exists:users,id', // Ensure that user exists
        ]);
    
        // Check if the user has already reviewed this hostel
        $existingReview = Review::where('user_id', $validatedData['user_id'])
            ->where('hostel_id', $validatedData['hostel_id'])
            ->first();
    
        if ($existingReview) {
            return response()->json([
                'success' => false,
                'message' => 'You have already submitted the review for this hostel',
            ], 403); // 403 Forbidden status code
        }
    
        // Create a new review if it doesn't exist
        $review = Review::create([
            'user_id' => $validatedData['user_id'],
            'hostel_id' => $validatedData['hostel_id'],
            'rating' => $validatedData['rating'],
            'review' => $validatedData['review'],
        ]);
    
        return response()->json([
            'success' => true,
            'message' => 'Review posted successfully',
            'review' => $review,
        ], 201);
    }
    
}

