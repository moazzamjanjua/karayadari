<?php

namespace App\Http\Controllers;

use App\Models\seller_register;
use Illuminate\Http\Request;

class SellerRegisterationController extends Controller
{
    public function sellerregister(){
        return view('frontend.seller-register');
    }
    public function store(Request $request)
   {
      
       $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user_register',
            'country' => 'required',
            'password' => 'required|min:6',
            
       ]);

       $seller= new seller_register();
      
       $seller->name = $validatedData['name'];
       $seller->email = $validatedData['email'];
       $seller->password = bcrypt($validatedData['password']);
       $seller->country = $validatedData['country'];
       
       
      
       $seller->save();

      //  // Optionally, you can redirect the user to another page after successful registration
       return redirect()->route('frontend.seller-login');
      //  echo "<pre>";
      //  print_r($request->all());
   }
}
