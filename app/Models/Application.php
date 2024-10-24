<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'applications';

    // Mass assignable attributes
    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'position', 
        'resume_path', 
        'cover_letter'
    ];
}
