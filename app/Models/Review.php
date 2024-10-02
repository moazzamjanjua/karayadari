<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Owner\Hostels;
use App\Models\User;

class Review extends Model
{
    protected $fillable = ['user_id', 'hostel_id', 'rating', 'review'];

    /**
     * Review belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Review belongs to a Hostel.
     */
    public function hostel()
    {
        return $this->belongsTo(Hostels::class, 'hostel_id');
    }
}
