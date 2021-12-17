<?php

namespace App\Http\Livewire;

use App\Models\Hostel as HostelModel;
use Livewire\Component;

class DeleteImage extends Component
{
    public $hostel;

    public function mount($id): void
    {
        $this->hostel = $id;
    }

    public function render()
    {
        $image = HostelModel::find($this->hostel);

        return view('livewire.delete-image', compact('image'));
    }

    public function delete(HostelModel $hostel): void
    {
        unlink(storage_path('app/public/hostels/' . $hostel->coverImage));
        $hostel->coverImage = '';
        $hostel->save();
    }
}
