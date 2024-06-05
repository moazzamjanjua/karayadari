<?php

namespace App\Models\Owner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner_register extends Model
{
    use HasFactory;
    protected $table = "owner_register" ;
    protected $primaryKey = 'owner_id';

    protected $fillable = [
        'owner_id',
        'owner_name',
        'owner_email',
        'owner_ountry',
        'owner_number',
        'owner_city',
        'owner_address',
        'owner_image',
        'password',
    ];
}
