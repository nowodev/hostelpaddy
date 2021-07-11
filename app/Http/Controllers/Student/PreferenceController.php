<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\PreferenceRequest;
use App\Models\Preference;

class PreferenceController extends Controller
{
    public function store(PreferenceRequest $request)
    {
        $user = auth('student')->user();
        // dd($user);
        // $user->preferences()->attach($request->validated());
        // Preference::updateOrCreate($request->validate());
        $user->preferences()->updateOrCreate($request->validated());

        
        
        return back()->with('success', 'Hostel Preference Saved');
    }
}