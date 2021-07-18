<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use Illuminate\Http\Request;

class ShareHostelController extends Controller
{
    public function index()
    {
        return view('students.hostel_mate');
    }

    public function create()
    {
        return view('students.share-hostels.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Hostel $hostel)
    {
        //
    }

    public function edit(Hostel $hostel)
    {
        //
    }

    public function update(Request $request, Hostel $hostel)
    {
        //
    }

    public function destroy(Hostel $hostel)
    {
        //
    }
}