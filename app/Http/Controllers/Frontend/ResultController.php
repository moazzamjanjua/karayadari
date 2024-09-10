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

    public function index()
    {

        // Fetch top-rated hostels
        $topRatedHostels = Hostels::where('top_rated_hostel', 1)->get()->unique('hostel_name');

        // Fetch featured hostels 
        $featuredHostels = Hostels::where('featured_hostel', 1)->get()->unique('hostel_name');

        // Fetch best hostels
        $bestHostels = Hostels::where('best_hostel', 1)->take(6)->get();


   
        // IDs 1 aur 2 ko match karte hue categories fetch kar rahe hain
        $categories = CategoryList::all();


        return view('frontend.result', compact('categories', 'topRatedHostels', 'featuredHostels', 'bestHostels'));
    }


  // In your Controller (e.g., ResultController or HomeController)
  public function searchHostel(Request $request)
  {
      // Get the filter inputs from the request
      $selectedCity = $request->input('city');
      $selectedCategory = $request->input('category');
      $selectedArea = $request->input('area');
  
      // Create the base query
      $query = Hostels::query();
  
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
  
  

    

}
