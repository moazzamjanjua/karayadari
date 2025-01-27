<?php

namespace App\Http\Controllers\Owner;

use App\Models\Owner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner\Hostels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    public function ownerregister(Request $request)
    {
       $data = $request->validate([
    'owner_name' => 'required',
    'owner_email' => 'required|email|unique:owners,owner_email', // Ensure email is unique
    'owner_number' => 'required|unique:owners,owner_number', // Ensure number is unique
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
            'owner_number' => 'required',
            'password' => 'required',
        ]);
    
        // Attempt to log in using the 'owner' guard
        if (Auth::guard('owner')->attempt($credentials)) {
            return redirect()->route('owner.home')->with('success', 'Login successful');
        } else {
            // Check if the email exists in the database
            $numberExists = Owner::where('owner_number', $request->owner_number)->exists();
    
            if (!$numberExists) {
                // If the email does not exist
                return back()->with('error', 'Your number is not correct');
            } else {
                // If the email exists but password is incorrect
                return back()->with('error', 'Your password does not match');
            }
        }
    }
    
    

    public function ownerdashboard()
    {
        if (Auth::guard('owner')->check()) {
            $owner = Auth::guard('owner')->user();
    
            // Fetch the hostels that belong to the logged-in owner
            $hostels = Hostels::where('owner_id', $owner->id)->get();
    
            // Pass the hostels to the view
            return view('owner.home', compact('hostels'));
        } else {
            return redirect()->route('owner-login');
        }
    }
    
    
    
    public function update(Request $request)
{
    $owner = Auth::guard('owner')->user();

    // Validate input
    $validatedData = $request->validate([
        'owner_name' => 'nullable|string|max:255',
        'owner_number' => 'nullable|string|max:15',
        'owner_country' => 'nullable|string|max:255',
        'owner_city' => 'nullable|string|max:255',
        'owner_address' => 'nullable|string|max:255',
        'owner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);
    

    // Check if a new image is uploaded
  if ($request->hasFile('owner_image')) {
    $image = $request->file('owner_image');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    
    // Move image to public/owner_image directory directly
    $image->move(public_path('storage/owner_images'), $imageName);
    
    // Save the image name to the database
    $owner->owner_image = $imageName;
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
