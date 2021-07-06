{{-- Hostel Details --}}


<div class="row mb-3">
  @foreach ($hostels as $hostel)
    <div class="col-12 col-md-4 col-lg-4 mb-3">
      <div class="card">
        <div class="row no-gutters">
          <img class="card-pill-img card-img-top img-fluid" src="{{ asset('main/img/hostel.png') }}" alt="">
          <div class="col">
            <span class="card-body fs-6">
              <p class="card-text">{{ $hostel->hostel_name }}</p>
              <p class="card-text mt-2">{{ $hostel->description }}</p>
              <p class="font-weight-bold mt-2">N{{ $hostel->amount }}</p>
            </span>
            <a href="{{ route('info', [$hostel]) }}" class="stretched-link"></a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
