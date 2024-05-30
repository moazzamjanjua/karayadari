<?php

namespace App\Models\Owner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner_register extends Model
{
    use HasFactory;
    protected $table = "owner_register" ;

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'country',
        'phone',
        'city',
        'permanent_address',
        'owner_image',
        
    ];
}
