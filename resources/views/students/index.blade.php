{{-- <html>
    <body>

        <h1>Hello {{ auth('student')->user()->name }}</h1>
        <a href="{{ route('search') }}">Search for your preferred hostel</a>
        <form method="POST" action="{{ route('student.logout') }}">
            @csrf
            <a href="{{ route('student.logout') }}"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ ('Logout') }}
            </a>
        </form>
    </body>
</html> --}}


@extends('layouts.students.app')

@section('styles')
  {{-- <link type="text/css" href="{{ asset('main/css/styles.css') }}" rel="stylesheet" /> --}}
@endsection

@section('title', 'Student - Home')

@section('content')
  <div class="container mt-5">
    {{-- Tab Navigation --}}
    <section class="d-flex justify-content-center">
      <ul class="p-3 nav nav-pills pill-color" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#shared-hostels">Shared hostels</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#my-hostels">My hostels</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#saved">Saved</a>
        </li>
      </ul>
    </section>

    {{-- Search bar --}}
    <section class="mb-5">
      <div class="container">
        <div class="row pt-5">
          <div class="col-sm-8">
            <form action="#">
              <input class="form-control" type="text" placeholder="  Seach location apartment..." />
              {{-- <i class="fa fa-search" aria-hidden="true"></i> --}}
            </form>
          </div>
          <div class="col-sm-2">
            <span class="btn btn-outline-dark">Filter</span>
          </div>
          <div class="col-sm-2">
            <span class="dropdown">
              <button class="btn btn-outline-dark dropdown-toggle position-relative" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </span>
          </div>
        </div>
      </div>
    </section>

    {{-- Tab Panes --}}
    <section class="tab-content">
      <div id="shared-hostels" class="container tab-pane active"><br>
        @include('partials.student.shared-hostels')
      </div>

      <div id="my-hostels" class="container tab-pane fade"><br>
        <h3>Menu 1</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div id="saved" class="container tab-pane fade"><br>
        <h3>Menu 2</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
          aperiam.</p>
      </div>
    </section>
  </div>
@endsection
