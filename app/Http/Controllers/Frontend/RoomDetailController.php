<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomDetailController extends Controller
{
    public function roomDetail(){
        return view('frondend.room-detail');
    }
}
