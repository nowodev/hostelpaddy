<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory;

    public function hostelUtilities()
    {
        return $this->belongsToMany(Hostel::class);
    }
}
