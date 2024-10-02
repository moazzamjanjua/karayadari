<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Owner\Hostels;
use App\Models\Owner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function admin(){

        $hostels = Hostels::all();
        $owners = Owner::all();
        $approvedCount = Hostels::where('is_approved', true)->count();
        $pendingapprovedCount = Hostels::where('is_approved', false)->count();
        return view('admindashboard.index', compact('hostels','owners' ,'approvedCount','pendingapprovedCount'));
    }

    public function updateStatus($id, $field)
{
    $hostel = Hostels::find($id);
    if ($hostel && in_array($field, ['best_hostel', 'is_verified', 'is_approved'])) {
        $hostel->$field = !$hostel->$field; // Toggle the value
        $hostel->save();
    }

    return redirect()->back()->with('success', 'Status updated successfully!');
}


   
    public function adminlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        // Attempt to log in using the 'owner' guard
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admindashboard.index')->with('success', 'Login successful');
        } else {
            // Check if the email exists in the database
            $emailExists = Admin::where('email', $request->email)->exists();
    
            if (!$emailExists) {
                // If the email does not exist
                return back()->with('error', 'Your email is not correct');
            } else {
                // If the email exists but password is incorrect
                return back()->with('error', 'Your email does not match');
            }
        }
    }


}
