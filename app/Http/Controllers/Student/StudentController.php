<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Hostel;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $saved_hostels = Favorite::student()
            ->get();

        return view('students.index', compact('saved_hostels'));
    }

    public function settings_account()
    {
        return view('students.settings.account');
    }

    public function settings_profile()
    {
    	$student = auth('student')->user();

        return view('students.settings.profile', compact('student'));
    }

    public function hostel_mate()
    {
        return view('students.hostel_mate');
    }

    public function saved_hostel()
    {
        $user = Student::studentId();
        $favoriteHostels = $user->getFavoriteItems(Hostel::class)->get();

        return view('students.saved_hostel', compact('favoriteHostels'));
    }

    public function chat()
    {
        return view('students.chat');
    }

    public function notification()
    {
        return view('students.notification');
    }

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
}