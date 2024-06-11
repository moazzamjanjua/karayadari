<?php

namespace App\Models\Owner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner_rooms extends Model
{
    use HasFactory;
     
     protected $table = 'owner_rooms' ;
    protected $fillable = [
        'owner_id',
        'hostel_id',
        'room_images',
        'room_type',
        'floor_number',
        'room_size',
        'current_occupancy',
        'required_occupancy',
        'wifi',
        'filter_water',
        'gas',
        'chair',
        'almaira',
        'table',
        'fan',
        'ac',
        'geyser',
        'washroom',
        'room_detail',
    ];

    protected $casts = [
        'owner_id'=> 'int', 
        'hostel_id' => 'int',
        'room_images' => 'string',
        'wifi' => 'boolean',
        'filter_water' => 'boolean',
        'gas' => 'boolean',
        'chair' => 'boolean',
        'almaira' => 'boolean',
        'table' => 'boolean',
        'fan' => 'boolean',
        'ac' => 'boolean',
        'geyser' => 'boolean',
    ];
}
