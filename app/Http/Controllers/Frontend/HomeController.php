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
        $hostel = Hostels::all();
        $view = $request->query('view', 'all'); // Default view is 'all'
        $sort = $request->query('sort', 'date'); // Default sort by date

        $queryReviews = Hostels::with('reviews'); // Load the related reviews
        $query = Hostels::query(); // Initialize the query

        if ($view === 'featured-hostel') {
            // Fetch only featured hostels
            $query->where('featured_hostel', 1);
        } elseif ($view === 'top-rated') {
            // Fetch only top-rated hostels
// Fetch hostels with average rating calculated
          
        } elseif ($view === 'best-hostels') {
            // Fetch only best hostels
            $query->where('best_hostel', 1);
        }

        if ($sort == 'date') {
            // Sort by date if selected
            $query->orderBy('created_at', 'desc');
        }

        // Paginate the results (10 per page)
        $hostels = $query->paginate(10);

        // Get the categories to display in the view
        $categories = CategoryList::all();

        // Calculate average rating for each hostel
        foreach ($hostels as $hostel) {
            $hostel->reviews_avg_rating = Review::where('hostel_id', $hostel->id)->avg('rating');
        }



        return view('frontend.all-hostels', compact('hostels', 'categories', 'view'));
    }






}

