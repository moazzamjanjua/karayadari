<?php
namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Owner\owner_register;
use Illuminate\Support\Facades\Hash;

class OwnerDashboardController extends Controller
{
    public function home()
    {
        return view('owner.home');
    }

    public function update(Request $request, $owner_id)
    {
        $request->validate([
            'owner_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'name' => 'required|string|max:255',
            'owner_phone' => 'required|string|max:255',
            // 'email' => 'required|email|max:255',
            'owner_country' => 'required|string|max:255',
            'owner_city' => 'required|string|max:255',
            'owner_address' => 'required|string|max:255',
        ]);

        $owner = owner_register::find($owner_id); // Find by ID from the route
        if (!$owner) {
            return redirect()->back()->with('error', 'Owner not found');
        }

        if ($request->file('owner_image')) {
            $avatarPath = $request->file('owner_image')->store('owner_image', 'public');
            $owner->owner_image = $avatarPath;
        }

        // $owner->name = $request->name;
        $owner->owner_phone = $request->owner_phone;
        // $owner->email = $request->email;
        $owner->owner_country = $request->owner_country;
        $owner->owner_city = $request->owner_city;
        $owner->owner_address = $request->owner_address; // Correct typo: `owner__address`

        $owner->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
