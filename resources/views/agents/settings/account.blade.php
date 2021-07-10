@extends('layouts.agents.app')

@section('styles')
  {{-- <link type="text/css" href="{{ asset('main/css/styles.css') }}" rel="stylesheet" /> --}}
  <link type="text/css" href="{{ asset('main/css/student/account.css') }}" rel="stylesheet" />
@endsection

@section('title', 'Agent - Account')

@section('content')
  <x-student.breadcrumbs>
    {{ Breadcrumbs::render('account') }}
  </x-student.breadcrumbs>

  <div class="container Banner">
    <h1 class="display1">Account</h1>
  </div>

  <div class="container row">
    <div class="col-md-8">
      <form action="" class="mx-md-5 w-md-50 mb-3">
        <input type="search" class="form-control" id="" name="search" placeholder="Search for keywords" results>
      </form>
    </div>
  </div>


  <div class="container mt-5 pt-5">
    <div class="d-flex mr-md-5 pr-md-5">
      <h3 class="h4 mb-3"><b>Notifications</b></h3>
      <div class="ml-auto align-self-center mr-md-5">
        <img src="{{ asset('main/toggler/ontogglers.png') }}" alt="" onclick='handleNotifications(this)'
          class="img-fluid">
      </div>
    </div>
  </div>


  <div class="container p-1 p-md-5" id="notifications">
    <div class="row notification my-2 my-md-2 py-1 py-md-3">
      <div class="col-10">
        <h6 class="my-2">Hostel mate notifications</h6>
        <p>Get notified when a student requests for a hostel mate</p>
      </div>
      <div class="col-2 align-self-center">
        <img src="{{ asset('main/toggler/offtogglers.png') }}" alt="" id="one" onclick='handleToggle(this)'
          class="img-fluid my-auto mr-auto">
      </div>
    </div>
    <div class="row notification my-2 my-md-2 py-1 py-md-3">
      <div class="col-10">
        <h6 class="my-2">Hostel preferenece alert</h6>
        <p>Get notified for listings matching your set choice of hostel</p>
      </div>
      <div class="col-2 align-self-center">
        <img src="{{ asset('main/toggler/offtogglers.png') }}" alt="" onclick='handleToggle(this)'
          class="img-fluid my-auto mr-auto">
      </div>
    </div>
    <div class="row notification my-2 my-md-2 py-1 py-md-3">
      <div class="col-10">
        <h6 class="my-2">Product update</h6>
      </div>
      <div class="col-2 align-self-center">
        <img src="{{ asset('main/toggler/offtogglers.png') }}" alt="" onclick='handleToggle(this)'
          class="img-fluid my-auto mr-auto">
      </div>
    </div>
    <div class="row notification my-2 my-md-2 py-1 py-md-3">
      <div class="col-10">
        <h6 class="my-2">New hostel listing</h6>
      </div>
      <div class="col-2 align-self-center">
        <img src="{{ asset('main/toggler/offtogglers.png') }}" alt="" onclick='handleToggle(this)'
          class="img-fluid my-auto mr-auto">
      </div>
    </div>
    <div class="row notification my-2 my-md-2 py-1 py-md-3">
      <div class="col-10">
        <h6 class="my-2">Email notification</h6>
      </div>
      <div class="col-2 align-self-center">
        <img src="{{ asset('main/toggler/offtogglers.png') }}" alt="" onclick='handleToggle(this)'
          class="img-fluid my-auto mr-auto">
      </div>
    </div>
    <div class="row notification my-2 my-md-2 py-1 py-md-3">
      <div class="col-10">
        <h6 class="my-2">SMS notification</h6>
      </div>
      <div class="col-2 align-self-center">
        <img src="{{ asset('main/toggler/offtogglers.png') }}" alt="" onclick='handleToggle(this)'
          class="img-fluid my-auto mr-auto">
      </div>
    </div>
  </div>

  <div class="container mt-5 pt-5">
    <div class="text-left mr-5">
      <button class="btn btn-danger btn-lg mb-3">Delete account</button>
      <h6 class="my-2">Before deleting your account, note that:</h6>
      <p>Your profile including your settings and hostel preference will be lost. However, thee are some data that we are
        legally allowed to keep</p>
    </div>
  </div>
@endsection

@section('script')
  <script>
    var notificationDiv = document.getElementById("notifications");

    function handleToggle(img) {
      if (img.src.match("{{ asset('main/toggler/offtogglers.png') }}")) {
        return img.src = "{{ asset('main/toggler/ontogglers.png') }}";
      } else {
        return img.src = "{{ asset('main/toggler/offtogglers.png') }}";
      }
    }

    function handleNotifications(img) {
      if (img.src.match("{{ asset('main/toggler/offtogglers.png') }}")) {
        notificationDiv.className = "on";
        return img.src = "{{ asset('main/toggler/ontogglers.png') }}";
      } else {
        notificationDiv.className = "off";
        return img.src = "{{ asset('main/toggler/offtogglers.png') }}";
      }
    }
  </script>
@endsection
