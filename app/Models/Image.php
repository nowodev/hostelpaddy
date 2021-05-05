<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
    ];

    public function hostels()
    {
        return $this->belongsTo(Hostel::class);
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
