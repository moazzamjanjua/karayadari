<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryList extends Model
{
    use HasFactory;

    protected $table = 'category_list';

    protected $fillable = ['category_name', 'category_image'];
}
