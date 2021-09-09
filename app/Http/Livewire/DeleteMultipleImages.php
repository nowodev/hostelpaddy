<?php

namespace App\Http\Livewire;

use App\Models\Hostel as HostelModel;
use App\Models\Image;
use Livewire\Component;

class DeleteMultipleImages extends Component
{
    public $hostel;

    public function mount($id): void
    {
        $this->hostel = $id;
    }

    public function render()
    {
        $hostels = HostelModel::find($this->hostel);

        return view('livewire.delete-multiple-images', compact('hostels'));
    }

    public function delete(Image $image): void
    {
        unlink(storage_path('app/public/hostels/' . $image->image));
        $image->delete();
    }
}
