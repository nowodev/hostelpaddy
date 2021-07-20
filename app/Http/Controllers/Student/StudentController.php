<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\City;
use App\Models\Favorite;
use App\Models\Hostel;
use App\Models\Property;
use App\Models\State;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $hostels = Hostel::orderBy('id', 'DESC')
            ->available()
            ->Paginate(16);

        $location = City::get();
        $property = Property::get();

        return view('students.index', compact('hostels', 'location', 'property'));
    }

    public function show(Hostel $hostel)
    {
        $agent = Agent::find($hostel->agent_id);
        $otherHostels = Hostel::where('id', '!=', $hostel->id)->get();

        return view('students.info', compact('hostel', 'agent', 'otherHostels'));
    }

    public function settings_account()
    {
        $location = State::get();
        $property = Property::get();

        return view('students.settings.account', compact('location', 'property'));
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
}
