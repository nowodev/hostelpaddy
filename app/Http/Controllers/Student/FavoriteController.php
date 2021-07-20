<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use App\Models\SharedHostel;
use App\Models\Student;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    //	Main hostels favorite
    public function toggleFavorite($id)
    {
        $user = Student::studentId();
        $hostel = Hostel::findOrFail($id);
        $user->toggleFavorite($hostel);

        return back()->with('success', 'Hostel added to favorites');
    }

    public function removeFavorite($id)
    {
        $user = Student::studentId();
        $hostel = Hostel::findOrFail($id);
        $user->unfavorite($hostel);

        return back()->with('success', 'Hostel removed from favorites');
    }

    //	shared hostels favorite

    public function toggleSharedFavorite($id)
    {
        $user = Student::studentId();
        $hostel = SharedHostel::findOrFail($id);
        $user->toggleFavorite($hostel);

        return back()->with('success', 'Shared hostel added to favorites');
    }

    public function removeSharedFavorite($id)
    {
        $user = Student::studentId();
        $hostel = SharedHostel::findOrFail($id);
        $user->toggleFavorite($hostel);

        return back()->with('success', 'Shared hostel removed from favorites');
    }
}
