<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Hostel;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        $hostels = Hostel::where('agent_id', auth('agent')->id())
            ->get();

        return view('agents.index', compact('hostels'));
    }

    public function settings_account()
    {
        return view('agents.settings.account');
    }

    public function settings_profile()
    {
        return view('agents.settings.profile');
    }

    public function hostel_mate()
    {
        return view('agents.hostel_mate');
    }

    public function chat()
    {
        return view('agents.chat');
    }

    public function notification()
    {
        return view('agents.notification');
    }
}