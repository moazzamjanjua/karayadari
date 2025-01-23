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

    // Check if blog is found
    if (!$blog) {
        return redirect()->route('your.route.name')->with('error', 'Blog not found.'); // Redirect or handle not found
    }

    // Directly use blog_tags as it's already an array due to casting in the model
    $relatedTags = $blog->blog_tags ?? []; // Use an empty array if no tags are found

    // Fetch random related blogs
    $relatedBlogs = Blogs::inRandomOrder()->limit(5)->get();

    // Fetch recent blogs
    $recentBlogs = Blogs::latest()->take(3)->get();
    
 $allTags = Blogs::pluck('blog_tags')
    ->filter() // Remove any null or empty values
    ->map(function($tags) {
        // Decode if the tags are a string, otherwise assume it's an array
        return is_string($tags) ? json_decode($tags, true) : $tags;
    })
    ->flatten()
    ->unique()
    ->shuffle()
    ->take(10) // Fetch only 15 unique tags
    ->values();


    // Pass $blog, $relatedTags, $relatedBlogs, and $recentBlogs to the view
    return view('frontend.blog-detail', compact('blog', 'relatedTags', 'relatedBlogs', 'recentBlogs','allTags'));
}


public function allBlogs(){
    $blogs = Blogs::all();
       $relatedTags = $blog->blog_tags ?? []; // Use an empty array if no tags are found
   

    return view('frontend.all-blogs',compact('blogs','relatedTags'));
}
public function showBlogsByTag($tag)
{
   $blogs = Blogs::where('blog_tags', 'like', '%' . $tag . '%')->get();
    return view('frontend.all-blogs', compact('blogs', 'tag'));
}



}
