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
          <div class="row">
            <img class="card-pill-img card-img-top img-fluid" src="{{ asset('main/img/hostel.png') }}" alt="">

            @include('partials.student.favorite')

            <div class="col">
            <span class="card-body fs-6">
              <p class="card-text">1 Room Duplex Hostel</p>
{{--              <p class="card-text">{{ $hostel->description }}</p>--}}

              <p>Host: {{ $hostel->student->name }}
              </p>

              <dd class="text-sm">
                @foreach ($hostel->amenities as $amenity)
                  {{--                  @php($names2[] = $amenity->name)--}}
                  <span class="badge badge-pill badge-info">
                  {{ $amenity->name }}
                  </span>
                @endforeach
                {{--                {{ implode(', ', $names2 ?? []) }}--}}
              </dd>
              <p>Surlere Lagos.</p>
{{--              <p>{{ $hostel->state }}</p>--}}
              <p class="">#5,000/monthly</p>
            </span>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  @endif
</div>
