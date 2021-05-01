@extends('layouts.main.app')
{{-- @section('styles')
  <link type="text/css" href="{{ asset('main/css/styles.css') }}" rel="stylesheet" />
@endsection --}}
@section('title', 'HostelPaddy - Hostels')

@section('content')
    @include('components.main.all-hostels')
@endsection