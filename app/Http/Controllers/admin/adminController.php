<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Blogs;
use App\Models\cities;
use App\Models\areas;
use Illuminate\Http\Request;
use App\Models\Owner\Hostels;
use App\Models\Owner;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Parsedown;

class adminController extends Controller
{
    public function updateStatus($id, $field)
{
    $hostel = Hostels::find($id);
    if ($hostel && in_array($field, ['best_hostel', 'is_verified', 'is_approved'])) {
        $hostel->$field = !$hostel->$field; // Toggle the value
        $hostel->save();
    }

    return redirect()->back()->with('success', 'Status updated successfully!');
}

//admin login function
public function adminlogin(Request $request)
{
    $credentials = $request->validate([
        'admin_email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::guard('admin')->attempt(['admin_email' => $credentials['admin_email'], 'password' => $credentials['password']])) {
        return redirect()->route('admin.index');
    }

    return back()->withErrors(['admin_email' => 'Invalid credentials']);
}
public function admindashboard()
{
    if (Auth::guard('admin')->check()) {
        $admin = Auth::guard('admin')->user();
        

        $hostels = Hostels::all();
        $owners = Owner::all();
        $cities = cities::all();
        $areas = areas::all();
        $approvedCount = Hostels::where('is_approved', true)->count();
        $pendingapprovedCount = Hostels::where('is_approved', false)->count();
        return view('admindashboard.index', compact('hostels','owners' , 'cities' , 'areas','approvedCount','pendingapprovedCount'));
    } else {
        return redirect()->route('admin.login');
    }
}


public function store(Request $request)
{
    // Validate input
    $request->validate([
        'blog_title' => 'required|string|max:255',
        'blog_content' => 'required|string',
        'blog_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
        'blog_tags' => 'nullable|string',
    ]);

    // Initialize the validated data array
    $validatedData = [];

    // Process blog tags if available
    if ($request->has('blog_tags')) {
        // Split the tags by comma into an array
        $tags = explode(',', $request->input('blog_tags'));

        // Trim and convert each tag to slug
        $slugs = array_map(function ($tag) {
            return Str::slug(trim($tag));  // Convert to slug format
        }, $tags);

        // Limit the number of tags to a maximum of 5
        $slugs = array_slice($slugs, 0, 5);

        // Convert the array back into a JSON format to store in the database
        $validatedData['blog_tags'] = json_encode($slugs); // JSON encode for storage
    }

    // Capitalize the first letter of each word for the title
    $blogTitle = ucwords(strtolower($request->input('blog_title')));

    // Generate slug from the title
    $blogSlug = strtolower(str_replace(' ', '-', $blogTitle));

    // Initialize image name
    $imageUrl = null;

    if ($request->hasFile('blog_image')) {
        $image = $request->file('blog_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/blog_image'), $imageName);
        $imageUrl = url('storage/blog_image/' . $imageName);
    }

    // Save blog
    Blogs::create([
        'blog_title' => $blogTitle,
        'blog_slug' => $blogSlug,
        'blog_content' => $request->input('blog_content'), // Save Markdown content
        'blog_image' => $imageUrl ?? null,
        'blog_tags' => isset($validatedData['blog_tags']) ? json_decode($validatedData['blog_tags']) : null, // Decode to store as array
    ]);

    return redirect()->route('admin.index')->with('success', 'Blog created successfully.');
}



public function storeCity(Request $request)
{
    // Validate input
    $request->validate([
        'city_name' => 'required|string|max:255|unique:cities',
    ]);

    // Store the new city
    $city = new cities();
    $city->city_name = $request->city_name;
    $city->save();

    // Redirect back with success message
    return back()->with('success', 'City added successfully!');
}


public function storeArea(Request $request)
{

   
    $request->validate([
        'area_name' => 'required|string|max:255',
        'city_id' => 'required|exists:cities,id',
    ]);

    // Retrieve city name using the city_id
    $city = cities::findOrFail($request->city_id);

    // Create a new area
      // Store the new city
      $areas = new areas();
      $areas->area_name = $request->area_name;
      $areas->city_name = $city->city_name;
      $areas->city_id = $city->id;
      $areas->save();

    return redirect()->back()->with('success', 'Area added successfully!');
}













public function show($slug)
{
    $blog = Blogs::where('blog_slug', $slug)->firstOrFail();

 
    return view('blog.show', compact('blog'));
}




}
