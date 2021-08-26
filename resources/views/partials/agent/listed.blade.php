{{-- Hostel Details --}}


<div class="row mb-3">
  @forelse ($hostels as $hostel)
    <div class="col-12 col-md-4 col-lg-4 mb-3">
      <div class="card">
        <div class="row no-gutters">
          <img class="card-pill-img card-img-top img-fluid" src="{{ $hostel->main_image }}" alt="">
          <div class="col">
            <span class="card-body fs-6">
              <p class="card-text">{{ $hostel->hostel_name }}</p>
              <p class="card-text mt-2">{{ $hostel->description }}</p>
              <p class="font-weight-bold mt-2">N{{ $hostel->amount }}</p>
            </span>
            <a href="{{ route('info', [$hostel]) }}" class="stretched-link"></a>
          </div>
          <div class="col">
            <div class="dropdown dropleft float-right">
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