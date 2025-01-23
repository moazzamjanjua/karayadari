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
    // Check if the owner is logged in
    if (Auth::guard('owner')->check()) {
        // Get the logged-in owner
        $owner = Auth::guard('owner')->user();
        
        // Fetch the hostel with its associated rooms
        $hostel = Hostels::with('rooms')->findOrFail($id);

        // Return the view with the fetched hostel and rooms data
        return view('owner.room-form', compact('hostel'));
    } else {
        // Redirect to the owner login page if not authenticated
        return redirect()->route('owner-login');
    }
}



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hostel_id' => 'required|exists:hostels,id',
            'room_images' => 'nullable|array|max:4',
            'room_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'room_type' => 'required|string|max:255',
            'room_price' => 'required|integer|min:1000|max:10000',
            'floor_number' => 'required|string|max:255',
            'room_size' => 'required|integer|min:1',
            'current_occupancy' => 'required|integer|min:0',
            'required_occupancy' => 'required|integer|min:1',
            'wifi' => 'boolean',
            'filter_water' => 'boolean',
            'gas' => 'boolean',
            'chair' => 'boolean',
            'almaira' => 'boolean',
            'table' => 'boolean',
            'fan' => 'boolean',
            'ac' => 'boolean',
            'geyser' => 'boolean',
            'washroom' => 'required|string|max:255',
            'room_detail' => 'nullable|string|max:1000',
        ]);

        // Set owner_id from the authenticated owner
        $validatedData['owner_id'] = Auth::guard('owner')->id();

        // Handle file uploads
      if ($request->hasFile('room_images')) {
    $images = [];
    
    foreach ($request->file('room_images') as $image) {
        // Create a unique name for each image
        $imageName = time() . '_' . $image->getClientOriginalName();
        
        // Move the image to the public/room_images directory
        $image->move(public_path('storage/room_images'), $imageName);
        
        // Store the image name in the images array
        $images[] = $imageName;
    }
    
    // Save the room images as a JSON array in the database
    $validatedData['room_images'] = json_encode($images);
} else {
    // If no images were uploaded, store an empty array in the database
    $validatedData['room_images'] = json_encode([]);
}


        // Create the room with validated data
        $room = HostelRoom::create($validatedData);

        // Redirect to the hostel's detail page
        return redirect()->route('owner.hostel.show', ['id' => $validatedData['hostel_id']])
            ->with('success', 'Room details added successfully!');
    }






}
