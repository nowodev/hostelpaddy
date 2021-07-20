<?php

namespace App\Models;

use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SharedHostel extends Model
{
    use HasFactory, SoftDeletes, Favoriteable;
    
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