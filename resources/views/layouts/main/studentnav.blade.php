<!-- nav-container -->
<div class="nav-container">

  <div class="back-button">
    <span onclick="back()" class="navbar-toggler-icon">
      <i class="fa fa-2x fa-times-circle-o"></i>
    </span>
  </div>

  <a href="{{ route('home') }}" class="logo-link">
    <div class="logo">
      <img src="{{ asset('main/img/logo.svg') }}" alt="Logo" class="logo img-fluid">
    </div>
  </a>

  <div class="login-button">
    <a href="{{ route('student.login') }}" class="login-button-text">Login</a>
  </div>
</div>
<!-- /nav-container -->
