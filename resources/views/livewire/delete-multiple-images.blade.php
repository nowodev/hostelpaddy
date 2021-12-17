<div>
  <div class="row">
    @foreach ($hostels->images()->get() as $host)
      <div class="col-md-6">
        <img src="{{ asset('storage/hostels/' . $host->image) }}" class="img-fluid mb-2" alt="">

        <button type="button" class="btn btn-sm btn-danger mb-2" wire:click="delete({{ $host->id }})">Delete</button>
      </div>
    @endforeach
  </div>
</div>