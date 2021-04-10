<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Search your preferred hostel by Location</h1>
    <form method="get" action="{{ route('search')}}">
        @csrf
        <input type="text" name="query" placeholder="search location">
        <button type="submit">search</button>
    </form>
        
        @if($users->isNotEmpty())
            @foreach ($users as $user)
                <div>
                    <h2>here are the hostels for this location</h2>
                {{$user->location}}
                </div>
            @endforeach
        @else
            <div>
            <h2> No hostel found for this location</h2>
            </div>
        @endif
</body>
</html>