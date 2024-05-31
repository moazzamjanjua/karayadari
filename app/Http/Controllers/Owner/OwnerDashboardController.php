<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class OwnerDashboardController extends Controller
{
    public function home(){
        return view('owner.home');
    }
    
    public function update(Request $request)
    {
        $request->validate([
            'owner_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255',
        ]);

        $owner = Auth::user();

        if ($request->file('owner_image')) {
            $avatarPath = $request->file('owner_image')->store('owner_image', 'public');
            $owner->avatar = $avatarPath;
        }

        $owner->name = $request->name;
        $owner->phone = $request->phone;
        $owner->email = $request->email;
        $owner->country = $request->country;
        $owner->city = $request->city;
        $owner->permanent_address = $request->permanent_address;

        $owner->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
