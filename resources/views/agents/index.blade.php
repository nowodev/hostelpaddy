<html>
    <head>
        <link rel="stylesheet" href="{{ asset('main/vendor/animate/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('main/vendor/bootstrap/css/bootstrap.min.css') }}">
        <script src="{{ asset('main/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
        <title>Agent</title>
    </head>

    <body>
        {{-- @include('layouts.main.session') --}}

        <h1>Hello {{ Auth::guard('agent')->user()->name }}</h1>
        <a href="{{ route('search') }}">Search for your preferred hostel</a>
        <form method="POST" action="{{ route('agent.logout') }}">
            @csrf
            <a href="{{ route('agent.logout') }}"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ ('Logout') }}
            </a>
        </form>
    </body>
</html>

