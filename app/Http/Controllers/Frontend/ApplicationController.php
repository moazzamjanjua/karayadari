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
           
        ]);

          // Store the resume in the 'public/resumes' directory
        $resumePath = $request->file('resume')->store('public/resumes');

        // Generate the full public URL using the base URL
        $baseUrl = config('app.url'); // Retrieves base URL from .env
        $resumeUrl = $baseUrl . Storage::url($resumePath);

        // Save application data in the database
        Application::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'resume_path' => $resumeUrl,
           
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your application has been submitted. Our team will contact you shortly.');
    }
}
