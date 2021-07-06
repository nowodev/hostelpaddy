<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Overtrue\LaravelFavorite\Traits\Favoriteable;

class Hostel extends Model
{
    use HasFactory, SoftDeletes, Favoriteable;

    protected $fillable = [
        'hostel_name', 'state', 'city',
        'address', 'property', 'roomNum',
        'amount', 'period', 'tenantType', 'image_name',
        'amenities', 'utilities', 'rules', 'available',
    ];

    public function agents()
    {
        return $this->belongsTo(Agent::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function utilities()
    {
        return $this->belongsToMany(Utility::class);
    }

    public function rules()
    {
        return $this->belongsToMany(Rule::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    // display image
    public function getThumbnailAttribute()
    {
        if ($this->image) {
            return asset('storage/hostels/' . $this->image);
        }
        return asset('storage/thumbnail.jpg');
    }

    // filter function for hostel search
    public function scopeSearch($query, $q) {
        if ($q == null) return $query;

        return $query->where('hostel_name', 'LIKE', "%{$q}%")
            ->orWhere('state', 'LIKE', "%{$q}%")
            ->orWhere('city', 'LIKE', "%{$q}%")
            ->orWhere('property', 'LIKE', "%{$q}%")
            ->orWhere('amount', 'LIKE', "%{$q}%")
            ->orWhere('roomNum', 'LIKE', "%{$q}%");
    }

    // hostel description algorithm
    public function getDescriptionAttribute() {
        $room = ($this->roomNum == 1) ? 'room' : 'rooms';
        $value = $this->roomNum . ' ' . $room . ', ' . $this->property;

        return $value;
    }

    // hostel availability
    public function getAvailabilityAttribute() {
        $value = $this->available == 1 ? 'Currently Available' : 'Not Available';

        return $value;
    }

    // display hostel name in url when viewing hostels insted of id
    public function setHostelNameAttribute($value)
    {
        $this->attributes['hostel_name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function scopeAgent($query)
    {
        return $query->where('agent_id', auth('agent')->id());
    }

    public function scopeAvailable($query) {
        return $query->where('available', 1);
    }

    public function scopeUnavailable($query) {
        return $query->where('available', 0);
    }

    // Capitalize hostel name
    public function getHostelNameAttribute($value)
    {
        return ucfirst($value);
    }
}