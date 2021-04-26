<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'Hostel Paddy')</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    @include('layouts.agents.navigation')

    {{-- Print out error message from controller --}}
    @if (session('success'))
      @include('layouts.agents.alert_success')
    @elseif (session('error'))
    @include('layouts.agents.alert_error')
    @endif
    {{-- Print out error message from controller --}}

    <!-- Page Content -->
    <main>
      @yield('content')
    </main>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
	integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous">
	</script>
  <script>
    $(".closealertbutton").click(function(e) {
      // $('.alertbox')[0].hide()
      // e.preventDefault();
      pid = $(this).parent().parent().hide(500)
      console.log(pid)
      // $(".alertbox", this).hide()
    })

  </script>
</body>

</html>
