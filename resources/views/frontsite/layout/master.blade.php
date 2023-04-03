<!DOCTYPE html>
<!--
	24 News by FreeHTML5.co
	Twitter: https://twitter.com/fh5co
	Facebook: https://fb.com/fh5co
	URL: https://freehtml5.co
-->
<html lang="en" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New website - @yield('title')</title>
    <link href="{{ asset('css/media_query.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/style_1.css') }}" rel="stylesheet" type="text/css" />
    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-3.5.0.min.js') }}"></script>
</head>

<body class="single">
    @include('frontsite.layout.header')
    @include('frontsite.layout.menu')
    @yield('content')
    @include('frontsite.layout.footer')

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
    </div>

    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js') }}" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js') }}" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- Waypoints -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <!-- Parallax -->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)) {
            $(window).stellar();
        }
    </script>

</body>

</html>