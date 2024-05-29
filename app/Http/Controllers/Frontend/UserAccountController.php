<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_register;
use Illuminate\Support\Facades\Auth;

class UserAccountController extends Controller
{
    public function UserAccount(){
        return view('frontend.user-acount');
    }
   
}
