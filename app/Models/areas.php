<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cities;
class areas extends Model
{
    use HasFactory;
    protected $fillable = ['area_name', 'city_id'];

    public function city()
    {
        return $this->belongsTo(cities::class);
    }
}
