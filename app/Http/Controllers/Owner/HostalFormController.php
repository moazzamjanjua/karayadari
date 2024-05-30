<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostalFormController extends Controller
{
    public function hostalForm(){
      return view('owner.hostal-form');
    }
}
