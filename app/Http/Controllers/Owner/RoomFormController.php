<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner\owner_rooms;

class RoomFormController extends Controller
{
    public function room(Request $request) {
        $hostelId = $request->input('hostel_id');
        $ownerId = $request->input('owner_id');
    $data = [ 'hostel_id' => $hostelId, 'owner_id' => $ownerId ];
        return view('owner.owner-room',$data );
    }

    public function store(Request $request) {
        $ownerId = $request->input('owner_id');
        $hostelId = $request->input('hostel_id');

        // $request->validate([
        //     'room_images' => 'required|array|size:5',
        //     'room_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'room_type' => 'required|in:single_bed,double_bed,carpeted',
        //     'floor_number' => 'required|in:ground_floor,first_floor,second_floor,third_floor',
        //     'room_size' => 'required|integer',
        //     'current_occupancy' => 'required|integer',
        //     'required_occupancy' => 'required|integer',
        //     'washroom' => 'required|in:private,share',
        //     'room_detail' => 'nullable|string',
        // ]);

        $roomImages = [];
        if ($request->hasFile('room_images')) {
            foreach ($request->file('room_images') as $file) {
                $path = $file->store('room_images', 'public');
                array_push($roomImages,$path);
                // $roomImages[] = $path;
            }
        }
        
        $data = [
            'owner_id' => $ownerId,
            'hostel_id' => $hostelId,
            'room_images' =>  implode(',',$roomImages), // json_encode($roomImages); Store images as JSON
            'room_type' => $request->room_type,
            'floor_number' => $request->floor_number,
            'room_size' => $request->room_size,
            'current_occupancy' => $request->current_occupancy,
            'required_occupancy' => $request->required_occupancy,
            'wifi' => $request->has('wifi'),
            'filter_water' => $request->has('filter_water'),
            'gas' => $request->has('gas'),
            'chair' => $request->has('chair'),
            'almirah' => $request->has('almirah'),
            'table' => $request->has('table'),
            'fan' => $request->has('fan'),
            'ac' => $request->has('ac'),
            'geyser' => $request->has('geyser'),
            'washroom' => $request->washroom,
            'room_detail' => $request->room_detail,
        ];
        // dd($data);exit();
        owner_rooms::create($data);

        return redirect()->back()->with('success', 'Room created successfully!');
    }
}

