<?php

namespace App\Http\Controllers\popup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedbacks;
class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'number' => 'required|string|max:15',
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Store the feedback in the database
        Feedbacks::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
