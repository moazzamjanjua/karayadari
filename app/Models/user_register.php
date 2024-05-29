<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_register extends Model
{
    use HasFactory;
    protected $table = 'user_register'; // Specify the table name if it differs from the default

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'user_image',
        'country',
        'phone',
        'postal/zipcode',
        'city',
        'address',
        'password',
    ];
}
