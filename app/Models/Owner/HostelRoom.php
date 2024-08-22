<?php

namespace App\Models\Owner;

use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class HostelRoom extends Model
{
    protected $fillable = [
        'hostel_id', 'owner_id', 'room_images', 'room_type', 'room_price', 'floor_number', 'room_size', 
        'current_occupancy', 'required_occupancy', 'wifi', 'filter_water', 'gas', 'chair', 
        'almaira', 'table', 'fan', 'ac', 'geyser', 'washroom', 'room_detail'
    ];

    public function hostel()
    {
        return $this->belongsTo(Hostels::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
