<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Overtrue\LaravelFavorite\Traits\Favoriter;

class Student extends Authenticatable
{
    use HasFactory, Notifiable, Favoriter;

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