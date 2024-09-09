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

    public function allHostels(Request $request)
    {

        $selectedCategory = $request->query('category');
        $view = $request->query('view', 'all'); // Default view is 'all'
        $sort = $request->query('sort', 'date'); // Default sort by date

        // Initialize the query to fetch hostels
        $query = Hostels::query();

        // Filter by category if selected
        if ($selectedCategory) {
            $query->whereHas('category', function ($q) use ($selectedCategory) {
                $q->where('category_name', $selectedCategory);
            });
        }

        // Filter by view type
        if ($view === 'featured-hostel') {
            $query->where('featured_hostel', 1);
        } elseif ($view === 'verified-hostels') {
            // Sort hostels by average rating
            $query->where('is_verified', 1);
        } elseif ($view === 'best-hostels') {
            $query->where('best_hostel', 1);
        }

        // Sort hostels
        if ($sort == 'date') {
            $query->orderBy('created_at', 'desc');
        }

        // Paginate results (10 per page)
        $hostels = $query->paginate(10);

        // Get categories to display in the view
        $categories = CategoryList::all();

        // Calculate average rating for each hostel
        foreach ($hostels as $hostel) {
            $hostel->reviews_avg_rating = Review::where('hostel_id', $hostel->id)->avg('rating');
        }

        // Pass data to the view
        return view('frontend.result', compact('hostels', 'categories', 'view', 'selectedCategory'));
    }
    public function searchHostel(Request $request)
    {


        $selectedCategory = $request->query('category');
        $selectedPrice = $request->query('hostel_price'); // Hostel price ke liye alag variable
        $selectedCity = $request->query('city'); // City ke liye alag variable

        $query = Hostels::query();

        // Filter by city if provided (partial match using LIKE)
        if ($request->filled('city')) {
            $query->where('city', 'LIKE', '%' . $selectedCity . '%');
        }

        // Filter by hostel_price if provided
        if ($request->filled('hostel_price')) {
            $query->where('hostel_price', '<=', $selectedPrice);
        }

        // Filter by category if provided
        if ($selectedCategory) {
            $query->whereHas('category', function ($q) use ($selectedCategory) {
                $q->where('category_name', $selectedCategory);
            });
        }

        // Paginate results (10 per page)
        $hostels = $query->paginate(10);

        // Calculate average rating for each hostel
        foreach ($hostels as $hostel) {
            $hostel->reviews_avg_rating = Review::where('hostel_id', $hostel->id)->avg('rating');
        }
        $categories = CategoryList::all();
        $cities = cities::all();
        $areas = areas::all();

        // Pass data to the view
        return view('frontend.result', compact('hostels','cities', 'areas','selectedCategory', 'selectedPrice', 'selectedCity', 'categories'));
    }


}
