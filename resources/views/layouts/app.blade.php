<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php $actual_link = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$title = "Smartlab"
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Stay up to date with the latest design, video, development, and programming news.">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:title" content="@yield('title')" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@smartlab" />
    <meta name="twitter:creator" content="@smartlab">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('image')">
    <title>{{ config('app.name', 'Smartlab') }}</title>
    <link href="{{ asset('css/loader.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:300,700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
    <link rel="icon" type="image/png" href="/images/icons/fav.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114227726-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-114227726-1');
    </script>
    <style>
        /*#app {
            width: 90%;
            margin: 0 auto;
        }*/
    </style>
</head>

<body>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '438991246698405', // you need to create an facebook app
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v4.0'
            });
        };
    </script>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

    @include('layouts.menu')
    @include('index')

    <div id="app">

        @yield('menu')


        <main>
            @yield('content')
        </main>
    </div>
    @yield('js')
    @yield('js2')
    <script src="https://platform.linkedin.com/in.js" type="text/javascript">
        lang: en_US
    </script>
    <script>
        window.twttr = (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                t = window.twttr || {};
            if (d.getElementById(id)) return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function(f) {
                t._e.push(f);
            };

            return t;
        }(document, "script", "twitter-wjs"));
    </script>
</body>

</html>