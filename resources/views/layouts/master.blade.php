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
    <meta name="description" content="Alex is a growing web developer, UX designer, tech enthusiast, and dreamer ready to make your next project a success!">
    <meta name="keywords" content="alex crocker, web developer, web designer, ui/ux designer, full stack web developer, web dev, portfolio">
    <meta name="author" content="Alex Crocker">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}" type="text/css">
</head>
<body data-spy="scroll" data-target="#navbar">

    <div id="app">
    @section('header')
        <navbar></navbar> 
    @show

        @yield('content')
        
    </div>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-90621507-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/392079/particles.js"></script>
    <script>
        particlesJS.load('particles-js', 'https://api.myjson.com/bins/xkpet', function() {
            console.log('particles.js config loaded');
        });
    </script>
    <script src="{{ asset("js/app.js") }}" type="text/javascript"></script>
</body>
</html>
