<div>
  <img src="{{ asset('storage/hostels/' . $image['coverImage']) }}" class="img-fluid w-25 mb-2" alt="">

  <button type="button" class="btn btn-sm btn-danger" wire:click="delete({{ $hostel }})">Delete</button>
</div>