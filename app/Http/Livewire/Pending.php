<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pending extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.pending');
    }
}
