<div class="container mt-5">
  <h1 class="display-4">Listed Hostels</h1>
  <br>
  <h5>Find a hostel near you</h5>

  @include('partials.student.search-bar')

  <div class="row">
    @foreach ($hostels as $hostel)
      <div class="col-6 col-md-4 col-lg-3 mb-3">
        {{-- <a href="{{ route('info', [$hostel]) }}"> --}}

        <div class="card">
          <img class="card-img-top img-fluid px-2 pt-2" src="{{ asset('main/img/hostel2.png') }}" alt="Card image">
          <div class="card-img-overlay">
            <form action="{{ route('student.fave', [$hostel]) }}" method="POST" class="inline-flex float-right">
              @csrf
              @method('PUT')
              <button>
                @foreach (\App\Models\Favorite::where('favoriteable_id', $hostel->id)->get() as $fave)
                {{-- @foreach ($favorites as $fave) --}}
                  @if ($fave->favoriteable_id == $hostel->id)
                    <i class="fa-2x fas fa-heart text-danger"></i>
                  @else
                    <i class="fa-2x fas fa-heart text-white"></i>
                  @endif
                @endforeach
                      {{-- <i class="fa-2x fas fa-heart text-white"></i> --}}
              </button>
            </form>
            {{-- <a class="btn btn-primary" href="{{ route('onboard.login') }}">
              <i class="fa-2x fas fa-heart mt-n2 text-white float-right"></i>
            </a> --}}
          </div>

          <div class="px-3 pb-3">
            <sub class="mb-1">{{ $hostel->city }}, {{ $hostel->state }}</sub>
            <br>
            <span class="card-title font-weight-bold">{{ $hostel->hostel_name }}</span>
            <br>
            <span class="card-text">{{ $hostel->description }}</span>
            <br>
            <span class="card-text font-weight-bold">N{{ $hostel->amount }}
              <sub>{{ $hostel->period }}</sub></span>
            {{-- <a href="{{ route('info', [$hostel]) }}" class="stretched-link"></a> --}}
          </div>
        </div>
        {{-- </a> --}}
      </div>
    @endforeach
  </div>
  {{ $hostels->links() }}

</div>
