@extends('layouts.agents.app')

@section('styles')
  {{-- <link type="text/css" href="{{ asset('main/css/styles.css') }}" rel="stylesheet" /> --}}
@endsection

@section('title')
  {{ auth('agent')->user()->name }} - Agent
@endsection

@section('content')
  <div class="container mt-5">
    {{-- Tab Navigation --}}
    <section class="d-flex justify-content-center">
      <ul class="p-3 nav nav-pills pill-color" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="pill" href="#listed">Listed hostels</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="pill" href="#unfinished">Unfinished listings</a>
        </li>
      </ul>
    </section>

    {{-- Tab Panes --}}
    <section class="tab-content">
      <div id="listed" class="container tab-pane active">
        @include('partials.agent.search-bar')
        @include('partials.agent.listed')
      </div>

      <div id="unfinished" class="container tab-pane fade">
        @include('partials.agent.unfinished')
      </div>
    </section>
  </div>
@endsection