@extends('layouts.agents.app')

@section('title', 'Agent - List Hostel')

@section('styles')
  <link type="text/css" href="{{ asset('main/css/form.css') }}" rel="stylesheet"/>
@endsection

@section('content')
  <div class="container">
    <div class="mb-3">
      <p>
        Manage Listing <i class="fa fa-chevron-right"></i> Edit hostel
        <span class="float-right">
          <a href="{{ route('agent.hostels.index') }}"><i class="fa-2x far fa-times-circle"></i></a>
        </span>
      </p>
    </div>

    <form action="{{ route('agent.hostels.update', [$hostel]) }}" enctype="multipart/form-data" method="POST">
      @csrf
      @method('PUT')

      @include('agents.hostels.form', ['edit' => true])
    </form>

  </div>
@endsection

@section('script')
  <script src="{{ asset('main/js/agent/form.js') }}"></script>
@endsection