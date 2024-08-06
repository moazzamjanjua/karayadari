<?php

namespace App\Http\Controllers\Owner;

use App\Models\Owner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    public function ownerregister(Request $request)
    {
        $data = $request->validate([
            'owner_name' => 'required',
            'owner_email' => 'required|email|unique:owners', // Use the column name 'email'
            'owner_number' => 'required',
            'password' => 'required|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']); // Hash the password

        $owner = Owner::create($data);

        if ($owner) {
            return redirect()->route('owner-login');
        }

        return back()->withErrors(['registration' => 'Failed to register owner.']);
    }

    public function ownerlogin(Request $request)
    {
        $credentials = $request->validate([
            'owner_email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('owner')->attempt($credentials)) { // Use 'owner' guard for authentication
            return redirect()->route('owner.home');
        }

    }

    public function ownerdashboard()
    {
        if (Auth::guard('owner')->check()) {
         
            return view('owner.home');
        } else {
            return redirect()->route('owner-login');
        }
    }
    
    
    public function update(Request $request)
{
    $owner = Auth::guard('owner')->user();

    // Validate input
    $validatedData = $request->validate([
        'owner_name' => 'string|max:255',
        'owner_number' => 'string|max:15',
        'owner_country' => 'string|max:255',
        'owner_city' => 'string|max:255',
        'owner_address' => 'string|max:255',
        'owner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' // Optional image upload validation
    ]);

    // Check if a new image is uploaded
    if ($request->hasFile('owner_image')) {
        $image = $request->file('owner_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/owner_image', $imageName);
        $owner->owner_image = $imageName; // Save new image name in the database
    }

    // Update other owner details
    $owner->owner_name = $validatedData['owner_name'];
    $owner->owner_number = $validatedData['owner_number'];
    $owner->owner_country = $validatedData['owner_country'];
    $owner->owner_city = $validatedData['owner_city'];
    $owner->owner_address = $validatedData['owner_address'];

    $owner->save(); // Save updated owner details to the database

    return redirect()->route('owner.home')->with('success', 'Profile updated successfully!');
}


    public function logout()
    {
        Auth::guard('owner')->logout(); // Use 'owner' guard to log out
        return redirect('owner-login');
    }
}
