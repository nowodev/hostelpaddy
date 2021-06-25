<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use App\Models\Student;
use Illuminate\Http\Request;

class FavoriteHostelController extends Controller
{
    public function store($id)
    {
        $user = Student::find(auth('student')->id());
        $hostel = Hostel::findOrFail($id);


        // $user->favorite($hostel);
        // $user->unfavorite($hostel);
        $user->toggleFavorite($hostel);
        // $user->getFavoriteItems(Hostel::class);

        // $user->hasFavorited($hostel);
        // $hostel->hasBeenFavoritedBy($user);

        return back()->with('success', 'Hostel added to favorites');
    }
}