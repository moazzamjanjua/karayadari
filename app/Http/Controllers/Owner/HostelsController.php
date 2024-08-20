<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\CategoryList;
use Illuminate\Http\Request;
use App\Models\cities;
use App\Models\Owner\Hostels;
use Illuminate\Support\Facades\Auth;
class HostelsController extends Controller
{
    public function hostelform(Request $request)
    {
        
        $categories = CategoryList::all();
        
    
        $cities = Cities::all();
        
        return view('owner.hostel-form', ['cities' => $cities] , compact('categories'));
    }
    public function edit($id)
    {
        $hostel = Hostels::findOrFail($id);
        $cities = cities::all(); // Assuming you have a City model to fetch cities
    
        return view('owner.edit-hostel', compact('hostel', 'cities'));
    }
    

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'hostel_name' => 'required|string|max:255',
            'category_name' => 'required|string|max:255',
            'hostel_address' => 'required|string',
            'city' => 'required|string|max:255',
            'hostel_location' => 'nullable|string|max:255',
            'hostel_front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hostel_detail' => 'required|string',
            'capacity' => 'nullable|integer',
            'email' => 'nullable|email',
            'num_rooms' => 'nullable|integer',
            'wifi' => 'required|string|in:yes,no',
            'security' => 'required|string|in:yes,no',
            'water_supply' => 'required|string|in:yes,no',
        ]);

        // Handle the file upload
        if ($request->hasFile('hostel_front_image')) {
            $image = $request->file('hostel_front_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/hostel_images', $imageName);
            $validatedData['hostel_front_image'] = $imageName;
        }

        // Add the logged-in owner's ID to the validated data
        $validatedData['owner_id'] = Auth::guard('owner')->id();

        // Create a new hostel record
        Hostels::create($validatedData);

        return redirect()->route('owner.home')->with('success', 'Hostel added successfully!');
    }
    public function update(Request $request, $id)
    {
        $hostel = Hostels::findOrFail($id);
        
        $validatedData = $request->validate([
            'hostel_name' => 'required|string|max:255',
          
            'category_name' => 'nullable|string|max:255',
            'hostel_address' => 'required|string|max:1000',
            'city' => 'required|string|max:255',
            'hostel_location' => 'nullable|string|max:255',
            'hostel_front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hostel_detail' => 'required|string|max:1000',
            'capacity' => 'nullable|integer',
            'email' => 'nullable|email|max:255',
            'num_rooms' => 'nullable|integer',
            'wifi' => 'required|boolean',
            'security' => 'required|boolean',
            'water_supply' => 'required|boolean',
        ]);
        
        if ($request->hasFile('hostel_front_image')) {
            $image = $request->file('hostel_front_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/hostel_images', $imageName);
            $validatedData['hostel_front_image'] = $imageName;
        }
        
        $hostel->update($validatedData);
        
        return redirect()->route('owner.home')->with('success', 'Hostel added successfully!');
    }
    

public function show($id)
{
    $hostel = Hostels::findOrFail($id); // Find the hostel by ID or fail with a 404

    return view('owner.hostel-show', compact('hostel'));
}

}
