<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hostel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'hostel_name', 'state', 'city',
        'address', 'property', 'roomNum',
        'amount', 'period', 'tenantType', 'image_name',
        'amenities', 'utilities', 'rules',
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

    // display image
    public function getThumbnailAttribute()
    {
        if ($this->image) {
            return asset('storage/hostels/' . $this->image);
        }
        return asset('storage/thumbnail.jpg');
    }
}
