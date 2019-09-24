<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'MoucDia') }}</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
        <link href="{{ asset('css/guest.css') }}" rel="stylesheet">
    </head>
    <body>

        <div class="flex-center position-ref full-height">

            @include('layouts.nav')

            <div class="container">
                @yield('content', 'WELCOME')
           </div>

        </div>

    </body>
</html>
