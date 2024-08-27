<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner\Hostels;
use App\Models\Review;

use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index($id)
    {
        
        
            // Fetch the hostel
            $hostel = Hostels::with('rooms')->findOrFail($id);
        
            // Fetch reviews related to this hostel
            $reviews = Review::where('hostel_id', $id)
                             ->with('user') // Assuming Review has a relationship with User
                             ->orderBy('created_at', 'desc')
                             ->get();
        
            return view('frontend.hostel-detail', compact('hostel', 'reviews'));
    
    }
}
