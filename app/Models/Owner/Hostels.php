<?php

namespace App\Models\Owner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostels extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'hostel_name',
        'slug',
        'hostel_address',
        'category_name',
        'city',
        'hostel_location',
        'hostel_front_image',
        'hostel_detail',
        'capacity',
        'email',
        'num_rooms',
        'wifi',
        'security',
        'water_supply',
        'best_hostel',
        'is_verified',
        'is_approved',
        'top_rated_hostel',
        'homepage',
        'featured_hostel',
    ];

    public function rooms()
    {
        return $this->hasMany(HostelRoom::class, 'hostel_id');
    }
}
