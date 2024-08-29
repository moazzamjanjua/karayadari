<?php

namespace App\Http\Controllers\popup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User ;

class PopupController extends Controller
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
            return redirect()->back()->with('login_required', true);        }
        
  }

  public function userlogin(Request $request){
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
       ]);
    
       if(Auth::attempt($credentials)){
        return redirect()->back()->with('success', 'Now you can submit your review!');
    }
}
}
