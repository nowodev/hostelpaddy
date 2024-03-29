<div class="container mt-5">
  <p class="container footer-txt">All your saved hostels can be found here. Click or tap the icon to <br> remove from
    the list</p>

  @include('partials.main.search-bar')

  <div class="container row">
    @forelse ($favoriteHostels as $hostel)
      <div class="col-6 col-md-4 col-lg-3 mb-3">
        <div class="card">
          <img class="card-img-top img-fluid px-2 pt-2" src="{{ $hostel->main_image }}" alt="Card image">
          <div class="card-img-overlay">
            <form action="{{ route('student.unfave', [$hostel]) }}" method="POST" class="inline-flex float-right">
              @csrf
              @method('DELETE')
              <button class="btn">
                <img src="{{ asset('main/img/loved.png') }}" alt="Card image cap">
              </button>
            </form>
          </div>

          <div class="px-3 pb-3" style="position: relative;">
            <sub class="mb-1">
              @foreach (\App\Models\City::where('id', $hostel->city)->get() as $city)
                {{ $city->name }},
              @endforeach
              @foreach (\App\Models\State::where('id', $hostel->state)->get() as $state)
                {{ $state->name }}
              @endforeach
            </sub>
            <br>
            <span class="card-title font-weight-bold">{{ $hostel->hostel_name }}</span>
            <br>
            <span class="card-text">{{ $hostel->description }}</span>
            <br>
            <span class="card-text font-weight-bold">N{{ $hostel->amount }}
              <sub>{{ $hostel->period }}</sub></span>
            <a href="{{ route('info', [$hostel]) }}" class="stretched-link"></a>
          </div>
        </div>
      </div>
    @empty

      <div class="col">
        <h5 class="font-weight-bold">You dont have any favorite hostels. Click
          <a class="inline-link" href="{{ route('student.index') }}">here</a>
          to view all available hostels.
        </h5>
      </div>
    @endforelse
  </div>

</div>
