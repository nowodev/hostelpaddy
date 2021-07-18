<?php

namespace App\Http\Controllers;

use App\Models\SharedHostel;
use Illuminate\Http\Request;

class SharedHostelController extends Controller
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

    public function show(SharedHostel $hostel)
    {
        //
    }

    public function edit(SharedHostel $hostel)
    {
        //
    }

    public function update(Request $request, SharedHostel $hostel)
    {
        //
    }

    public function destroy(SharedHostel $hostel)
    {
        //
    }
}