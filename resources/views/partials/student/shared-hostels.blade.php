{{-- Hostel Details --}}

<div class="row mb-3">
  @foreach ($sharedHostel as $hostel)
    <div class="col-4">
      <div class="card">
        <div class="row no-gutters">
          <img class="card-pill-img card-img-top img-fluid" src="{{ asset('main/img/hostel.png') }}" alt="">
          <div class="card-img-overlay">
            <i class="fa-2x fab fa-gratipay mt-n2 text-white"></i>
          </div>

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
</div>
