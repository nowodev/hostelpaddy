<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\AgentProfileRequest;
use App\Models\Agent;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(AgentProfileRequest $request, Agent $agent)
    {
        $agent->update($request->validated());

        return redirect()->route('agent.settings.profile')
            ->with('success', 'Profile Updated Successfully');
    }
}