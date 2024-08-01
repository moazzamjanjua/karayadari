<?php

namespace App\Http\Controllers\frontend;
use App\Models\User ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    public function userregister(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'country' => 'required',
            'password' => 'required|confirmed',

        ]);

        $user = User::create($data);

        if($user){
            return redirect()->route('login');
        }
  }

  public function userlogin(Request $request){
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
       ]);
    
    if(Auth::attempt($credentials)){
        return redirect()->route('frontend.index');
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
    
    // Validate and update user profile data
    $request->validate([
        'name' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'country' => 'nullable|string|max:255',
        
    ]);

    $user->update($request->only('name', 'address', 'city', 'phone', 'country'));

    return redirect()->back()->with('success', 'Profile updated successfully');
}


}
