<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cities;
use App\Models\Owner\Hostels;
use Illuminate\Support\Facades\Auth;
class HostelsController extends Controller
{
    public function hostelform(Request $request)
    {
        
        
        $cities = Cities::all();
        // Assuming you're using Laravel's authentication
        return view('owner.hostel-form', ['cities' => $cities]);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'hostel_name' => 'required|string|max:255',
            'hostel_address' => 'required|string',
            'city' => 'required|string|max:255',
            'hostel_location' => 'nullable|string|max:255',
            'hostel_front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hostel_detail' => 'required|string',
            'capacity' => 'nullable|integer',
            'email' => 'nullable|email',
            'num_rooms' => 'nullable|integer',
            'wifi' => 'required|string|in:yes,no',
            'security' => 'required|string|in:yes,no',
            'water_supply' => 'required|string|in:yes,no',
        ]);

        // Handle the file upload
        if ($request->hasFile('hostel_front_image')) {
            $image = $request->file('hostel_front_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/hostel_images', $imageName);
            $validatedData['hostel_front_image'] = $imageName;
        }

        // Add the logged-in owner's ID to the validated data
        $validatedData['owner_id'] = Auth::guard('owner')->id();

        // Create a new hostel record
        Hostels::create($validatedData);

        return redirect()->route('owner.home')->with('success', 'Hostel added successfully!');
    }

    // In your HostelsController

public function show($id)
{
    $hostel = Hostels::findOrFail($id); // Find the hostel by ID or fail with a 404

    return view('owner.hostel.show', compact('hostel'));
}

}
