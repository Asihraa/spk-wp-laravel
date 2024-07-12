<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'SPK Gunung di JATENG')</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body>
    <div class="container">
        @include('partials.header')
        
        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>
    <script src="{{ asset('assets/js/main.js') }}" type="module"></script>
</body>
</html>
