<?php

namespace App\Policies;

use App\Models\Hostel;
use App\Models\Agent;
use Illuminate\Auth\Access\HandlesAuthorization;

class HostelPolicy
{
    use HandlesAuthorization;

    public function viewAny(Agent $agent)
    {
        return true;
    }

    public function view(Agent $agent, Hostel $hostel)
    {
        return $agent->id === $hostel->agent_id;
    }

    public function create(Agent $agent)
    {
        return true;
    }

    public function update(Agent $agent, Hostel $hostel)
    {
        return $agent->id === $hostel->agent_id;
    }

    public function delete(Agent $agent, Hostel $hostel)
    {
        return $agent->id === $hostel->agent_id;
    }

    /**
     * Determine whether the Agent can restore the model.
     *
     * @param  \App\Models\Agent  $agent
     * @param  \App\Models\Hostel  $hostel
     * @return mixed
     */
    public function restore(Agent $agent, Hostel $hostel)
    {
        //
    }

    /**
     * Determine whether the Agent can permanently delete the model.
     *
     * @param  \App\Models\Agent  $agent
     * @param  \App\Models\Hostel  $hostel
     * @return mixed
     */
    public function forceDelete(Agent $agent, Hostel $hostel)
    {
        //
    }
}
