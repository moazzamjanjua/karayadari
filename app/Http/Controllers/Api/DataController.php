<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Owner\Hostels;
use Illuminate\Http\Request;
use App\Models\areas;
use App\Models\cities;
use App\Models\CategoryList;

class DataController extends Controller
{
    public function getData()
{
    // Fetch data from the tables
    $cities = cities::all();
    $categories = CategoryList::all();
    $areas = areas::all();

    // Fetch verified, featured, and best hostels with their reviews and ratings
    $verifiedHostels = Hostels::where('is_verified', true)
        ->with(['reviews' => function ($query) {
            $query->select('user_id','hostel_id', 'rating', 'review');
        }])
        ->get();

    $featuredHostels = Hostels::where('featured_hostel', true)
        ->with(['reviews' => function ($query) {
            $query->select('user_id','hostel_id', 'rating', 'review');
        }])
        ->get();

    $bestHostels = Hostels::where('best_hostel', true)
        ->with(['reviews' => function ($query) {
            $query->select('user_id','hostel_id', 'rating', 'review');
        }])
        ->get();

    // Combine the data into one array and return as JSON
    return response()->json([
        'cities' => $cities,
        'categories' => $categories,
        'areas' => $areas,
        'verified_hostels' => $verifiedHostels,
        'featured_hostels' => $featuredHostels,
        'best_hostels' => $bestHostels,
    ]);
}

    public function allHostel(){
        $allhostels = Hostels::all();
       return response()->json([
          'allhostels' =>$allhostels,
       ]);
    }
}
