<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_register;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('frontend.user-login');
    }
    public function authenticate(Request $request)
{
    // Validate the request data
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    // Attempt to authenticate the user
    $credentials = $request->only('email', 'password');

    $user = user_register::where('email', $credentials['email'])->first();

    if (!$user || !Hash::check($credentials['password'], $user->password)) {
        // Authentication failed
        return back()->with('error', 'Invalid email or password');
    }

    // Authentication successful
    $userId = $user->id; // Get the authenticated user's ID

    // Redirect to the user account page with the user's ID
    return redirect()->route('frontend.user-acount', ['id' => $userId]);
}

public function userAccount(Request $request)
{
    // Get the user's ID from the request
    $userId = 0;
    if (Auth::check())
       $userId = 44;
    $id = $request->input('id');

    // Fetch user data based on the user ID
    $user = user_register::find($id);

    // Pass user data to the view
    return view('frontend.user-acount', ['user' => $user, 'userId' => $userId]);
}
}
