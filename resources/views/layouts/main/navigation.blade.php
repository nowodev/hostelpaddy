<section id="header" class="header">
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container d-flex justify-content-between">
      <button class="navbar-toggler toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon">
          <i class="fa fa-bars"></i>
        </span>
      </button>

      <div class="navbar-brand">
        <a class="" href="/">
          <img alt="HostelPaddy logo" src="{{ asset('main/home-img/logo.png') }}" />
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav justify-content-center">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('about') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('hostels') }}">Listed hostels</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Home owners/agents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('help') }}">Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://blog.hostelpaddy.com">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary signup" href="{{ route('onboarding') }}">Sign Up</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
</section>
