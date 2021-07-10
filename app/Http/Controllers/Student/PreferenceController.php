<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\PreferenceRequest;
use App\Models\Preference;

class PreferenceController extends Controller
{
    public function store(PreferenceRequest $request)
    {
        auth('student')->user()->preferences()->create($request->validated());

        return back()->with('success', 'Hostel Preference Saved');
    }
}