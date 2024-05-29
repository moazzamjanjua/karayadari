<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller_register extends Model
{
    use HasFactory;
    protected $table = "seller_register" ;

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'country',
        
    ];
}
