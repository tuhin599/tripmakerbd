
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('css/superfish.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{asset('css/cs-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/cs-skin-border.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">

        <header id="fh5co-header-section" class="sticky-banner">
            <div class="container">
                <div class="nav-header">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                    <h1 id="fh5co-logo"><a href="{{route('index')}}"><i class="icon-air"></i>TripMaker BD</a></h1>
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <ul class="sf-menu" id="fh5co-primary-menu">
                            <li class="active"><a href="{{route('index')}}">Home</a></li>
                            {{--<li>--}}
                                {{--<a href="vacation.html" class="fh5co-sub-ddown">Vacations</a>--}}
                                {{--<ul class="fh5co-sub-menu">--}}
                                    {{--<li><a href="#">Family</a></li>--}}
                                    {{--<li><a href="#">CSS3 &amp; HTML5</a></li>--}}
                                    {{--<li><a href="#">Angular JS</a></li>--}}
                                    {{--<li><a href="#">Node JS</a></li>--}}
                                    {{--<li><a href="#">Django &amp; Python</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            <li><a href="{{route('experience')}}">Experience</a></li>
                            @if(Auth::check())
                            <li><a href="{{route('logout')}}">Logout</a></li>
                            @else
                            <li><a href="{{route('login')}}">Login</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- end:header-top -->
        <!-- start:main-content -->
        @yield('main-content')

        <!-- end:main-content -->



        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row row-bottom-padded-md">
                        <div class="col-md-2 col-md-offset-3 col-sm-2 col-xs-12 fh5co-footer-link">
                            <h3>About Travel</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->


<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/sticky.js')}}"></script>

<!-- Stellar -->
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<!-- Superfish -->
<script src="{{asset('js/hoverIntent.js')}}"></script>
<script src="{{asset('js/superfish.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/magnific-popup-options.js')}}"></script>
<!-- Date Picker -->
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<!-- CS Select -->
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/selectFx.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>

