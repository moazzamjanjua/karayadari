<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Owner\HostelRoom;
use Illuminate\Http\Request;
use App\Models\Owner\Hostels;
use Illuminate\Support\Facades\Auth;
class RoomController extends Controller
{
    public function showroom($id)
{
    $hostel = Hostels::findOrFail($id);
    return view('owner.room-form', compact('hostel'));
}
public function store(Request $request)
{
    // Dump the raw request data to see all fields coming through
    // dd('Raw Request Data:', $request->all());

    // Validate the request data
    $validatedData = $request->validate([
        'hostel_id' => 'required|exists:hostels,id',
        'room_images' => 'nullable|array|max:4',
        'room_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'room_type' => 'required|string|max:255',
        'floor_number' => 'required|string|max:255',
        'room_size' => 'required|integer|min:1',
        'current_occupancy' => 'required|integer|min:0',
        'required_occupancy' => 'required|integer|min:1',
        'wifi' => 'sometimes|boolean',
        'filter_water' => 'sometimes|boolean',
        'gas' => 'sometimes|boolean',
        'chair' => 'sometimes|boolean',
        'almaira' => 'sometimes|boolean',
        'table' => 'sometimes|boolean',
        'fan' => 'sometimes|boolean',
        'ac' => 'sometimes|boolean',
        'geyser' => 'sometimes|boolean',
        'washroom' => 'required|string|max:255',
        'room_detail' => 'nullable|string|max:1000',
    ]);

    $validatedData['owner_id'] = Auth::guard('owner')->id();

    // Handle image files if present
    if ($request->hasFile('room_images')) {
        $images = [];
        foreach ($request->file('room_images') as $image) {
            // Generate a unique name for each image
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Store the image in the 'public/room_images' directory
            $image->storeAs('public/room_images', $imageName);
            // Add the image name to the array
            $images[] = $imageName;
        }
        // Convert the array to JSON and add it to validated data
        $validatedData['room_images'] = json_encode($images);
    }

    
    // dd('Final Data Before Saving:', $validatedData);

    // Create a new HostelRoom record
    try {
        HostelRoom::create($validatedData);
    } catch (\Exception $e) {
        dd('Database Insertion Error:', $e->getMessage());
    }

    // Redirect with success message
    return redirect()->route('owner.home')->with('success', 'Room details added successfully!');
}




}
