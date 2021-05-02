@extends('layouts.main.app')
{{-- @section('styles')
  <link type="text/css" href="{{ asset('main/css/styles.css') }}" rel="stylesheet" />
  <link type="text/css" href="{{ asset('main/css/homestyle.css') }}" rel="stylesheet" />
@endsection --}}
@section('title', 'HostelPaddy - Hostel Info')

@section('content')
  <div class="container gallery">
    <div class="card mx-2 p-2 border-0 border-bottom">
      <div class="card-image-top">
        <div id="carousel1" class="carousel slide position-relative d-md-none" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('main/img/hostel.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('main/img/hostel.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('main/img/hostel.png') }}" alt="Third slide">
            </div>
          </div>
          <div class="position-absolute identifier">
            <h3 class="h3">1/5</h3>
          </div>
        </div>
        <div class="d-none d-md-flex">
          <div class="one" width="">
            <img class="main w-100 img-fluid rounded" src="{{ $hostel->thumbnail }}" alt="First slide">
          </div>
          <div class="two mx-auto">
            <div class="side">
              <img class="" src="{{ asset('main/img/Rectangle 157.png') }}" alt="First slide">
            </div>
            <div class="side">
              <img class="" src="{{ asset('main/img/Rectangle 159.png') }}" alt="First slide">
            </div>
            <div class="side">
              <img class="" src="{{ asset('main/img/Rectangle 160.png') }}" alt="First slide">
            </div>
            <div class="">
              <img class="" src="{{ asset('main/img/Rectangle 161.png') }}" alt="First slide">
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-3">
        <div class="col-10">
          <p class="card-text text-primary text-bold">{{ $hostel->city }}, {{ $hostel->state }}</p>
          <h5 class="card-title text-dark h5 mt-2 head">The {{ $hostel->hostel_name }} lodge</h5>
          <p class="card-subtitle lead">{{ $hostel->description }}</p>
        </div>
        <div class="col-2 pt-3">
          <a href="#"><img src="{{ asset('main/img/Share button.png') }}" alt="" class="img-fluid share"></a>
        </div>
        <div class="col-12 my-2">
          <hr class="" />
        </div>
        <div class="col-12">
          <div class="d-flex flex-wrap">
            @foreach ($hostel->amenities as $amenity)
              <div class="px-2">
                <li class="rooms">{{ $amenity->name }}</li>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- house rules -->
  <div class="container mt-5">
    <h2 class="h5"><b>House Rules</b></h2>
    <p class="mb-3">These are the set of things that the House owner doesn't tolerate in the house except otherwise
    </p>
    <ol>
      @foreach ($hostel->rules as $rule)
        <li class="mb-3">
          <div class="d-flex">
            <img src="{{ asset('main/img/wrong.png') }}" alt="" class="img-fluid">
            <p class="pt"> &nbsp;&nbsp;&nbsp;{{ $rule->name }}</p>
          </div>
        </li>
      @endforeach
    </ol>
  </div>

  <!-- prefered tenants -->
  <div class="container mt-5">
    <h2 class="h5"><b>Prefered Tenants</b></h2>
    <p class="">{{ $hostel->tenantType }}.</p>
  </div>

  <!-- Utilities -->
  <div class="container mt-5">
    <h2 class="h5 mb-3"><b>Utilities</b></h2>
    <ul class="">
      @foreach ($hostel->utilities as $utility)
        <li class="mb-3 utility">{{ $utility->name }}</li>
      @endforeach
    </ul>
  </div>

  <!-- Location -->
  <div class="container mt-5">
    <h2 class="h5 mb-3"><b>Location</b></h2>
    <p class="mb-md-3">{{ $hostel->address }}.</p>
    <img width="80%" src="{{ asset('main/img/location.png') }}" alt="location" />
  </div>

  <!-- House Owner -->
  <div class="container mt-5">
    <h2 class="h5"><b>House owner/agent details</b></h2>
    <div class="row">
      <div class="col-4 col-md-2">
        <img src="{{ $agent->thumbnail }}" alt="Agent" class="img-fluid rounded">
      </div>
      <div class="col-7 col-md-2 mt-1">
        <p class="mb-2 name">{{ $agent->name }}</p>
        <p class="mb-2">Joined {{ $agent->joindate }}</p>
        <div class="d-flex align-content-center">
          <img src="{{ asset('main/img/verified.png') }}" alt="" class="img-fluid"> <span
            class="my-auto verify">&nbsp;Verified</span>
        </div>
      </div>
      <div class="col-md-8"></div>
      <div class="col-12 col-md-3 my-2">
        <button class="btn contact btn-md-lg btn-md-block ml-2 ml-md-3">Contact House owner/agent</button>
      </div>
    </div>
  </div>

  <div class="container my-2">
    <hr class="" />
  </div>

  <!-- Similar Hostels -->
  <div class="container mt-5 mb-md-5">
    <h2 class="h5"><b>Similar hostels</b></h2>

    <div id="carouselMain" class="carousel slide position-relative d-none d-md-block pt-md-5" data-ride="carouselMain">

      <div class="carousel-inner d-md-block">
        @foreach ($otherHostels->chunk(3) as $key => $chunk)
          <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <div class="d-block w-100" alt="First slide">
              <div class="d-flex justify-content-around">
                @foreach ($chunk as $others)
                  <div>
                    <div class="card mx-2 p-2 border-0">
                      <div class="position-relative">
                        <div class="card-img-top">
                          <img class="d-block w-100" src="{{ asset('main/img/hostel2.png') }}" alt="First slide">
                        </div>
                      </div>
                      <div class="position-absolute love"><img class="card-img-top"
                          src="{{ asset('main/img/love.png') }}" alt="Card image cap">
                      </div>
                      <div class="card-body p-0">
                        <p class="card-text text-primary location mt-2">{{ $others->city }}, {{ $others->state }}
                        </p>
                        <h5 class="card-title text-dark h6 my-0"><b>The {{ $others->hostel_name }} lodge</b></h5>
                        <p class="card-subtitle text-secondary mt-0">{{ $others->description }}</p>
                        <p class="card-title text-dark mt-2"><b><span
                              class="h6 text-bold">&#8358;{{ $others->amount }}</span></b> p/a</p>
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

  @endsection
