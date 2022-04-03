<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="/img/icon.svg" />

    <title>@yield('title')</title>
    @yield('css')
</head>

<body>
    <div>
        <nav>
            <a href="{{ route('home.index') }}">Dashboard</a>
            <a href="{{ route('publications.index') }}">Publications</a>
            <a href="{{ route('users.index') }}">Users</a>
            <a href="{{ route('sessions.index') }}">Sessions</a>
        </nav>
    </div>
    <div class="main">
        @yield('content')
    </div>

    @yield('scripts')
</body>

</html>
