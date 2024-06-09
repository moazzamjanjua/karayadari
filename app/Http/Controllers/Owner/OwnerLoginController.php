<?php

namespace App\Http\Controllers\Owner;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner\owner_register;
use Illuminate\Support\Facades\Hash;
class OwnerLoginController extends Controller
{
    public function ownerlogin(){
        return view('owner.owner-login');
    }

    public function authenticate(Request $request)
    {
        // Validate the request data
        $request->validate([
            'owner_email' => 'required',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('owner_email', 'password');

        $owner = owner_register::where('owner_email', $credentials['owner_email'])->first();

        if (!$owner || !Hash::check($credentials['password'], $owner->password)) {
            // Authentication failed
            return back()->with('error', 'Invalid email or password');
        }

        $ownerId = $owner->owner_id; // Get the authenticated user's ID

        // Redirect to the user account page with the user's ID
        return redirect()->route('owner.home', ['owner_id' => $ownerId]);
    }
    public function home(Request $request)
{
    // Get the user's ID from the request
    $ownerId= 0;
    if (Auth::check())
       $ownerId = 44;   
    $id = $request->input('owner_id');

    // Fetch user data based on the user ID
    $owner = owner_register::find($id);

    // Pass user data to the view
    return view('owner.home', ['owner' => $owner, 'owner_id' => $ownerId]);
}
}
