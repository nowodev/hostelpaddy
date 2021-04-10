<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'Hostel Paddy')</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Favicons -->
  <link rel="apple-touch-icon-precomposed" href="{{ asset('comingsoon/img/logo.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('comingsoon/img/logo.png') }}">
  <link rel="mask-icon" href="{{ asset('comingsoon/img/logo.png') }}" color="#0f4392">
  <link rel="shortcut icon" href="{{ asset('comingsoon/img/logo.png') }}" type="image/x-icon">

  <!-- Default Stylesheet -->
  <link rel="stylesheet" href="{{ asset('comingsoon/styles.css') }}">

  <!-- Vendor stylesheets -->
  <link rel="stylesheet" href="{{ asset('comingsoon/vendor/animate/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('comingsoon/vendor/bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('comingsoon/vendor/reset/css/reset.min.css') }}">
  <link rel="stylesheet" href="{{ asset('comingsoon/vendor/normalize/css/normalize.min.css') }}">

  <!-- Default Scripts -->
  <script src="{{ asset('comingsoon/script.js') }}" defer></script>

  <!-- Vendor Scripts -->
  <script src="{{ asset('comingsoon/vendor/jquery/jquery-3.1.1.min.js') }}" defer></script>
  <script src="{{ asset('comingsoon/vendor/bootstrap/js/bootstrap.bundle.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    @include('layouts.comingsoon.navigation')

    <!-- Page Content -->
    <main>
      @yield('content')
    </main>
  </div>
</body>

</html>
