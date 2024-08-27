<?php
// app/Models/Review.php
namespace App\Models;
namespace App\Models\Owner\Hostels;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['user_id', 'hostel_id', 'rating', 'review'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hostel()
    {
        return $this->belongsTo(Hostels::class);
    }
}
