<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_register;

class RegistrationController extends Controller
{
   
   public function store(Request $request){
   

       $validatedData = $request->validate([
           'first_name' => 'required',
           'last_name' => 'required',
           'email' => 'required|email|unique:user_register',
           'country' => 'required',
           'password' => 'required|min:6',
       ]);

       $user = new user_register();

       $user->first_name = $validatedData['first_name'];
       $user->last_name = $validatedData['last_name'];
       $user->email = $validatedData['email'];
       $user->country = $validatedData['country'];
       $user->password = bcrypt($validatedData['password']);

       $user->save();

       return redirect()->route('login');
   }
  
}
