<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\CategoryList;
use App\Models\Review;
use App\Models\areas;
use App\Models\cities; // Ensure this matches your Cities model
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
        $areas = areas::all();
        return view('owner.hostel-form', compact('cities', 'categories' , 'areas'));
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
        // Validate the request data with custom messages
        $validatedData = $request->validate([
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
            'capacity' => 'nullable|integer',
            'required_capacity' => 'nullable|integer',
            'owner_number' => 'nullable|integer',
            'owner_email' => 'nullable|email|max:255',
            'num_rooms' => 'nullable|integer',
            'wifi' => 'required|boolean',
            'security' => 'required|boolean',
            'water_supply' => 'required|boolean',
            'hostel_price' => 'nullable|integer',
            'hostel_video' => 'nullable|file|mimes:mp4,mkv,avi|max:102400',
            'slug' => [
                'nullable',
                'string',
                'max:255',
            ],
        ], [
            'slug.unique' => 'Hostel name is already taken. Kindly make changes in hostel name to ensure the slug is unique.',
        ]);
    
        // Generate slug and capitalize hostel name
        $validatedData['hostel_name'] = strtoupper($validatedData['hostel_name']);
        $validatedData['slug'] = strtolower(str_replace(' ', '-', $validatedData['hostel_name']));
    
        // Check uniqueness of the slug after generating it
        if (Hostels::where('slug', $validatedData['slug'])->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'Hostel name is already taken. Kindly make changes in the name to ensure the slug is unique.',
            ], 422);
        }


        // Check if it's a new city
    if ($request->has('new_city') && !empty($request->new_city)) {
        cities::firstOrCreate(['city_name' => $request->new_city]);
        $validatedData['city'] = $request->new_city;
    }

    // Check if it's a new area
    if ($request->has('new_area') && !empty($request->new_area)) {
        areas::firstOrCreate(['area_name' => $request->new_area]);
        $validatedData['area'] = $request->new_area;
    }
    
        // Handle file uploads for image and video if provided
        if ($request->hasFile('hostel_front_image')) {
            $image = $request->file('hostel_front_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/hostel_images'), $imageName);
            $validatedData['hostel_front_image'] = url('storage/hostel_images/' . $imageName);
        }
    
        if ($request->hasFile('hostel_video')) {
            $video = $request->file('hostel_video');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('storage/hostel_videos'), $videoName);
            $validatedData['hostel_video'] = url('storage/hostel_videos/' . $videoName);
        }
    
        // Add the logged-in owner's ID, number, and email
        $validatedData['owner_id'] = Auth::guard('owner')->id();
        $validatedData['owner_number'] = Auth::guard('owner')->user()->owner_number;
        $validatedData['owner_email'] = Auth::guard('owner')->user()->owner_email;
    
        // Create a new hostel record
        Hostels::create($validatedData);
    
        return response()->json([
            'success' => true,
            'redirect_url' => route('owner.home'),
        ]);
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
            'city' => 'required|string|max:255',
            'hostel_location' => 'nullable|string|max:255',
            'hostel_front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
            'hostel_detail' => 'required|string|max:1000',
            'capacity' => 'nullable|integer',
                        'required_capacity' => 'nullable|integer',

            'owner_number' => 'nullable|integer',
            'owner_email' => 'nullable|email|max:255',
            'num_rooms' => 'nullable|integer',
            'wifi' => 'required|boolean',
            'security' => 'required|boolean',
            'water_supply' => 'required|boolean',
            'hostel_price' => 'nullable|integer',
            'hostel_video' => 'nullable|file|mimes:mp4,mkv,avi|max:102400',
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
