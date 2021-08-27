<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Suspended extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.suspended');
    }
}
