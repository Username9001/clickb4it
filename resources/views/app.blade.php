<!DOCTYPE html>

<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('aimeos_header')

    <title>CLICKB4IT</title>

    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    @yield('aimeos_styles')

</head>

<body>
{{-- <audio id="audioplayer" autobuffer="" loop="true" preload="auto" autoplay>
    <source src="/files/zinc-shooter.mp3" type="audio/mpeg">
    <source src="/files/zinc-shooter.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio> --}}
    <nav class="navbar navbar-default">

        <div class="container-fluid">

            <div class="navbar-header">

                <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                    <span class="sr-only">Toggle Navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button> -->

                <a class="navbar-brand" href="/shop"><img src="/files/clickb4it-logo.png" alt=""></a>

            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <div class="navbar-right">

                    @yield('aimeos_head')

                </div>

            </div>

        </div>

    </nav>

    <div class="">

        @yield('aimeos_nav')

        @include('cookieConsent::index')

        @yield('aimeos_stage')

        @yield('aimeos_body')

        @yield('aimeos_aside')

        @yield('content')
    
    </div>
    <footer id="footer" class="footer">
		<a href="http://instagram.com/socialmediaccount" class="row">
			<video playsinline muted autoplay loop class="banner-bottom">
				<source src="/files/clickbait_adz.mp4" type="video/mp4">
			</video>
		</a>
        <a href="/terms">Terms & Conditions</a> &nbsp;|&nbsp;
        <a href="/privacy">Privacy Policy</a>
    </footer>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

    @yield('aimeos_scripts')


</body>

</html>
