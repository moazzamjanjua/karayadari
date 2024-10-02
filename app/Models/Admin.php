<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Change this line
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable // Extend Authenticatable
{
    use HasFactory, Notifiable; // Add Notifiable trait

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];

    // Optionally, if you want to hash the password when it's set
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
