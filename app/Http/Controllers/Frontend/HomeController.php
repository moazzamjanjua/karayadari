<?php
namespace App\Http\Controllers\Frontend;

use App\Models\CategoryList;
use App\Models\cities;
use App\Models\areas;
use App\Http\Controllers\Controller;
use App\Models\FeedBacks;
use App\Models\Owner\Hostels;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        // Fetch top-rated verified hostels that are also approved
        $verifiedHostels = Hostels::where('is_verified', 1)
            ->where('is_approved', true)
            ->get()
            ->unique('hostel_name');
    
        // Fetch booked hostels that are also approved
        $bookedHostels = Hostels::where('is_booked', 1)
            ->where('is_approved', true)
            ->get()
            ->unique('hostel_name');
    
        // Fetch featured hostels that are also approved
        $featuredHostels = Hostels::where('featured_hostel', 1)
            ->where('is_approved', true)
            ->get()
            ->unique('hostel_name');
    
        // Fetch best hostels that are also approved (limited to 6)
        $bestHostels = Hostels::where('best_hostel', 1)
            ->where('is_approved', true)
            ->take(6)
            ->get();
    
        // Fetch categories, cities, areas, and feedbacks
        $categories = CategoryList::all();
        $cities = cities::all();
        $areas  = areas::all();
        $feedbacks = FeedBacks::all();
    
        // Return the view with the filtered data
        return view('frontend.index', compact(
            'categories', 'cities', 'areas', 
            'verifiedHostels', 'featuredHostels', 
            'bookedHostels', 'bestHostels', 'feedbacks'
        ));
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
        return view('frontend.hostel-detail', compact('hostel', 'reviews', 'relatedHostels', 'bestHostels'));
    }



    public function storeReview(Request $request, $id)
    {
        if (!Auth::check()) {
            return response()->json(['login_required' => true]);
        }
    
        // Check if the user has already submitted a review for this hostel
        $existingReview = Review::where('hostel_id', $id)
                                ->where('user_id', Auth::id())
                                ->first();
    
        if ($existingReview) {
            return response()->json(['error' => 'You have already submitted a review for this hostel.']);
        }
    
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'review' => 'required|string|max:500',
        ]);
    
        // Create new review
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
    // Initialize the query to fetch only approved hostels
    $query = Hostels::where('is_approved', true);

    $selectedCategory = $request->query('category');
    $view = $request->query('view', 'all'); // Default view is 'all'
    $sort = $request->query('sort', 'date'); // Default sort by date

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
    } elseif ($view === 'bookeded-hostels') {
        // Sort hostels by average rating
        $query->where('is_booked', 1);
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
    $cities = cities::all();
    $areas = areas::all();

    // Calculate average rating for each hostel
    foreach ($hostels as $hostel) {
        $hostel->reviews_avg_rating = Review::where('hostel_id', $hostel->id)->avg('rating');
    }

    // Pass data to the view
    return view('frontend.all-hostels', compact('hostels', 'categories', 'view', 'selectedCategory', 'cities', 'areas'));
}

    



}

