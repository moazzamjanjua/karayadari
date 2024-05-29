<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cutomer_register;

class loginController extends Controller
{
    public function login()
    {
        return view('admindashboard.login');
    }

    public function authenticate(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('username', 'password');

        $user = cutomer_register::where('username', $credentials['username'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            // Authentication failed
            return back()->with('error', 'Invalid username or password');
        }

        // Authentication successful
        return redirect()->route('admindashboard.index');
    }
}
