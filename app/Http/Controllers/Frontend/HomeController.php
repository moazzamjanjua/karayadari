<?php
namespace App\Http\Controllers\Frontend;

use App\Models\CategoryList;
use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Models\Owner\Hostels;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {

        // Fetch top-rated hostels
        $topRatedHostels = Hostels::where('top_rated_hostel', 1)->get()->unique('hostel_name');

        // Fetch featured hostels 
        $featuredHostels = Hostels::where('featured_hostel', 1)->get()->unique('hostel_name');

        // Fetch best hostels
        $bestHostels = Hostels::where('best_hostel', 1)->take(6)->get();
        ;


        // IDs 1 aur 2 ko match karte hue categories fetch kar rahe hain
        $categories = CategoryList::all();


        return view('frontend.index', compact('categories', 'topRatedHostels', 'featuredHostels', 'bestHostels'));
    }

 
    public function show($slug)
    {
        // Fetch the hostel using slug
        $hostel = Hostels::where('slug', $slug)->first();
    
        // Check if the hostel exists
        if (!$hostel) {
            abort(404, 'Hostel not found');
        }
    
        // Fetch reviews related to this hostel
        $reviews = Review::where('hostel_id', $hostel->id)->orderBy('created_at', 'desc')->get();

        $relatedHostels = Hostels::inRandomOrder()->take(6)->get();
        $bestHostels = Hostels::where('best_hostel', 1)->take(3)->get();    
        // Pass $hostel, $reviews, $reviewCount, and $averageRating to the view
        return view('frontend.hostel-detail', compact('hostel', 'reviews','relatedHostels' ,'bestHostels'));
    }
    

    
    public function storeReview(Request $request, $id)
    {
        if (!Auth::check()) {
            return response()->json(['login_required' => true]);
        }
    
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'review' => 'required|string|max:500',
        ]);
    
        Review::create([
            'hostel_id' => $id,
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'review' => $request->review,
        ]);
    
        return response()->json(['success' => true]);
    }

    public function allHostels(Request $request)
    {
        $sort = $request->query('sort', 'date'); // Default sort by date
        $category = $request->query('category'); // Get the category filter from the request
    
        $query = Hostels::query(); // Initialize the query
    
        if ($category) {
            // Filter by category if it is set
            $query->where('category_name', $category);
        }
    
        if ($sort == 'rating') {
            // Sort by rating if selected
            $query->orderBy('rating', 'desc');
        } elseif ($sort == 'date') {
            // Sort by date if selected
            $query->orderBy('created_at', 'desc');
        }
    
        // Paginate the results (10 per page)
        $hostels = $query->paginate(10);
    
        // Get the categories to display in the view
        $categories = CategoryList::all();
    
        return view('frontend.all-hostels', compact('hostels', 'categories'));
    }
      

    
}

