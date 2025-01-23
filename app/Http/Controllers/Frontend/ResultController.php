<?php

namespace App\Http\Controllers\Frontend;

use App\Models\areas;
use App\Models\CategoryList;
use App\Models\cities;
use App\Http\Controllers\Controller;
use App\Models\Owner\Hostels;
use Illuminate\Http\Request;
use App\Models\Review;




class ResultController extends Controller
{

    public function index(Request $request)
    {
        $selectedCity = $request->input('city');
        $selectedCategory = $request->input('category');
        $selectedArea = $request->input('area');
    
     // Initialize the query to fetch only approved hostels
        $query = Hostels::where('is_approved', true);
            // Sort hostels by date for all view types
    $query->orderBy('created_at', 'desc');
    
        // Apply filters conditionally
        if ($selectedCity) {
            $query->where('city', $selectedCity);
        }
    
        if ($selectedCategory) {
            $query->where('category_name', $selectedCategory);
        }
    
        if ($selectedArea) {
            $query->where('area', $selectedArea);
        }
    
        $cities = cities::All();
        $categories = CategoryList::all();
        $areas = areas::all();
        // Execute the query and paginate results
        $hostels = $query->paginate(10);
    
        // Return the filtered results, for example, to a view
        return view('frontend.result', compact('hostels','cities','categories','areas'));
    }

 public function searchHostel(Request $request)
{
    // Initialize the query to fetch only approved hostels
    $query = Hostels::where('is_approved', true); // Only fetch approved hostels

    // Get the filter inputs from the request
    $selectedCity = $request->input('city');
    $selectedCategory = $request->input('category');
    $selectedArea = $request->input('area');
    
        // Sort hostels by date for all view types
    $query->orderBy('created_at', 'desc');

    // Apply filters conditionally
    if ($selectedCity) {
        $query->where('city', $selectedCity);
    }

    if ($selectedCategory) {
        $query->where('category_name', $selectedCategory);
    }

    if ($selectedArea) {
        $query->where('area', $selectedArea);
    }

    // Fetch all cities, categories, and areas for filtering
    $cities = cities::all(); // Assuming 'cities' is a model representing the cities table
    $categories = CategoryList::all(); // Fetching all categories
    $areas = areas::all(); // Assuming 'areas' is a model representing the areas table

    // Execute the query and paginate results (10 per page)
    $hostels = $query->paginate(10);

    // Return the filtered results, for example, to a view
    return view('frontend.result', compact('hostels', 'cities', 'categories', 'areas'));
}


  
  

    

}
