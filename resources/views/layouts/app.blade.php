<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'biker-portal') }}</title> --}}
    <title>@yield('title', 'Bikers Portal')</title>


    <!-- Scripts -->
    <script src="{{ asset('public/js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <script src="{{ asset('public/js/script.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="{{ asset('public/fonts/css/all.min.css') }}" defer></script>
    <script src="{{ asset('public/fonts/js/all.min.js') }}" defer></script>
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">


</head>
<body>
 <!--    navbar -->
        @include('layouts.navbar')
        
          @yield('content')
            
        
       
</body>
</html>
