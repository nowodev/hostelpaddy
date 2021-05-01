<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use Illuminate\Http\Request;

class ListedHostelsController extends Controller
{
    public function index() {
        $hostels = Hostel::orderBy('id', 'DESC')
            ->get();

        return view('webpages.hostels', compact('hostels'));
    }

    public function show(Hostel $hostel) {
        return view('webpages.info');
        // return view('webpages.info', compact('hostel'));
    }
}
