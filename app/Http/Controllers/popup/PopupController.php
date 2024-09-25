<?php

namespace App\Http\Controllers\popup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PopupController extends Controller
{
    // Handle user registration
    public function userregister(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'country' => 'required',
            'password' => 'required|confirmed',
        ]);

        // Create new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'country' => $request->country,
            'password' => bcrypt($request->password), // Hash the password
        ]);

        // If user is successfully created, trigger the login modal
        if ($user) {
            return response()->json(['success' => true, 'openLogin' => true]);
        } else {
            return response()->json(['success' => false], 500);
        }
    }

    // Handle user login
    public function userlogin(Request $request)
    {
        // Validate login credentials
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log in the user
        if (Auth::attempt($credentials)) {
            return response()->json(['success' => true, 'reloadPage' => true]);
        } else {
            return response()->json([
                'success' => false,
                'errors' => ['password' => ['Invalid Username and password.']]
            ], 422);
        }
    }
}
