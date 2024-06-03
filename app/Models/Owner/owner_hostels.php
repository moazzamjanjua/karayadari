<?php

namespace App\Models\Owner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner_hostels extends Model
{
    use HasFactory;

    protected $table = 'owner_hostels';

    protected $fillable = [
        'owner_image',
        'owner_name',
        'owner_number',
        'hostel_name',
        'hostel_address',
        'city',
        'hostel_location',
        'hostel_front_image',
        'hostel_detail',
        'capacity',
        'email',
        'num_rooms',
        'facilities',
        'is_verified',
        'is_approved',
        'top_rated',
        'homepage',
        'is_featured'
    ];
}
