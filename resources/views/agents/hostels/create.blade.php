@extends('layouts.agents.app')

@section('title', 'Agent - List Hostel')

@section('content')
  <div class="container">
    <div class="mb-3">
      <p>
        Manage Listing <i class="fa fa-chevron-right"></i> Listed hostel
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
  <script src="{{ asset('main/js/student/form.js') }}"></script>
@endsection