<section id="header" class="header">
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid d-flex justify-content-between">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <img src="{{ asset('main/img/Hamburger menu.png') }}" class="img-fluid" alt="">
      </button>

      <div class="navbar-brand">
        <a class="" href="/">
          <img alt="HostelPaddy logo" src="{{ asset('main/home-img/logo.png') }}" />
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav justify-content-center">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('student.index') }}">
              <i class="fa fa-tags"></i>
              Hostels
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('student.hostel-mate.index') }}">
              <i class="fas fa-user-friends"></i>
              Hostel mate
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('student.saved-hostels') }}">
              <i class="fa fa-heart"></i>
              Saved hostels
            </a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a type="button" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-user-cog"></i>
                Settings
              </a>
              <div class="dropdown-menu p-3">
                <a class="nav-link dropdown-item" href="{{ route('student.settings.profile') }}">Profile</a>
                <a class="nav-link dropdown-item" href="{{ route('student.settings.account') }}">Account</a>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav justify-content-center">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('student.chat') }}">
              <i class="fa fa-comment-dots"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('student.notification') }}">
              <i class="fa fa-bell"></i>
            </a>
          </li>
        </ul>
      </div>

      {{-- @if (Route::has('agent.register') || Route::has('student.register'))
        <div class="mobile-signup">
          @auth('agent')
            <a class="btn btn-primary signup" href="{{ route('agent.index') }}">{{ auth('agent')->user()->name }}</a>
          @else
            @auth('student')
              <a class="btn btn-primary signup"
                href="{{ route('student.index') }}">{{ auth('student')->user()->name }}</a>
            @else
              <a class="btn btn-primary signup" href="{{ route('onboarding') }}">Sign Up</a>
            @endauth
          @endauth
        </div>
      @endif --}}

      {{-- <div class="btn btn-outline-primary logout signup"> --}}
      {{-- <a class="btn btn-outline-primary logout signup" href="{{ route('onboarding') }}">Logout</a> --}}
      <form method="POST" action="{{ route('student.logout') }}">
        @csrf

        <x-dropdown-link :href="route('student.logout')"
          onclick="event.preventDefault(); this.closest('form').submit();">
          <div class="btn btn-outline-primary logout signup">

            {{ __('Logout') }}
          </div>
        </x-dropdown-link>
      </form>
      {{-- </div> --}}

    </div>
  </nav>
</section>
