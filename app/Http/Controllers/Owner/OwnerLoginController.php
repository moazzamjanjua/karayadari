<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerLoginController extends Controller
{
    public function ownerlogin(){
        return view('owner.owner-login');
    }
}
