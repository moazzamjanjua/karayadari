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
    
        // Pass $hostel, $reviews, $reviewCount, and $averageRating to the view
        return view('frontend.hostel-detail', compact('hostel', 'reviews',));
    }
    

    
    public function storeReview(Request $request, $id)
{
    // Check if user is authenticated
    if (!Auth::check()) {
        // Set a session flag for login required and redirect back
        return redirect()->back()->with('login_required', true);
    }

    // Validate the form data
    $request->validate([
        'rating' => 'required|integer|between:1,5',
        'review' => 'required|string|max:500',
    ]);

    // Create the review
    Review::create([
        'hostel_id' => $id,
        'user_id' => Auth::id(),
        'rating' => $request->rating,
        'review' => $request->review,
    ]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Your review has been submitted!');
}

    

    
}

