<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Calibre'))</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Bootstrap -->
    <link rel="apple-touch-icon" sizes="140x140" href="{{ url('/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ url('/favicon.ico') }}">
    <link href="{{ url('/css/libs/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    @yield('header')
    <link href="{{ url('/css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('/css/upload.css') }}" rel="stylesheet" media="screen">
    <!-- {% if g.current_theme == 1 %} -->
       <link href="{{ url('/css/caliBlur.css') }}" rel="stylesheet" media="screen">
       <link href="{{ url('/css/caliBlur_override.css') }}" rel="stylesheet" media="screen">
    <!-- {% endif %} -->
</head>
<body class="{{ page }} {{ bodyClass }}" data-text="{{ __('Home') }}" data-textback="{{ __('Back') }}">
    
</body>
</html>
