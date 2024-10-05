<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\areas;
use App\Models\Blogs;
use App\Models\CategoryList;
use App\Models\cities;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BloggController extends Controller
{
    public function index()
    {
        return view('frontend.blog-detail');
    }
public function allBlogs(){
    $blogs = Blogs::all();
   

    return view('frontend.all-blogs',compact('blogs'));
}


}
