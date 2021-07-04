<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Agent;
use App\Models\Hostel;

class AgentController extends Controller
{
    public function index()
    {
        //  fetch hostels per agent
        $hostels = Hostel::where('agent_id', auth('agent')->id())
            ->get();
        return view('agents.index', compact('hostels'));
    }

    public function edit()
    {
        $agent = auth('agent')->user();

        return view('agents.edit-profile', compact('agent'));
    }

    public function update(ProfileRequest $request, Agent $agent)
    {
        $agent->update($request->validated());

        return redirect()->route('agent.index')
            ->with('success', 'Profile Updated Successfully');
    }

    public function archive()
    {
        $hostels = Hostel::onlyTrashed()
            ->agent()
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('agents.archive', compact('hostels'));
    }

    public function restore($id)
    {
        $hostel = Hostel::withTrashed()->findOrFail($id);
        $hostel->restore();

        return redirect()->route('agent.archive')
            ->with('success', 'Hostel Restored Successfully');
    }

    public function delete($id)
    {
        $hostel = Hostel::withTrashed()->findOrFail($id);
        $hostel->amenities()->detach($hostel->amenities);
        $hostel->utilities()->detach($hostel->utilities);
        $hostel->rules()->detach($hostel->rules);
        $hostel->forceDelete();

        return redirect()->route('agent.archive')
            ->with('success', 'Hostel Deleted Successfully');
    }
}
