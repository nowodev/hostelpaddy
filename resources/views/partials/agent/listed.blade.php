{{-- Hostel Details --}}


<div class="mb-3 row">
  @forelse ($hostels as $hostel)
    <div class="mb-3 col-12 col-md-4 col-lg-4">
      <div class="card">
        <div class="row no-gutters">
          <img class="card-pill-img card-img-top img-fluid" src="{{ $hostel->main_image }}" alt="">
          <div class="col">
            <span class="card-body fs-6">
              <p class="card-text">{{ $hostel->hostel_name }}</p>
              <p class="mt-2 card-text">{{ $hostel->description }}</p>
              @if ($hostel->available == 0)
                <x-admin.pending message="Unavailable" />
              @elseif ($hostel->available == 1)
                <x-admin.verified message="Available" />
              @endif
              <p class="mt-2 font-weight-bold">N{{ $hostel->amount }}</p>
            </span>
            <a href="{{ route('info', [$hostel]) }}" class="stretched-link"></a>
          </div>
          <div class="col">
            <div class="float-right dropdown dropleft">
              <button type="button" class="btn" data-toggle="dropdown">
                <i class="fa fa-ellipsis-v"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('agent.hostels.edit', [$hostel]) }}">Edit</a>
                <form action="{{ route('agent.hostels.destroy', [$hostel]) }}" method="POST">
                  @csrf
                  @method('DELETE')

                  <input type="submit" onclick="return confirm('Are you sure?')" class="text-danger dropdown-item"
                    value="Delete">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @empty

    <div class="col">
      <h5 class="font-weight-bold">There are no available hostels currently. Please check back later.</h5>
    </div>
  @endforelse
</div>
