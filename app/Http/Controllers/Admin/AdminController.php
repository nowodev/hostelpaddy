<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Hostel;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $agents = Agent::get();
        $students = Student::get();
        $hostels = Hostel::get();

        $available = Hostel::available()->get();
        $unavailable = Hostel::unavailable()->get();

        $total = $agents->count() + $students->count(); 

        return view('admin.dashboard', 
            compact('agents', 'students', 'hostels', 'total', 'available', 'unavailable'));
    }
}
