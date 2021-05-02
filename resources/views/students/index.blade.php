<html>
    <head>
        {{-- <link rel="stylesheet" href="{{ asset('main/vendor/animate/css/animate.min.css') }}"> --}}
        <title>Student</title>
    </head>

    <body>
        {{-- @include('layouts.main.session') --}}

        <h1>Hello {{ auth('student')->user()->name }}</h1>
        <a href="{{ route('search') }}">Search for your preferred hostel</a>
        <form method="POST" action="{{ route('student.logout') }}">
            @csrf
            <a href="{{ route('student.logout') }}"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ ('Logout') }}
            </a>
        </form>
    </body>
</html>

