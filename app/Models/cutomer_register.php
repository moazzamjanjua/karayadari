<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cutomer_register extends Model
{
    use HasFactory;
    protected $table = 'customer_register'; // Specify the table name if it differs from the default

    protected $fillable = [
        'email',
        'username',
        'password',
    ];
}
