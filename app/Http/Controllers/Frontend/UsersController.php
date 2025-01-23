<?php

namespace App\Http\Controllers\Frontend;
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
          'phone' => 'required',
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
    // Delete the old user image if it exists
    if ($user->user_image) {
        $oldImagePath = public_path('user_image/' . $user->user_image); // Path to the old image
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath); // Delete the old image
        }
    }

    // Store the new user image directly in public/user_image directory
    $image = $request->file('user_image');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    
    // Move the new image to the public/user_image directory
    $image->move(public_path('storage/user_images'), $imageName);

    // Save the image file name in the database
    $user->user_image = $imageName;
}


    // Update user profile data
    $user->update($request->only('name', 'address', 'city', 'phone', 'country'));

    // Save the updated user data
    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully');
}




}
