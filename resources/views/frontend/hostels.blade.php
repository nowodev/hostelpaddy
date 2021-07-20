@extends('layouts.main.app')

@section('styles')
  <link type="text/css" href="{{ asset('main/css/homestyle.css') }}" rel="stylesheet"/>
@endsection

@section('title', 'HostelPaddy - Hostels')

@section('content')
  @include('partials.main.all-hostels')
@endsection

@section('scripts')
  <script>
      function reset() {
          document.getElementById("filterForm").reset();
      }
  </script>
@endsection
