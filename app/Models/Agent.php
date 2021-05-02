<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Agent extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'agent';

    protected $fillable = [
        'name', 'email', 'phone', 'image', 'password',
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
            return asset('storage/agents/' . $this->image);
        }
        return asset('storage/thumbnail.jpg');
    }

    // display date agent joined
    public function getJoindateAttribute()
    {
        if ($this->created_at) {
            $dt = new Carbon($this->created_at);
            return $dt->toFormattedDateString();
        }
        return '- - - - - - - - -';
    }

    public function hostels() {
        return $this->hasMany(Hostel::class);
    }
}
