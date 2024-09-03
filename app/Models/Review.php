<?php
// app/Models/Review.php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Owner\Hostels;

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
    public function reviews()

{

    return $this->hasMany(Review::class, 'hostel_id');

}

}
