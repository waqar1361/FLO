<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="find your lost ones">
    <meta name="author" content="Muhammad Waqar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.title', 'FLO') .' | '.  config('app.name')}}</title>


{{--    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker.min.css') }}" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>
<body>
<div id="app">
   
    @include('layouts.nav')
    
    <main class="container-fluid py-4" id="main">
        @yield('content')
    </main>
    
    @include('layouts.footer')
    
</div>

<script src="{{ asset("js/jquery-3.3.1.min.js") }}"></script>
<script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("js/notify.min.js") }}"></script>
<script src="{{ asset("js/datepicker.min.js") }}"></script>
<script src="{{ asset("js/script.js") }}"></script>

@include('layouts.alert')

</body>
</html>
