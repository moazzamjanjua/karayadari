<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Blogs;
use Illuminate\Http\Request;
use App\Models\Owner\Hostels;
use App\Models\Owner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $approvedCount = Hostels::where('is_approved', true)->count();
        $pendingapprovedCount = Hostels::where('is_approved', false)->count();
        return view('admindashboard.index', compact('hostels','owners' ,'approvedCount','pendingapprovedCount'));
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
        'blog_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048'
    ]);

    // Capitalize the first letter of each word for the title
    $blogTitle = ucwords(strtolower($request->input('blog_title')));

    // Generate slug from the title
    $blogSlug = strtolower(str_replace(' ', '-', $blogTitle));

    // Handle the file upload
    $imageName = null; // Initialize image name
    if ($request->hasFile('blog_image')) {
        $image = $request->file('blog_image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('public/blog_images', $imageName);
    }

    // Save blog
    Blogs::create([
        'blog_title' => $blogTitle,
        'blog_slug' => $blogSlug,
        'blog_content' => $request->input('blog_content'),
        'blog_image' => $imageName, // This will be null if no image was uploaded
    ]);

    return redirect()->route('admindashboard.index')->with('success', 'Blog created successfully.');
}



}
