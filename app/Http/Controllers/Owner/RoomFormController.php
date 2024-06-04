<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomFormController extends Controller
{
    public function room(){
        return view('owner.owner-room');
    }
}
