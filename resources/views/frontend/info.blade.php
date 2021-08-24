@extends('layouts.main.app')

@section('styles')
  <link type="text/css" href="{{ asset('main/css/homestyle.css') }}" rel="stylesheet"/>
  <style type="text/css">
      li{
          list-style: none;
          /*background: #e2e2e2;*/
          margin-left: 5px;
          text-align: center;
          border-radius:5px;
      }
      li span{
          font-size: 20px;
      }
      ul li{
          display: inline-block;
          padding: 10px 10px 5px;
      }
      #social-links{
          float: left;
      }
  </style>
@endsection

@section('title', 'HostelPaddy - Hostel Info')

@section('content')
  <div class="container mt-5 gallery">
    <div class="d-flex flex-wrap my-2">
      @auth('agent')
      @else
        @auth('student')
          <div class="mx-3 click">
            @if (auth('student')->user()->isFavorited($hostel))
              <form action="{{ route('student.unfave', [$hostel]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>
                  <img src="{{ asset('main/img/loved.png') }}" alt="Card image cap">
                </button>
              </form>
            @else
              <form action="{{ route('student.fave', [$hostel]) }}" method="POST">
                @csrf
                @method('PUT')
                <button>
                  {{--                <img src="{{ asset('main/img/love.png') }}" alt="Card image cap">--}}
                  <img src="{{ asset('main/img/save.png') }}" alt="save" class="img-fluid"/>
                </button>
              </form>
            @endif
          </div>
        @endauth

        @guest('student')
            <div class="mx-3 click">
            <form action="{{ route('student.fave', [$hostel]) }}" method="POST">
              @csrf
              @method('PUT')
              <button>
                <img src="{{ asset('main/img/save.png') }}" alt="Card image cap">
              </button>
            </form>
          </div>
        @endguest
      @endauth

      <div class="mx-3 click">
        <img src="{{ asset('main/img/share.png') }}" alt="share" class="img-fluid clear-fix float-left"/>
        {!! $shareComponent !!}
      </div>
    </div>
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
        <div class="col-12">
          <span class="card-text text-dark text-bold mr-4">
              @foreach (\App\Models\City::where('id', $hostel->city)->get() as $city)
                {{ $city->name }},
              @endforeach
              @foreach (\App\Models\State::where('id', $hostel->state)->get() as $state)
                {{ $state->name }}
              @endforeach
          </span>
          <a href="#" class="text-decoration-underline">
            <span class="card-text text-primary text-bold">Watch video</span>
          </a>
          <h5 class="card-title text-dark h5 mt-2 head">The {{ $hostel->hostel_name }} lodge</h5>
          <p class="card-subtitle lead">{{ $hostel->description }}</p>
        </div>
        <div class="col-12 my-2">
          <hr class=""/>
        </div>
        <div class="col-12">
          <div class="d-flex flex-wrap">
            @foreach ($hostel->amenities as $amenity)
              <ul class="px-2">
                <li class="rooms">{{ $amenity->name }}</li>
              </ul>
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

  <!-- preferred tenants -->
  <div class="container mt-5">
    <h2 class="h5"><b>Preferred Tenants</b></h2>
    <p class="">{{ $hostel->tenantType }}.</p>
  </div>

  <!-- Utilities -->
  <div class="container mt-5">
    <h2 class="h5 mb-3"><b>Utilities</b></h2>
    <ul class="">
      @foreach ($hostel->utilities as $utility)
        <li class="mb-3 utility">&nbsp; {{ $utility->name }}</li>
      @endforeach
    </ul>
  </div>

  <!-- Location -->
  <div class="container mt-5">
    <h2 class="h5 mb-3"><b>Location</b></h2>
    <p class="mb-md-3">{{ $hostel->address }}.</p>
    <img width="80%" src="{{ asset('main/img/location.png') }}" alt="location"/>
  </div>

  <!-- House Owner -->
  <div class="container mt-5">
    <h2 class="h5"><b>House owner/agent details</b></h2>
    <div class="row">
      <div class="col-4 col-md-2">
        <p class="mb-2 name text-dark"><b>{{ $agent->name }}</b></p>
        <img src="{{ $agent->thumbnail }}" alt="Agent" class="img-fluid rounded">
      </div>

      <div class="col-8 col-md-10 mt-1 mt-md-4 pt-md-2">
        <div class="d-flex align-content-center mb-3">
          <img src="{{ asset('main/img/call.png') }}" alt="" class="img-fluid"> <span class="my-auto verify">&nbsp;08168854521</span>
        </div>
        <div class="d-flex align-content-center mb-3">
          <img src="{{ asset('main/img/time.png') }}" alt="" class="img-fluid"> <span
              class="my-auto verify">&nbsp;Joined {{ $agent->joindate }}</span>
        </div>
        <div class="d-flex align-content-center">
          <img src="{{ asset('main/img/verified.png') }}" alt="" class="img-fluid"> <span class="my-auto verify">&nbsp;Verified</span>
        </div>
      </div>

      @auth('agent')
      @else
        <div class="col-12 my-2">
          <button class="btn contact btn-md-lg btn-md-block ml-2 ml-md-0">Contact House owner/agent</button>
        </div>
      @endauth
    </div>
  </div>

  <div class="container my-2">
    <hr class=""/>
  </div>

  {{-- Similar Hostels --}}
  @include('partials.main.similar-hostels')

@endsection

@section('belowFooter')
  @auth('agent')
  @else
    <div class="container d-flex justify-content-between pt-4 px-5">
      <div class="ml-md-5">
        <span class="h4 text-bold">&#8358;{{ $hostel->amount }}</span>
        <span class="p">yearly</span>
      </div>
      <div class="mr-md-5">
        <button class="btn btn-md signup" type="button">Chat agent</button>
      </div>
    </div>
  @endauth
@endsection

