<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerLoginController extends Controller
{
    public function sellerlogin(){
        return view('frontend.seller-login');
    }

    
}
