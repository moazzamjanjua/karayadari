<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact'; // Ensure this matches your table name
    protected $fillable = ['number', 'name', 'subject', 'message'];
}
