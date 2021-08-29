<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Hostel Paddy')</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  @notifyCss
  @livewireStyles
  <link rel="stylesheet" href="{{ asset('main/vendor/bootstrap-5.1.0-dist/css/bootstrap.min.css') }}">
</head>

<body>
  @include('layouts.admin.navigation')

  {{-- Print out message from controller --}}
  <x:notify-messages/>
  {{-- Print out message from controller --}}

  <div class="container">
    @yield('content')
  </div>

  @notifyJs
  @livewireScripts
  <script src="{{ asset('main/vendor/jquery/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('main/vendor/bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('main/vendor/fontawesome/d7644e187f.js') }}"></script>

  @yield('script')
</body>

</html>
