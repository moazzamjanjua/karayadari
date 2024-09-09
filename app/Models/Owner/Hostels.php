<?php

namespace App\Models\Owner;

use App\Models\CategoryList;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostels extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id','owner_number', 'owner_email', 'hostel_name', 'best_hostel', 'is_verified', 'is_approved',
    'top_rated_hostel', 'homepage', 'featured_hostel', 'category_name',
    'hostel_address', 'city', 'hostel_location', 'hostel_front_image',
    'hostel_detail', 'capacity', 'email', 'num_rooms', 'wifi', 'security',
    'water_supply', 
        
       
        'hostel_price',     // Adding the hostel price
        'hostel_video',     // Adding the video URL or path
        'slug','area'
    ];

    public function rooms()
    {
        return $this->hasMany(HostelRoom::class, 'hostel_id');
    }

    public function category()
    {
        return $this->belongsTo(CategoryList::class, 'category_name', 'category_name');
    }
    
}
