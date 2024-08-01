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
            'owner_country' => 'required',
            'password' => 'required', // Add validation for minimum length
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

        return back()->withErrors(['login' => 'Invalid credentials.']);
    }

    public function ownerdashboard()
    {
        if (Auth::guard('owner')->check()) { // Use 'owner' guard to check authentication
            return view('owner.home');
        }

        return redirect()->route('owner-login');
    }

    public function logout()
    {
        Auth::guard('owner')->logout(); // Use 'owner' guard to log out
        return redirect('owner-login');
    }
}
