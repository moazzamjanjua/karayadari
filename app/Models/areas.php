<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cities;
use App\Models\Owner\Hostels;
class areas extends Model
{
    use HasFactory;
    protected $fillable = ['area_name','city_id', 'city_name'];

    public function city()
    {
        return $this->belongsTo(cities::class);
    }

    public function hostels()
    {
        return $this->hasMany(Hostels::class, 'area_id');
    }
}
