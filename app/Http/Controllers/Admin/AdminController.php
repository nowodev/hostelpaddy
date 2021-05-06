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


        $agentTime = Agent::get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        $studentTime = Student::get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('m');
            });
        $hostelTime = Hostel::get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('m');
            });

        $agentmcount = [];
        $agentArr = [];
        $studentmcount = [];
        $studentArr = [];
        $hostelmcount = [];
        $hostelArr = [];

        foreach ($agentTime as $key => $value) {
            $agentmcount[(int)$key] = count($value);
        }
        foreach ($studentTime as $key => $value) {
            $studentmcount[(int)$key] = count($value);
        }
        foreach ($hostelTime as $key => $value) {
            $hostelmcount[(int)$key] = count($value);
        }

        for ($i = 1; $i <= 12; $i++) {
            !empty($agentmcount[$i]) ? $agentArr[$i] = $agentmcount[$i] : $agentArr[$i] = 0;

            !empty($studentmcount[$i]) ? $studentArr[$i] = $studentmcount[$i] : $studentArr[$i] = 0;

            !empty($hostelmcount[$i]) ? $hostelArr[$i] = $hostelmcount[$i] : $hostelArr[$i] = 0;
        }

        // charts
        $chart = (new LarapexChart)->lineChart()
            ->setTitle('STATS')
            ->setSubtitle('Stats of date when people joined or hostels were added')
            ->addData('Agents', [$agentArr[1], $agentArr[2], $agentArr[3], $agentArr[4], $agentArr[5], $agentArr[6], $agentArr[7], $agentArr[8], $agentArr[9], $agentArr[10], $agentArr[11], $agentArr[12]])

            ->addData('Students', [$studentArr[1], $studentArr[2], $studentArr[3], $studentArr[4], $studentArr[5], $studentArr[6], $studentArr[7], $studentArr[8], $studentArr[9], $studentArr[10], $studentArr[11], $studentArr[12]])

            ->addData('Hostels', [$hostelArr[1], $hostelArr[2], $hostelArr[3], $hostelArr[4], $hostelArr[5], $hostelArr[6], $hostelArr[7], $hostelArr[8], $hostelArr[9], $hostelArr[10], $hostelArr[11], $hostelArr[12]])
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'])
            ->setGrid(false, '#3F51B5', 0.1)
            // ->setDataLabels()
            ->setMarkers(['#E040FB'],7);

        return view(
            'admin.dashboard',
            compact('agents', 'students', 'hostels', 'total', 'available', 'unavailable', 'chart')
        );
    }
}
