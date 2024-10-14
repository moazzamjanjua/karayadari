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
        $cities = cities::all();
        $categories = CategoryList::all();
        $areas = areas::all();
        // Fetch verified, featured, and best hostels with reviews and user names
        $verifiedHostels = Hostels::where('is_verified', true)
            ->with([
                'reviews' => function ($query) {
                    $query->select('id', 'hostel_id', 'rating', 'review')
                        ->with('user:id,name'); // Eager load user with selected fields
                }
            ])
            ->get();

        $featuredHostels = Hostels::where('featured_hostel', true)
            ->with([
                'reviews' => function ($query) {
                    $query->select('id', 'hostel_id', 'user_id', 'rating', 'review')
                        ->with('user:id,name'); // Eager load user with selected fields
                }
            ])
            ->get();

        $bestHostels = Hostels::where('best_hostel', true)
            ->with([
                'reviews' => function ($query) {
                    $query->select('id', 'hostel_id', 'user_id', 'rating', 'review')
                        ->with('user:id,name'); // Eager load user with selected fields
                }
            ])
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


    public function allHostel()
    {
        $allhostels = Hostels::all();
        return response()->json([
            'allhostels' => $allhostels,
        ]);
    }
    public function findHostels(Request $request)
    {
        // Initialize the query to fetch only approved hostels
        $query = Hostels::where('is_approved', true);
    
        // Get filter inputs from the request
        $city = $request->input('city');
        $area = $request->input('area');
        $category = $request->input('category');
    
        // Apply filters conditionally if provided
        if ($city) {
            $query->where('city', $city);
        }
    
        if ($area) {
            $query->where('area', $area);
        }
    
        if ($category) {
            $query->where('category_name', $category);
        }
    
        // Execute the query and get results
        $hostels = $query->get();
    
        // Check if data is found
        if ($hostels->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No hostels found for the given filters',
            ], 404);
        }
    
        // Return the filtered data
        return response()->json([
            'success' => true,
            'message' => 'Hostels fetched successfully',
            'data' => $hostels,
        ], 200);
    }
    

    
    
}
