<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public $timestamps = false;

    public function hostels()
    {
        return $this->belongsToMany(Hostel::class);
    }
}
