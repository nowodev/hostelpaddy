<section id="header" class="header">
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container d-flex justify-content-between">
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
            <a class="nav-link" href="{{ route('agent.index') }}">
              <i class="fa fa-tags"></i>
              Hostels
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('agent.hostels.index') }}">
              <i class="fas fa-th-large"></i>
              Manage Listing
            </a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a type="button" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-user-cog"></i>
                Settings
              </a>
              <div class="dropdown-menu p-3">
                <a class="nav-link dropdown-item" href="{{ route('agent.settings.profile') }}">Profile</a>
                <a class="nav-link dropdown-item" href="{{ route('agent.settings.account') }}">Account</a>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav justify-content-center">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('agent.chat') }}">
              <i class="fa fa-comment-dots"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('agent.notification') }}">
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
      <form method="POST" action="{{ route('agent.logout') }}">
        @csrf

        <x-dropdown-link :href="route('agent.logout')"
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
