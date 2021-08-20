<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Amenity;
use App\Models\City;
use App\Models\Hostel;
use App\Models\Preference;
use App\Models\Property;
use App\Models\Rule;
use App\Models\State;
use App\Models\Student;
use App\Models\Utility;

class StudentController extends Controller
{
    public function index()
    {
        $hostels = Hostel::orderBy('id', 'DESC')
            ->available()
            ->Paginate(16);
    
        $location = City::get();
        $properties = Property::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $amenities = Amenity::get();
    
        return view('students.index', compact('hostels', 'location', 'properties', 'utilities', 'rules', 'amenities'));
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
        $preferences = Preference::where('student_id', auth('student')->id())->first();

        return view('students.settings.account', compact('location', 'property', 'preferences'));
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
        $favoriteHostels = $user->favorite(Hostel::class);
        $location = City::get();
        $properties = Property::get();
        $utilities = Utility::get();
        $rules = Rule::get();
        $amenities = Amenity::get();
    
        return view('students.saved_hostel', compact('favoriteHostels', 'location', 'properties', 'utilities', 'rules', 'amenities'));
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