<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\PreferenceRequest;

class PreferenceController extends Controller
{
    public function store(PreferenceRequest $request)
    {
        $user = auth('student')->user();
        
        $user->preferences()->updateOrCreate(
            ['student_id' => auth('student')->id()],
            [
                'location' => $request->location,
                'property_type' => $request->property_type,
                'no_of_rooms' => $request->no_of_rooms,
                'rent_period' => $request->rent_period,
            ],
        );
        
        return back()->with('success', 'Hostel Preference Saved');
    }
}