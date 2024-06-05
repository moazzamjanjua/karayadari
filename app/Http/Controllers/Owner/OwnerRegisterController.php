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
             'owner_name' => 'required',
             'owner_email' => 'required|email|unique:owner_register',
             'owner_country' => 'required',
             'password' => 'required',
             
        ]);
 
        $owner= new owner_register();
       
        $owner->owner_name = $validatedData['owner_name'];
        $owner->owner_email = $validatedData['owner_email'];
        $owner->country = $validatedData['owner_country'];
        $owner->password = bcrypt($validatedData['password']);
        
        
       
        $owner->save();
 
       //  // Optionally, you can redirect the user to another page after successful registration
        return redirect()->route('owner.owner-login');
       //  echo "<pre>";
       //  print_r($request->all());
    }
}
