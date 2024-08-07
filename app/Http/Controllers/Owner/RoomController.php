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


    dd($validatedData);
    $validatedData['owner_id'] = Auth::guard('owner')->id();

    if ($request->hasFile('room_images')) {
        $images = [];
        foreach ($request->file('room_images') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/room_images', $imageName);
            $images[] = $imageName;
        }
        $validatedData['room_images'] = json_encode($images);
    }

    HostelRoom::create($validatedData);

    return redirect()->route('owner.home')->with('success', 'Room details added successfully!');
}



}
