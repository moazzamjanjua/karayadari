<?php

namespace App\Http\Controllers;
use App\Models\cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function create()
    {
        $cities = cities::all();
        return view('owner.hostel-form' ,['cities' => $cities]);
    }
    
}
