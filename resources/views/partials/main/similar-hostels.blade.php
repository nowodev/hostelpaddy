<!-- Similar Hostels -->
<div class="container mt-5 mb-md-5">
  <h2 class="h5"><b>Similar hostels</b></h2>

  <div id="carouselMain" class="carousel slide position-relative d-none d-md-block pt-md-5" data-ride="carouselMain">

    <div class="carousel-inner d-md-block">
      @foreach ($otherHostels->chunk(3) as $key => $chunk)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
          <div class="d-block w-100">
            <div class="d-flex justify-content-around">
              @foreach ($chunk as $others)
                <div>
                  <div class="card mx-2 p-2 border border-light b-roll">
                    {{--                     <img class="card-img-top img-fluid px-2 pt-2" src="{{ $others->thumbnail }}" alt="Card image">--}}
                    {{-- <img class="d-block w-100" src="{{ asset('main/img/hostel2.png') }}" alt="First slide"> --}}

                    <img class="d-block w-100 rounded" style="height: 200px; width: 250px" src="{{ $others->main_image }}" alt="Card image">

                    @auth('agent')
                    @else
                      @include('partials.main.similar-hostel-favorite')
                    @endauth

                    <div class="p-0" style="position: relative;">
                      <p class="card-text text-primary location mt-2">
                        @foreach (\App\Models\City::where('id', $others->city)->get() as $city)
                          {{ $city->name }},
                        @endforeach
                        @foreach (\App\Models\State::where('id', $others->state)->get() as $state)
                          {{ $state->name }}
                        @endforeach
                      </p>
                      <h5 class="card-title text-dark h6 my-0"><b>The {{ $others->hostel_name }} lodge</b></h5>
                      <p class="card-subtitle text-secondary mt-0">{{ $others->description }}</p>
                      <p class="card-title text-dark mt-2"><b><span
                            class="h6 text-bold">&#8358;{{ $others->amount }}</span></b> p/a</p>
                      <a href="{{ route('info', [$others]) }}" class="stretched-link"></a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      @endforeach
    </div>


    <div class="position-absolute identifier2">
      <a class="" href="#carouselMain" role="button" data-slide="prev">
        <span class="oi oi-arrow-thick-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <span class="h3">&nbsp;&nbsp;&nbsp;</span>
      <a class="" href="#carouselMain" role="button" data-slide="next">
        <span class="oi oi-arrow-thick-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
