<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\AgentProfileRequest;
use App\Models\Agent;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(AgentProfileRequest $request, Agent $agent)
    {
        $agent->update($request->validated());

        notify()->preset('profile-updated');
        return redirect()->route('agent.settings.profile');
    }

    public function updatePassword(AgentProfileRequest $request, Agent $agent)
    {
        $agent->update([
            'password' => Hash::make($request->password),
        ]);

        notify()->preset('password-updated');
        return redirect()->route('agent.settings.profile');
    }
}