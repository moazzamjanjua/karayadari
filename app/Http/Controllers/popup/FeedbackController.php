<?php

namespace App\Http\Controllers\popup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeedBacks;

class FeedbackController extends Controller
{
   public function store(Request $request)
{
    try {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'number' => 'required|string|max:11',
            'message' => 'required|string|max:1000',
            
        ]);

        // Store the feedback in the database
        Feedbacks::create($validatedData);

        // Return a JSON response with a success message
        return response()->json(['success' => true, 'message' => 'Thank you for your feedback!']);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json(['errors' => $e->errors()], 422);  // Send validation errors back to the frontend
    }
}




}
