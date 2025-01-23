<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact; // Ensure this line is correct

class ContactusController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }
    
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Store the feedback in the database
        Contact::create($validatedData);

        // Return a JSON response with a success message
        return response()->json(['success' => true]);
    }
}
