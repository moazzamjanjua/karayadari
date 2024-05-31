<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\areas;
class cities extends Model
{
    use HasFactory;

    protected $fillable = ['city_name'];

    public function areas()
    {
        return $this->hasMany(areas::class);
    }
}
