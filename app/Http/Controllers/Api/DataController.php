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
        
        
        $verifiedHostels = Hostels::where('is_verified', true)->get(); // Fetch verified hostels
        $featuredHostels = Hostels::where('featured_hostel', true)->get(); // Fetch featured hostels
        $bestHostels = Hostels::where('best_hostel', true)->get();

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
}
