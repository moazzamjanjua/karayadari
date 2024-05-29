<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerDashboardController extends Controller
{
    public function home(){
        return view('owner.home');
    }
}
