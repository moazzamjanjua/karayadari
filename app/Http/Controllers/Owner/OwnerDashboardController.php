<?php
namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Owner\owner_register;
use Illuminate\Support\Facades\Hash;
use App\Models\Owner\owner_hostels;
class OwnerDashboardController extends Controller
{

    public function edit()
{
    // Get the authenticated owner
    $owner = Auth::guard('owner')->user();

    // Return the view with owner data
    return view('owner.edit', compact('owner'));
}

public function update(Request $request)
{
    $data = $request->validate([
        'owner_name' => 'required',
        'owner_phone' => 'required',
        'owner_country' => 'required',
        'owner_city' => 'required',
        'owner_address' => 'required',
        'owner_image' => 'nullable|image|max:2048', // Validate image if uploaded
    ]);

    $owner = Auth::guard('owner')->user();

    // Update owner fields
    $owner->name = $data['owner_name'];
    $owner->phone = $data['owner_phone'];
    $owner->country = $data['owner_country'];
    $owner->city = $data['owner_city'];
    $owner->address = $data['owner_address'];

    // Handle file upload
    if ($request->hasFile('owner_image')) {
        $image = $request->file('owner_image');
        $imagePath = $image->store('avatars', 'public');
        $owner->image = $imagePath;
    }

    $owner->save();

    return redirect()->route('owner.edit')->with('success', 'Profile updated successfully.');
}

}