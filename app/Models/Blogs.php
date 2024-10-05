<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [ 'blog_title',
    'blog_slug',
    'blog_content',
    'blog_image',];
    use HasFactory;
}
