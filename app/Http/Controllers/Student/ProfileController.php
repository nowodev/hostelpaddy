<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentProfileRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(StudentProfileRequest $request, Student $student)
    {
        $student->update($request->validated());

        return redirect()->route('student.settings.profile')
            ->with('success', 'Profile Updated Successfully');
    }
}