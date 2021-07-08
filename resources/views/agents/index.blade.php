@extends('layouts.agents.app')

@section('styles')
  <link type="text/css" href="{{ asset('main/css/homestyle.css') }}" rel="stylesheet" />
@endsection

{{-- @section('title', 'Agent - Home') --}}
@section('title')
  {{ auth('agent')->user()->name }} - Agent
@endsection

@section('content')
  @include('partials.agent.all-hostels')
@endsection
