<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use Livewire\Component;
use Livewire\WithPagination;

class Agents extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $agents = Agent::Paginate(5);

        return view('livewire.agents', compact('agents'))->extends('layouts.admin.app');
    }

    public function verify(Agent $agent)
    {
        if ($agent->verified == 0) {
            $agent->verified = 1;
            $agent->update();
            session()->flash('message', 'Status Updated');
        } else {
            $agent->verified = 0;
            $agent->update();
            $this->emit('saved');
            session()->flash('message', 'Status Updated');
        }
    }
}
