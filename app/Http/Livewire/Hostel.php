<?php

namespace App\Http\Livewire;

use App\Models\Hostel as ModelsHostel;
use Livewire\Component;
use Livewire\WithPagination;

class Hostel extends Component
{
    use WithPagination;

    public function render()
    {
        $hostels = ModelsHostel::Paginate(5);

        return view('livewire.hostel', compact('hostels'))->extends('layouts.admin.app');
    }

    public function makeAvailable(ModelsHostel $hostel)
    {
        if ($hostel->available == 0) {
            $hostel->available = 1;
            $hostel->update();
            session()->flash('message', 'Status Updated');
        } else {
            $hostel->available = 0;
            $hostel->update();
            $this->emit('saved');
            session()->flash('message', 'Status Updated');
        }
    }
}
