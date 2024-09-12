<?php

namespace App\Http\Controllers\frontend;
use App\Models\User ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class UsersController extends Controller
{
    public function userregister(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);
    
        // Remove password_confirmation from the $data array
        unset($data['password_confirmation']);
    
        $user = User::create($data);
    
        if ($user) {
            return redirect()->route('login')->with('success', 'Your account has been created successfully.');
        }
    
        return redirect()->back()->withErrors(['error' => 'There was a problem creating your account.']);
    }
    

  public function userlogin(Request $request)
  {
      $credentials = $request->validate([
          'email' => 'required|email',
          'password' => 'required',
      ]);
  
      if (Auth::attempt($credentials)) {
          return redirect()->route('frontend.index')->with('success', 'Login successful');
      } else {
          // Check if the email exists in the database
          $emailExists = User::where('email', $request->email)->exists();
  
          if (!$emailExists) {
              return back()->with('error', 'Your email is not correct');
          } else {
              return back()->with('error', 'Your password does not match');
          }
      }
  }
  

public function profile(){
    if(Auth::check()){
        return view('frontend.user-profile');

    }else{
        return redirect()->route('login');
    }
}
public function logout(){
    Auth::logout();
    return redirect('login');
}

public function update(Request $request)
{
    $user = Auth::user();

    // Validate the form data, including the avatar image
    $request->validate([
        'name' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'country' => 'nullable|string|max:255',
        'user_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file type and size
    ]);

    // Handle the avatar upload
    if ($request->hasFile('user_image')) {
        // Delete the old avatar if it exists
        if ($user->user_image) { // Change $user->avatar to $user->user_image
            Storage::disk('public')->delete('user_image/' . $user->user_image); // Update path from user_image
        }

        // Store the new avatar and save its path
        $avatarName = $request->file('user_image')->store('user_image', 'public');
        $user->user_image = basename($avatarName); // Save only the file name, not the full path
    }

    // Update user profile data
    $user->update($request->only('name', 'address', 'city', 'phone', 'country'));

    // Save the updated user data
    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully');
}




}
