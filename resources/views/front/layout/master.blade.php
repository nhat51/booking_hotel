<!DOCTYPE html>
<html lang="en">


<head>
    <base href="{{asset('/')}}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- page title -->
    <title>Stetho - @yield('title')</title>
    <!-- favicon -->
    <link rel="icon" href="front/favicon.ico" />
    <!-- bootstrap core CSS -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css">
    <!-- font awesome -->
    <link href="front/css/all.min.css" rel="stylesheet">
    <!-- owl carousel -->
    <link href="front/css/owl.carousel.min.css" rel="stylesheet">
    <link href="front/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- venobox css -->
    <link rel="stylesheet" href="front/css/venobox.css">
    <!-- datepicker css -->
    <link rel="stylesheet" href="front/css/datepicker.min.css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css">
    <!-- custom styles for this template -->
    <link href="front/css/custom.css" rel="stylesheet">
    <link href="front/css/responsive.css" rel="stylesheet">
    <link href="front/css/helper.css" rel="stylesheet">
    <link href="front/css/style.css" rel="stylesheet">
</head>

<body>
<!-- ================ Preloader ================ -->
<div id="preloader">
    <div class="spinner-grow" role="status"> <span class="sr-only">Loading...</span> </div>
</div>
<!-- ================ Preloader end ================ -->

<!-- ================ Header ================ -->
<header class="header">
    <!-- header upper -->
    <div class="header-upper-bar">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-8 col-md-6 col-sm-4 col-2">
                    <!-- header navigation -->
                    <nav class="navbar header-navigation navbar-expand-lg p-0">
                        <!-- mobile Toggle -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTheme" aria-controls="navbarTheme" aria-expanded="false" aria-label="Toggle navigation"> <span></span> <span></span> <span></span> </button>
                        <!-- mobile toggle end -->
                        <!-- top Menu -->
                        <div class="collapse navbar-collapse" id="navbarTheme">
                            <ul class="navbar-nav align-items-start align-items-lg-center">
                                <li class="nav-item {{ (request()->segment(1)== '') ? 'active' : '' }}"><a class="nav-link" href="./">Home</a></li>
                                <li class="nav-item {{ (request()->segment(1)== 'destination') ? 'active' : '' }}"><a class="nav-link " href="./destination">Destinations</a></li>
                                <li class="nav-item {{ (request()->segment(1)== 'hotel') ? 'active' : '' }}"><a class="nav-link " href="./hotel">Hotels</a></li>
                                <li class="nav-item {{ (request()->segment(1)== 'blog') ? 'active' : '' }}"><a class="nav-link " href="{{ route('blog.index') }}">Blog</a></li>
                                <li class="nav-item {{ (request()->segment(1)== 'about') ? 'active' : '' }}"><a class="nav-link " href="./about">About Us</a></li>
                                <li class="nav-item {{ (request()->segment(1)== 'contact') ? 'active' : '' }}"><a class="nav-link" href="./contact">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- top menu end -->
                    </nav>
                    <!-- header navigation end -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-10 text-right">
                    <!-- header right link -->
                    <div class="header-right-link">
                        <ul>
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li>
                                        <a href="{{ route('login') }}"><i class="fas fa-chevron-right"></i> Login</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}"><i class="fas fa-chevron-right"></i> Register</a>
                                    </li>
                                @endif
                            @else
                                <li class="dropdown">
                                    <a style="text-transform: none" class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu bg-dark" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="user/{{ \Illuminate\Support\Facades\Auth::id()}}/profile">
                                            <span class="fas fa-user"></span> My Profile
                                        </a>
                                        @can('manage-users')
                                            <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                                <span class="fas fa-users"></span>  User Management
                                            </a>
                                        @endcan
                                        @can('manage-hotels')
                                            <a class="dropdown-item" href="{{ route('admin.hotels.index') }}">
                                                <span class="fas fa-hotel"></span>  Hotel Management
                                            </a>
                                        @endcan
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <span class="fas fa-sign-out-alt"></span> Sign Out
                                            </a>
                                    </div>
                                </li>
                            @endguest
                            <li class="nav-item">
                                <a style="text-transform: none" href="./contact" class="nav-link header-request">Request a Quote</a></li>
                        </ul>
                    </div>
                    <!-- header right link end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header upper end -->
    <!-- header lover -->
    <div class="header-lover">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-12">
                    <!-- brand -->
                    <div class="logo"><a class="navbar-brand p-0" href="./"><img src="front/img/logo.png" alt=""></a></div>
                    <!-- brand end -->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!-- header call us -->
                    <div class="header-call-us">
                        <ul>
                            <li>
                                <div class="iocn-holder"><i class="far fa-clock"></i></div>
                                <div class="text-holder">
                                    <h6>Working Hours</h6>
                                    <p class="mb-0">Monday - Sunday: 9.00am to 6.00pm</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder"><i class="fas fa-phone-volume"></i></div>
                                <div class="text-holder">
                                    <h6>Call Us</h6>
                                    <p class="mb-0"><a href="tel:123456789">+011 123 4567</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder"><i class="far fa-envelope"></i></div>
                                <div class="text-holder">
                                    <h6>Mail Us</h6>
                                    <p class="mb-0"><a href="mailto:info@exampal.com">stetho@gmail.com</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- header call us end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header lover end -->
</header>
<!-- ================ Header end ================ -->


{{--body--}}
@yield('body')
{{--body end--}}


<!-- ================ Footer area ================ -->
<footer class="pt-50">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 mb-30">
                    <!-- title -->
                    <div class="title mb-10">
                        <h3>About Us</h3>
                    </div>
                    <!-- title end -->
                    <!-- text -->
                    <div class="text">
                        <p>Stetho is an online booking site that makes it easy for anyone to book overnight, short days or travel. </p>
                    </div>
                    <!-- end text -->
                    <!-- footer social -->
                    <div class="footer-social"> <a href="#"><i class="fab fa-facebook-square"></i></a> <a href="#"><i class="fab fa-twitter-square"></i></a> <a href="#"><i class="fab fa-linkedin"></i></a> <a href="#"><i class="fab fa-pinterest-square"></i></a> <a href="#"><i class="fab fa-google-plus-square"></i></a> </div>
                    <!-- footer social end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-30">
                    <!-- title -->
                    <div class="title mb-10">
                        <h3>Navigation</h3>
                    </div>
                    <!-- title end -->
                    <!-- footer link -->
                    <ul class="footer-link">
                        <li class="nav-item {{ (request()->segment(1)== '') ? 'active' : '' }}"><a class="nav-link" href="./">Home</a></li>
                        <li class="nav-item {{ (request()->segment(1)== 'about') ? 'active' : '' }}"><a class="nav-link " href="./about">About Us</a></li>
                        <li class="nav-item {{ (request()->segment(1)== 'contact') ? 'active' : '' }}"><a class="nav-link" href="./contact">Contact Us</a></li>
                        <li class="nav-item {{ (request()->segment(1)== 'blog') ? 'active' : '' }}"><a class="nav-link " href="./blog">Blog</a></li>
                    </ul>
                    <!-- footer link end -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-30">
                    <!-- title -->
                    <div class="title mb-10">
                        <h3>Newsletter</h3>
                    </div>
                    <!-- title end -->
                    <!-- footer newsletter text -->
                    <div class="footer-newsletter-text">
                        <p>Subscribe to receive the latest news and attractive coupons.</p>
                    </div>
                    <!-- footer newsletter text end -->
                    <!-- footer newsletter form -->
                    <div class="footer-newsletter-form">
                        <form>
                            <input placeholder="Email Adress..." type="text" required>
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                    <!-- footer newsletter form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- footer copyright -->
    <div class="copyright text-center mt-20">Stetho?? <span class="current-year"></span> All Rights Reserved.</div>
    <!-- footer copyright end -->
</footer>
<!-- ================ Footer area end ================ -->

<!-- ================ Top scroll ================ -->
<a href="#" class="scroll-top">Top</a>
<!-- ================ Top scroll end ================ -->

<!-- js files -->
<script src="front/js/jquery-3.5.1.min.js"></script>
<script src="front/js/bootstrap.bundle.min.js"></script>
<!-- counter js -->
<script src="front/js/jquery-1.10.2.min.js"></script>
<script src="front/js/waypoints.min.js"></script>
<script src="front/js/jquery.counterup.min.js"></script>
<!-- venobox js -->
<script src="front/js/venobox.min.js"></script>
<!-- owl carousel -->
<script src="front/js/owl.carousel.min.js"></script>
<!-- portfolio js -->
<script src="front/js/jquery.mixitup.min.js"></script>
<!-- datepicker js -->
<script src="front/js/datepicker.min.js"></script>
<script src="front/js/jquery-ui.min.js"></script>
<!-- script js -->
<script src="front/js/custom.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>
</body>


</html>

