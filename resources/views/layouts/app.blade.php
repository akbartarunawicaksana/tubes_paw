<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    @include('layouts.header')

    <div class="container">
        @include('layouts.sidebar')

        <main class="content">
            @yield('content')
        </main>
    </div>

</body>
</html>