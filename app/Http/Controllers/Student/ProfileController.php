<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentProfileRequest;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(StudentProfileRequest $request, Student $student)
    {
        $student->update($request->validated());

        notify()->preset('profile-updated');
        return redirect()->route('student.settings.profile');
    }

    public function updatePassword(StudentProfileRequest $request, Student $student)
    {
        $student->update([
            'password' => Hash::make($request->password),
        ]);

        notify()->preset('password-updated');
        return redirect()->route('student.settings.profile');
    }
}