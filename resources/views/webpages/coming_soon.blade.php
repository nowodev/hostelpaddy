@extends('layouts.comingsoon.app')
@section('title', 'Coming Soon')

@section('content')

  @include('components.comingsoon.countdown')

  <!-- Coming soon content -->
  <div class="coming-soon-content">
    <div class="container">
      <div class="row">
        <!-- Coming soon content text -->
        <div class="col-12 col-md-8 col-lg-8">
          <div class="website">
            WEBSITE
          </div>
          <div class="launching-soon">
            LAUNCHING SOON
          </div>

          <div class="newsletter-container">
            <div class="newsletter-description">
              Get an apartment early by signing up to our mailing list
            </div>

            @include('components.comingsoon.email')

          </div>
        </div>
        <!-- /Coming soon content text -->

        <!-- Coming soon content image -->
        <div class="col-12 col-md-4 col-lg-4 coming-soon-image">
          <img src="{{ asset('main/assets/side-image.svg') }}" alt="lodges">
        </div>
        <!-- /Coming soon content image -->
      </div>
    </div>
  </div>
  <!-- /Coming soon content -->

  @include('components.comingsoon.social')

  @include('components.comingsoon.copyright')
@endsection
