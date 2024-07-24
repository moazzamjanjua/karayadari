<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\user_register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserAuthenticationController extends Controller
{
    public function store(Request $request){
   

        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:user_register',
            'country' => 'required',
            'password' => 'required|min:6',
        ]);
 
        $user = user_register::create($validatedData);

            if($user){
                return redirect()->route('login');
            }
        
    }
  
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
           ]);
        
        if(Auth::attempt($credentials)){
            return redirect()->route('frontend.user-acount');
        }
    }
    public function useraccount(){
        if(Auth::check()){
            return view('frontend.user-acount');

        }else{
            return redirect()->route('login');
        }
    }

}
