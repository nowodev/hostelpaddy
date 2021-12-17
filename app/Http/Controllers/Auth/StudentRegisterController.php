<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentRegisterController extends Controller
{
    public function create()
    {
        return view('auth.student_signup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // ? check each table, email column, to avoid duplicate
            'email' => 'required|email|max:255|unique:students,email|unique:agents,email|unique:users,email',
            'phone' => 'required|max:20',
            'state' => 'required|string|max:255',
            'password' => 'required|confirmed|min:8',
        ]);

        auth('student')->login($student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'state' => $request->state,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($student));

        return redirect(RouteServiceProvider::STUDENTHOME)
            ->with('success', 'Account Created Successfully');

    }
}
