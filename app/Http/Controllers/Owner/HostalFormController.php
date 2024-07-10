<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Owner\owner_hostels;
use Illuminate\Http\Request;
use App\Models\Cities;
class HostalFormController extends Controller

{
    public function hostelForm(Request $request)
    {
        
        $ownerId = $request->input('owner_id');
        $cities = Cities::all();
        // Assuming you're using Laravel's authentication
        return view('owner.hostel-form', ['cities' => $cities, 'owner_id' => $ownerId]);
    }

    public function store(Request $request)
    {
       
        $ownerId = $request->input('owner_id');
        
    
        // Validation
        $request->validate([
            'owner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'owner_name' => 'required|string|max:100',
            'owner_number' => 'required|string|max:15',
            'hostel_name' => 'required|string|max:100',
            'hostel_address' => 'required|string',
            'city' => 'required|string|max:50',
            'hostel_location' => 'nullable|string|max:50',
            'hostel_front_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hostel_detail' => 'required|string',
            'capacity' => 'nullable|integer',
            'email' => 'nullable|string|email|max:100',
            'num_rooms' => 'nullable|integer',
            'facilities' => 'nullable|string',
        ]);
    
        // Handle file uploads
        $ownerImage = null;
        if ($request->hasFile('owner_image')) {
            $ownerImage = $request->file('owner_image')->store('owner_image', 'public');
        }
    
        $hostelFrontImage = null;
        if ($request->hasFile('hostel_front_image')) {
            $hostelFrontImage = $request->file('hostel_front_image')->store('hostel_image', 'public');
        }
    
      

        // Create new owner hostel entry
        owner_hostels::create([
            'owner_id' =>$ownerId,
            'owner_image' => $ownerImage,
            'owner_name' => $request->owner_name,
            'owner_number' => $request->owner_number,
            'hostel_name' => $request->hostel_name,
            'hostel_address' => $request->hostel_address,
            'city' => $request->city,
            'hostel_location' => $request->hostel_location,
            'hostel_front_image' => $hostelFrontImage,
            'hostel_detail' => $request->hostel_detail,
            'capacity' => $request->capacity,
            'email' => $request->email,
            'num_rooms' => $request->num_rooms,
            'facilities' => $request->facilities,
            'is_verified' => false,
            'is_approved' => false,
            'top_rated' => false,
            'homepage' => false,
            'is_featured' => false,
        ]);
    
        return redirect()->back()->with('success', 'Hostel details have been submitted successfully.');
    }
    
}