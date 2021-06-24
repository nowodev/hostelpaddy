<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $saved_hostels = Favorite::student()
            ->get();

        return view('students.index', compact('saved_hostels'));
    }

    public function settings()
    {
        return view('students.settings');
    }

    public function hostel_mate()
    {
        return view('students.hostel-mate');
    }

    public function chat()
    {
        return view('students.char');
    }

    public function notification()
    {
        return view('students.notification');
    }
}