<?php

namespace App\Http\Controllers\Owner;
use App\Models\Owner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{
    public function ownerregister(Request $request){
        $data = $request->validate([
            'owner_name' => 'required',
            'owner_email' => 'required|email|unique:owners',
            'owner_country' => 'required',
            'password' => 'required',

        ]);

        $owner = Owner::create($data);

        if($owner){
            return redirect()->route('owner-login');
        }
  }

  public function ownerlogin(Request $request){
    $credentials = $request->validate([
        'owner_email' => 'required',
        'password' => 'required'
       ]);
    
    if(Auth::attempt($credentials)){
        return redirect()->route('owner.index');
    }
}

public function profile(){
    if(Auth::check()){
        return view('owner.user-profile');

    }else{
        return redirect()->route('login');
    }
}
public function logout(){
    Auth::logout();
    return redirect('login');
}



}

