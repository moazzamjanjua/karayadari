<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductGridLeftController extends Controller
{
    public function productgridleft(){
        return view('frontend.product-grid-sidebar-left');
    }
}
