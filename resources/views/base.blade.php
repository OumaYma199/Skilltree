<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name')}} - @yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    </head>
    <body>

        {{--Barre de navigation--}}
         @include('nav/navbar')
        {{--Tous nos contenus sront afficé ici --}}
         @yield('content')
        {{--Barre de navigation--}}
         @include('footer/footer')
        {{--Tous Scripts--}}
         @include('script')
    </body>
</html>
