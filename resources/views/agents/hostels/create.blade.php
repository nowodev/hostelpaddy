@extends('layouts.agents.app')

@section('title', 'Agent - Create Hostel')

@section('styles')
  <link type="text/css" href="{{ asset('main/css/form.css') }}" rel="stylesheet" />
@endsection

@section('content')
  <div class="container">
    <div class="mb-3">
      <p>
        Manage Listing <i class="fa fa-chevron-right"></i> Create hostel
        <span class="float-right">
          <a href="{{ route('agent.listings.index') }}"><i class="fa-2x far fa-times-circle"></i></a>
        </span>
      </p>
    </div>

    <form action="{{ route('agent.listings.store') }}" enctype="multipart/form-data" method="POST">
      @csrf

      @include('agents.hostels.form')


{{--       <button type="submit" class="btn btn-primary">--}}
{{--        Add Hostel--}}
{{--      </button>--}}

    </form>

  </div>
@endsection

@section('script')
  <script src="{{ asset('main/js/agent/form.js') }}"></script>
@endsection