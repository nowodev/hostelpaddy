{{-- Hostel Details --}}

<div class="row mb-3">
  @if($sharedHostel->isEmpty())
    <div class="col">
      <h5 class="font-weight-bold">There are no available shared hostels currently. Please check back later.</h5>
    </div>
  @else

    @foreach ($sharedHostel as $hostel)
      <div class="col-4 mb-3">
        <div class="card">
          <div class="row no-gutters">
            <img class="card-pill-img card-img-top img-fluid" src="{{ asset('main/img/hostel.png') }}" alt="">

            @include('partials.student.favorite')

            <div class="col">
            <span class="card-body fs-6">
              <p class="card-text">1 Room Duplex Hostel</p>
              <p>Host:
{{--                    {{ dd($hostel->students) }}--}}
              </p>
              <p>
                @foreach ($hostel->amenities as $utility)
                  {{ $utility->name }}
                @endforeach
              </p>
              <p>{{ $hostel->state }} Surlere Lagos.</p>
              <p class="">#5,000/monthly</p>
            </span>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  @endif
</div>
