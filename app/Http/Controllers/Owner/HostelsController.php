<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\CategoryList;
use App\Models\Review;
use App\Models\Cities; // Ensure this matches your Cities model
use App\Models\Owner\Hostels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HostelsController extends Controller
{
    /**
     * Show the hostel form.
     */
    public function hostelform(Request $request)
    {
        $categories = CategoryList::all();
        $cities = Cities::all(); // Ensure this is the correct model name

        return view('owner.hostel-form', compact('cities', 'categories'));
    }

    /**
     * Edit the hostel.
     */
    public function edit($id)
    {
        $hostel = Hostels::findOrFail($id);
        $cities = Cities::all(); // Assuming you have a City model to fetch cities

        return view('owner.edit-hostel', compact('hostel', 'cities'));
    }

    /**
     * Store a newly created hostel in storage.
     */
    public function store(Request $request)
    {
        // Log the entire request data to see what's being sent
        // Log::info('Request data: ', $request->all());
    
        // Validate the request data
        $validatedData = $request->validate([
            'hostel_name' => 'required|string|max:255',
            'best_hostel' => 'boolean',
            'is_verified' => 'boolean',
            'is_approved' => 'boolean',
            'top_rated_hostel' => 'boolean',
            'homepage' => 'boolean',
            'featured_hostel' => 'boolean',
            'category_name' => 'nullable|string|max:255',
            'hostel_address' => 'required|string|max:1000',
            'city' => 'required|string|max:255',
            'hostel_location' => 'nullable|string|max:255',
            'hostel_front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hostel_detail' => 'required|string|max:1000',
            'capacity' => 'nullable|integer',
            'email' => 'nullable|email|max:255',
            'num_rooms' => 'nullable|integer',
            'wifi' => 'required|boolean',
            'security' => 'required|boolean',
            'water_supply' => 'required|boolean',
           'hostel_price' => 'nullable|integer',
            'hostel_video' => 'nullable|file|mimes:mp4,mkv,avi|max:1000240',
            'slug' => 'nullable|string|unique:hostels,slug|max:255',
        ]);
    
        // Log validated data
       
    
        // Handle the file upload
        if ($request->hasFile('hostel_front_image')) {
            $image = $request->file('hostel_front_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/hostel_images', $imageName);
            $validatedData['hostel_front_image'] = $imageName;
        }
        // Handle the file upload for the video
        if ($request->hasFile('hostel_video')) {
            $video = $request->file('hostel_video');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $video->storeAs('public/hostel_videos', $videoName);
            $validatedData['hostel_video'] = $videoName;
        }

        // Capitalize hostel name and generate slug
        $validatedData['hostel_name'] = strtoupper($validatedData['hostel_name']);
        $validatedData['slug'] = strtolower(str_replace(' ', '-', $validatedData['hostel_name']));
    
        // Add the logged-in owner's ID
        $validatedData['owner_id'] = Auth::guard('owner')->id();
    
        // Log data before creating record
       
    
        // Create a new hostel record
        Hostels::create($validatedData);
    
        return redirect()->route('owner.home')->with('success', 'Hostel added successfully!');
    }
    
    
    

    /**
     * Update the specified hostel in storage.
     */
    public function update(Request $request, $id)
    {
        $hostel = Hostels::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'hostel_name' => 'required|string|max:255',
            'best_hostel' => 'boolean',
            'is_verified' => 'boolean',
            'is_approved' => 'boolean',
            'top_rated_hostel' => 'boolean',
            'homepage' => 'boolean',
            'featured_hostel' => 'boolean',
            'category_name' => 'nullable|string|max:255',
            'hostel_address' => 'required|string|max:1000',
            'city' => 'required|string|max:255',
            'hostel_location' => 'nullable|string|max:255',
            'hostel_front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hostel_detail' => 'required|string|max:1000',
            'capacity' => 'nullable|integer',
            'email' => 'nullable|email|max:255',
            'num_rooms' => 'nullable|integer',
            'wifi' => 'required|boolean',
            'security' => 'required|boolean',
            'water_supply' => 'required|boolean',
            'hostel_price' => 'nullable|integer',
            'hostel_video' => 'nullable|file|mimes:mp4,mkv,avi|max:1000240',
            'slug' => 'nullable|string|unique:hostels,slug|max:255',
        ]);

        // Handle the file upload
        if ($request->hasFile('hostel_front_image')) {
            $image = $request->file('hostel_front_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/hostel_images', $imageName);
            $validatedData['hostel_front_image'] = $imageName;
        }

        // Handle the file upload for the video
    if ($request->hasFile('hostel_video')) {
        $video = $request->file('hostel_video');
        $videoName = time() . '_' . $video->getClientOriginalName();
        $video->storeAs('public/hostel_videos', $videoName);
        $validatedData['hostel_video'] = $videoName;
    }

    // Capitalize hostel name and generate slug
    $validatedData['hostel_name'] = strtoupper($validatedData['hostel_name']);
    $validatedData['slug'] = strtolower(str_replace(' ', '-', $validatedData['hostel_name']));

        // Capitalize hostel name and generate slug
        $validatedData['hostel_name'] = strtoupper($validatedData['hostel_name']);
        // $validatedData['slug'] = strtolower(str_replace(' ', '-', $validatedData['hostel_name']));

        // Update the hostel record
        $hostel->update($validatedData);

        return redirect()->route('owner.home')->with('success', 'Hostel updated successfully!');
    }

    /**
     * Display the specified hostel.
     */
    public function show($id)
    {
        $hostel = Hostels::findOrFail($id); // Find the hostel by ID or fail with a 404

        return view('owner.hostel-show', compact('hostel'));
    }

    
   

    
    
    



    
  
}
