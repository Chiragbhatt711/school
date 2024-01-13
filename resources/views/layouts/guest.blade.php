<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <title>
            @yield('title', config('app.name', env('APP_NAME')))
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Styles -->
        @vite('resources/css/app.css')
        <livewire:styles />

        <!--Shortcut icon-->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    </head>
    <body class="bg-gray-100" style="background-image: url({{ asset('img/baground.jpg') }})!important;">
        @yield('body')
        <livewire:display-status />
    </body>
    <livewire:scripts />
    @vite(['resources/js/app.js'])
</html>
