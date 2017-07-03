<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#5F9EA0">
    <meta name="p:domain_verify" content="eb689c1d8f2ce5c7b4c1fbf704baa172"/>
    <link rel="shortcut icon" href="{{ asset("favicon.ico") }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset("favicon.png") }}" type="image/png"/>

    <title>Alex Crocker - @yield('title')</title>

    <!-- SEO Stuff -->
    <meta name="description" content="Full Stack Developer for hire">
    <meta name="keywords" content="alex crocker, web developer, web designer, full stack, full stack developer, web dev, developer portfolio, vue.js website, laravel website">
    <meta name="author" content="Alex Crocker">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}" type="text/css">
</head>
<body>

    <div id="app">
    @section('header')
        <navbar></navbar>
        <profile></profile>
    @show
        @yield('content')
    </div>

    <script src="{{ asset("js/app.js") }}" type="text/javascript"></script>
</body>
</html>
