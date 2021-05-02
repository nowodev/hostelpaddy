<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Models\Agent;
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
        $agent = Agent::find($hostel->agent_id);
        $otherHostels = Hostel::where('id', '!=', $hostel->agent_id)->get();
        
        return view('webpages.info', compact('hostel', 'agent', 'otherHostels'));
    }
}
