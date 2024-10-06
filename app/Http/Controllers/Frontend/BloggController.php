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
 public function index($slug)
{
    // Fetch the blog using slug
    $blog = Blogs::where('blog_slug', $slug)->first();

  

    

    // Pass $blog, $comments, $relatedBlogs, and $bestBlogs to the view
    return view('frontend.blog-detail', compact('blog'));
}

public function allBlogs(){
    $blogs = Blogs::all();
   

    return view('frontend.all-blogs',compact('blogs'));
}


}
