<?php

namespace App\Http\Controllers\Frontend;
use App\Models\CategoryList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = CategoryList::all();
        return view('frontend.index', ['categories' => $categories]);
    //    return view('frontend.index');
    }
}
