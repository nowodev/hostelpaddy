<?php

namespace App\Models;

use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Hostel extends Model
{
    use HasFactory, SoftDeletes, Favoriteable;

    protected $fillable = [
        'hostel_name', 'state_id', 'city_id',
        'address', 'property', 'roomNum',
        'amount', 'period', 'tenantType', 'coverImage',
        'amenities', 'utilities', 'rules', 'available',
    ];

    public function agentRelation()
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

    public function state()
    {
        return $this->belongsTo(State::class)->withDefault(['name' => 'Undisclosed']);
    }

    public function city()
    {
        return $this->belongsTo(City::class)->withDefault(['name' => 'Undisclosed']);
    }

    // display image
    public function getMainImageAttribute()
    {
        if ($this->coverImage) {
            return asset('storage/hostels/' . $this->coverImage);
        }
        return asset('storage/thumbnail.png');
    }

    // filter function for hostel search
//    public function scopeSearch($query, $q) {
//        if ($q == null) return $query;
//
//        return $query->where('hostel_name', 'LIKE', "%{$q}%")
//            ->orWhere('state', 'LIKE', "%{$q}%")
//            ->orWhere('city', 'LIKE', "%{$q}%")
//            ->orWhere('property', 'LIKE', "%{$q}%")
//            ->orWhere('amount', 'LIKE', "%{$q}%")
//            ->orWhere('roomNum', 'LIKE', "%{$q}%");
//    }

    // hostel description algorithm
    public function getDescriptionAttribute() {
        $room = ($this->roomNum == 1) ? 'room' : 'rooms';
        $value = $this->roomNum . ' ' . $room . ' ' . $this->property . ' house accommodation';

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