<?php
namespace App\Http\Controllers\Frontend;

use App\Models\CategoryList;
use App\Http\Controllers\Controller;
use App\Models\Owner\Hostels;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {

        // Fetch top-rated hostels
        $verifiedHostels = Hostels::where('is_verified', 1)->get()->unique('hostel_name');

        // Fetch featured hostels 
        $featuredHostels = Hostels::where('featured_hostel', 1)->get()->unique('hostel_name');

        // Fetch best hostels
        $bestHostels = Hostels::where('best_hostel', 1)->take(6)->get();
        ;


        // IDs 1 aur 2 ko match karte hue categories fetch kar rahe hain
        $categories = CategoryList::all();


        return view('frontend.index', compact('categories', 'verifiedHostels', 'featuredHostels', 'bestHostels'));
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
        return view('frontend.all-hostels', compact('hostels', 'categories', 'view', 'selectedCategory'));
    }
    



}

