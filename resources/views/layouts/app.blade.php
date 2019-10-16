<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('css/nucleo.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('css/argon-dashboard.css')}}" rel="stylesheet" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" <link rel="stylesheet"
        href="{{ asset('js/vendor/jquery-2.2.4.min.js') }}" <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo-wrap">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                        <a href="{{ url('/')}}">
                            <img class="img-fluid img-responsive" src="{{ asset('img/logo.jpg') }}" alt="" style="width:30%">
                        </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
                        <img class="img-fluid" src="img/banner-ad.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    {{-- <a class="navbar-brand" href="#">The Legend Reality tv</a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
        aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse float-right" id="navbarsExample03">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{ url('/vote')}}">Vote</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> --}}
        </ul>
        {{-- <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search">
        </form> --}}
    </div>
</nav>
    </header>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="#">Our services</a></li>
                        <li><a href="#">Our Products</a></li>
                        <li><a href="#">Our Auditions</a></li>
                        <li><a href="#">Our Team</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Pass projects</a></li>
                        <li><a href="#">Future projects</a></li>
                        <li><a href="#">Event</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Contact us</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-instagram">@ theleagendrealitytv</a></li>
                        <li><a href="#"><i class="fa fa-facebook">@ theleagendrealitytv</a></li>
                        <li><a href="#"><i class="fa fa-twiter">@ theleagendrealitytv</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">
                {{-- <p class="footer-text m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p> --}}
                <div class="col-lg-12 col-md-12 footer-social">
                    <a href="http://faceboook.com/theleagendrealitytv"><i class="fa fa-facebook"></i></a>
                    <a href="http://twitter.com/theleagendrealitytv"><i class="fa fa-twitter"></i></a>
                    <a href="http://instagram.com/theleagendrealitytv"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('js/easing.min.js') }}"></script>
    <script src="{{ asset('js/hoverIntent.js') }}"></script>
    <script src="{{ asset('js/superfish.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/mn-accordion.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/argon-dashboard.js') }}"></script>
    <script src="{{ asset('js/argon.min.js') }}"></script>
</body>

</html>