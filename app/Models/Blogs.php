<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $table = 'blogs'; // Optional, in case Laravel is not detecting it correctly
    protected $fillable = ['blog_title', 'blog_slug', 'blog_content', 'blog_image','blog_tags'];
    
    protected $casts = [
        'blog_tags' => 'array',
    ];
    
}

