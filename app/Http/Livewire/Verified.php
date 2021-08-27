<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Verified extends Component
{
    public $message;

    public function render()
    {
        return view('livewire.verified');
    }
}
