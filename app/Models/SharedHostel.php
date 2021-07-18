<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SharedHostel extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number', 'level', 'institution',
        'gender', 'amenities', 'utilities',
        'choice', 'photos', 'video',
    ];

    public function students()
    {
        return $this->belongsTo(Student::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function utilities()
    {
        return $this->belongsToMany(Utility::class);
    }
}