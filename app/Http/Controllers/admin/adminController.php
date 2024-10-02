<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner\Hostels;
use App\Models\Owner;

class adminController extends Controller
{
    public function admin(){

        $hostels = Hostels::all();
        $owners = Owner::all();
        return view('admindashboard.index', compact('hostels','owners'));
    }

   
    public function login(){
        return view('admindashboard.login');
    }


}
