<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

        <title>Nord Coders</title>

        <!-- resources -->
        <script src="//unpkg.com/alpinejs" defer></script>

        <!-- Styles -->
        <style>
            [x-cloak] { display: none !important; }
        </style>

        @vite('resources/css/app.css')
    </head>
    <body>
        @include('includes.navbar')
        <div class="max-w-screen-xl mx-auto p-4">
            @yield('content')
        </div>
        @include('includes.footer')

        <!-- Extra Scripts -->
        @yield('extra-js')
    </body>
</html>
