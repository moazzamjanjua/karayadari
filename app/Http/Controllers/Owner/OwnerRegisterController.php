<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner\owner_register;
class OwnerRegisterController extends Controller
{
    public function ownerregister(){
        return view('owner.owner-register');
    }
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
             'name' => 'required',
             'email' => 'required|email|unique:owner_register',
             'country' => 'required',
             'password' => 'required|min:6',
             
        ]);
 
        $seller= new owner_register();
       
        $seller->name = $validatedData['name'];
        $seller->email = $validatedData['email'];
        $seller->password = bcrypt($validatedData['password']);
        $seller->country = $validatedData['country'];
        
        
       
        $seller->save();
 
       //  // Optionally, you can redirect the user to another page after successful registration
        return redirect()->route('owner.owner-login');
       //  echo "<pre>";
       //  print_r($request->all());
    }
}
