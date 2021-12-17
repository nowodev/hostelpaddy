<?php

namespace App\Models;

use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use HasFactory, Notifiable, Favoriteability;

    protected $guard = 'student';

    protected $fillable = [
        'name', 'email', 'phone', 'state', 'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sharedHostels()
    {
        return $this->hasMany(SharedHostel::class);
    }

    public function preferences()
    {
        return $this->hasMany(Preference::class);
    }

    // display image
    public function getThumbnailAttribute()
    {
        if ($this->image) {
            return asset('storage/students/' . $this->image);
        }
        return asset('storage/thumbnail.jpg');
    }

    // fetch authenticated student id
    public function scopeStudentId($query)
    {
        return $query->find(auth('student')->id());
    }
}