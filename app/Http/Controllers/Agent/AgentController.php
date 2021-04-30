<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index() {
        //  fetch hostels per agent
        $hostels = Hostel::where('agent_id', auth('agent')->id())
            ->get();
        return view('agents.index', compact('hostels'));
    }
}
