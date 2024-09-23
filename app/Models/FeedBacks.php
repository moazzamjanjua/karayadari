<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBacks extends Model
{
    use HasFactory;
    protected $fillable = ['number', 'name', 'city', 'message'];
}
