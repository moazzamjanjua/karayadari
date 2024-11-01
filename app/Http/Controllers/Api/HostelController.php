<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Owner\Hostels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HostelController extends Controller
{
    public function store(Request $request)
{
    try {
        // Validate the request data
        $validatedData = $request->validate([
            'owner_id' => 'required|exists:owners,id', // Ensure owner exists
            'hostel_name' => 'required|string|max:255',
            'best_hostel' => 'boolean',
            'is_verified' => 'boolean',
            'is_approved' => 'boolean',
            'top_rated_hostel' => 'boolean',
            'homepage' => 'boolean',
            'featured_hostel' => 'boolean',
            'category_name' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'area' => 'nullable|string|max:255',
            'hostel_location' => 'nullable|string|max:255',
            'hostel_front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
            'hostel_detail' => 'required|string|max:10000',
            'hostel_address' => 'required|string|max:1000',
            'capacity' => 'nullable|integer',
            'required_capacity' => 'nullable|integer',
            'owner_number' => 'nullable|string|max:11',
            'owner_email' => 'nullable|email|max:255',
            'num_rooms' => 'nullable|integer',
            'wifi' => 'required|boolean',
            'security' => 'required|boolean',
            'water_supply' => 'required|boolean',
            'hostel_price' => 'nullable|integer',
            'hostel_video' => 'nullable|file|mimes:mp4,mkv,avi|max:102400',
            'slug' => 'nullable|string|unique:hostels,slug|max:255',
        ]);

        // Handle the file upload for the hostel front image
        if ($request->hasFile('hostel_front_image')) {
            $image = $request->file('hostel_front_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/hostel_images'), $imageName);
            $validatedData['hostel_front_image'] = url('storage/hostel_images/' . $imageName);
        }

        // Handle the file upload for the hostel video
        if ($request->hasFile('hostel_video')) {
            $video = $request->file('hostel_video');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('storage/hostel_videos'), $videoName);
            $validatedData['hostel_video'] = url('storage/hostel_videos/' . $videoName);
        }

        // Capitalize hostel name and generate slug
        $validatedData['hostel_name'] = strtoupper($validatedData['hostel_name']);
        $validatedData['slug'] = strtolower(str_replace(' ', '-', $validatedData['hostel_name']));

        // Create the hostel record
        $hostel = Hostels::create($validatedData);

        // Return success JSON response
        return response()->json([
            'success' => true,
            'message' => 'Hostel created successfully.',
            'hostel' => $hostel,
            'redirect_url' => route('owner.home'),
        ], 201);

    } catch (\Illuminate\Validation\ValidationException $e) {
        // Return validation errors as JSON
        return response()->json(['errors' => $e->errors()], 422);

    } catch (\Exception $e) {
        // Catch any other errors and return them
        return response()->json([
            'success' => false,
            'message' => 'An error occurred during the request.',
            'error' => $e->getMessage(),
        ], 500);
    }
}

}
