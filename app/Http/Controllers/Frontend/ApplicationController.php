<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Storage;
class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'position' => 'required|string',
            'resume' => 'required|mimes:pdf|max:2048',
            'cover_letter' => 'required|string',
        ]);

        // Handle resume upload and generate the full URL
        $resumePath = $request->file('resume')->store('resumes', 'public');
        $resumeUrl = url(Storage::url($resumePath));  // Generate full URL

        // Save application data in the database
        Application::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'resume_path' => $resumeUrl,  // Store the full URL
            'cover_letter' => $request->cover_letter,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your application has been submitted. Our team will contact you shortly.');
    }
}
