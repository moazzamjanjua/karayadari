<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cutomer_register;

class registerController extends Controller
{
    public function register(){
        return view('admindashboard.register');
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'email' => 'required|email|unique:customer_register', // Ensure email is unique in the "customer_register" table
            'username' => 'required|unique:customer_register', // Ensure username is unique in the "customer_register" table
            'password' => 'required|min:6',
        ]);

        // Create a new cutomer_register model instance
        $customer = new cutomer_register;

        // Assign the validated data to the model properties
        $customer->email = $validatedData['email'];
        $customer->username = $validatedData['username'];
        $customer->password = bcrypt($validatedData['password']); // Hash the password before storing

        // Save the new customer record to the database
        $customer->save();

        // Optionally, you can redirect the user to another page after successful registration
        return redirect()->route('admindashboard.login');
        // echo "<pre>";
        // print_r($request->all());
    }
}
