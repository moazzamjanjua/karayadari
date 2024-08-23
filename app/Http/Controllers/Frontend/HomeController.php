<?php
namespace App\Http\Controllers\Frontend;

use App\Models\CategoryList;
use App\Http\Controllers\Controller;
use App\Models\Owner\Hostels;
use Illuminate\Http\Request;

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
}

