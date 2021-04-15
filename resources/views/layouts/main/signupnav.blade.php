<!-- nav-container -->
<div class="nav-container">

  {{-- Button takes you to onboarding page --}}
  <a class="back-button" href="{{ route('onboarding') }}">
    {{-- <span onclick="back()" class="navbar-toggler-icon">
      <i class="fa fa-2x fa-times-circle-o"></i>
    </span> --}}
    <span class="navbar-toggler-icon">
      <i class="fa fa-2x fa-arrow-circle-left text-decoration"></i>
    </span>
  </a>

  <a href="{{ route('home') }}" class="logo-link">
    <div class="logo">
      <img src="{{ asset('main/img/logo.svg') }}" alt="Logo" class="logo img-fluid">
    </div>
  </a>

  <div class="login-button">
    <a href="{{ route('onboard.login') }}" class="login-button-text">Login</a>
  </div>
</div>
<!-- /nav-container -->
