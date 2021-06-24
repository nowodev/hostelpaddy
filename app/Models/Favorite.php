<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    public function scopeStudent($query)
    {
        return $query->where('user_id', auth('student')->id());
    }
}