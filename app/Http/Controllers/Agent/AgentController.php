<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\City;
use App\Models\Hostel;
use App\Models\Property;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        $hostels = Hostel::orderBy('id', 'DESC')
            ->available()
            ->Paginate(16);

        $location = City::get();
        $property = Property::get();

        return view('agents.index', compact('hostels', 'location', 'property'));
    }

    public function show(Hostel $hostel)
    {
        $agent = Agent::find($hostel->agent_id);
        $otherHostels = Hostel::where('id', '!=', $hostel->id)->get();

        return view('agents.info', compact('hostel', 'agent', 'otherHostels'));
    }

    public function settings_account()
    {
        return view('agents.settings.account');
    }

    public function settings_profile()
    {
        $agent = auth('agent')->user();

        return view('agents.settings.profile', compact('agent'));
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