<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner\Hostels;

class RoomController extends Controller
{
    public function showroom($id)
{
    $hostel = Hostels::findOrFail($id);
    return view('owner.room-form', compact('hostel'));
}

}
