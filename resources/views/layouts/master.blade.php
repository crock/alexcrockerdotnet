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

    <title>Alex Crocker</title>

    <!-- SEO Stuff -->
    <meta name="description" content="Full Stack Web Developer &amp; tech enthusiast">
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
        <div class="social-icons">
            <a :href="this.social.twitter"><span class="fa fa-twitter fa-2x"></span></a>
            <a :href="this.social.behance"><span class="fa fa-behance fa-2x"></span></a>
            <a :href="this.social.github"><span class="fa fa-github fa-2x"></span></a>
            <a :href="this.social.linkedin"><span class="fa fa-linkedin fa-2x"></span></a>
        </div>
    </div>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-90621507-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script src="{{ asset("js/app.js") }}" type="text/javascript"></script>
</body>
</html>
