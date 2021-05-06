<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Hostel;
use App\Models\Student;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $agents = Agent::Paginate(5, ['*'], 'agents');
        $students = Student::Paginate(5, ['*'], 'students');
        $hostels = Hostel::Paginate(5, ['*'], 'hostels');

        $available = Hostel::available()->get();
        $unavailable = Hostel::unavailable()->get();
        $total = $agents->count() + $students->count();


        // charts
        $chart = (new LarapexChart)->barChart()
            ->setTitle('Users')
            ->setSubtitle('Total Users')
            ->addData('Agent', [$agents->count()])
            ->addData('Student', [$students->count()])
            ->addData('Hostel', [$hostels->count()])
            ->setXAxis(['Something']);

        return view('admin.dashboard',
            compact('agents', 'students', 'hostels', 'total', 'available', 'unavailable', 'chart'));
    }
}
