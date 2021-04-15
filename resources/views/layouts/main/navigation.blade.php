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
        </ul>
      </div>

      <div class="mobile-signup">
        <a class="btn btn-primary signup" href="{{ route('onboarding') }}">Sign Up</a>
      </div>

    </div>
  </nav>
</section>
