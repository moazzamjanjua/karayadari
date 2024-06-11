<?php

namespace App\Http\Controllers\Owner;
use App\Models\Owner\owner_hostels;
use App\Models\Owner\owner_rooms;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostalDetailController extends Controller
{
    public function showHostelDetails(Request $request)
    {
        $owner_id = $request->input('owner_id');
        $hostel_id = $request->input('hostel_id');
       
        $rooms = owner_rooms::where('hostel_id',$hostel_id)->get();
        $data = [ 'hostel_id' => $hostel_id, 'owner_id' => $owner_id, 'rooms' => $rooms,];
        return view('owner.hostel-details' ,$data);
        
    }
   

}
