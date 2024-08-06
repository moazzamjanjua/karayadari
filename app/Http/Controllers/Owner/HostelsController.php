<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cities;
class HostelsController extends Controller
{
    public function hostelform(Request $request)
    {
        
        
        $cities = Cities::all();
        // Assuming you're using Laravel's authentication
        return view('owner.hostel-form', ['cities' => $cities]);
    }
}
