<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Agent;
use App\Models\Hostel;

class AgentController extends Controller
{
    public function index() {
        //  fetch hostels per agent
        $hostels = Hostel::where('agent_id', auth('agent')->id())
            ->get();
        return view('agents.index', compact('hostels'));
    }

    public function edit()
    {
        $agent = auth('agent')->user();
        
        return view('agents.edit', compact('agent'));
    }

    public function update(ProfileRequest $request, Agent $agent) {
        $agent->update($request->validated());

        return redirect()->route('agent.index')
            ->with('success', 'Profile Updated Successfully');
    }
}
