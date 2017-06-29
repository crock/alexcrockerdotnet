<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alex Crocker - @yield('title')</title>

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
