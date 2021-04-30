<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    use HasFactory;

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

    // display image
    public function getThumbnailAttribute()
    {
        if ($this->image) {
            return asset('storage/hostels/' . $this->image);
        }
        return asset('storage/thumbnail.jpg');
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class)
            ->withPivot(['amenity_id', 'hostel_id']);
    }

    public function utilities()
    {
        return $this->belongsToMany(Utility::class)
            ->withPivot(['hostel_id', 'utility_id']);
    }

    public function rules()
    {
        return $this->belongsToMany(Rule::class)
            ->withPivot(['rule_id', 'rule_id']);
    }
}
