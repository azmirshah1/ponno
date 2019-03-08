<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lookups Sentry Beta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Themify Icon css -->
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <!-- Stroke Gap Icon css -->
    <link rel="stylesheet" href="{{ asset('assets/css/stroke-gap.css') }}">
    <!-- Material Design Iconic Font css -->
    <link rel="stylesheet" href="{{ asset('assets/css/material-design-iconic-font.min.css') }}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.css') }}">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Responsive css -->
    <link rel="{{ asset('assets/css/responsive.css') }}">

    <!-- Modernizer js -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">

        <!-- Header Area Start Here -->
        <header class="header-area">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center text-center text-md-left">
                        <!-- Logo Start -->
                        <div class="col-md-3 col order-1 order-md-1 mb-sm-30">
                            <div class="logo">
                        <a href="{{ url('/') }}"><img src="assets/img/logo/logo.png" alt="logo-img"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                </button>
                        </div>
                        </div>
                        <!-- Logo End -->
                        <!-- Search Box Start Here -->
                        <div class="col-md-6  order-3 order-md-2">
                            <div class=" categorie-search-box">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search your lookup">
                                    <button>
                                        <span class="ti-search"></span>
                                    </button>
                                </form>
                            </div>    
                        </div>
                        <!-- Search Box End Here -->

                    </div>
                </div>
            </div>
            <div class="header-bottom blue-bg header-sticky">
                 <div class="container">
                    <div class="row align-items-center">
                        <!-- Menu Area Start Here --end-->
                        <div class="col-lg-10 d-none d-lg-block">
                            <nav>
                                <ul class="header-menu-list">
                                    <li class="active"><a href="#">Home</a></li>
        
                                    <li>
                                        <a class="drop-icon" href="#">Basic Repositories</a>
                                        <!--  Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu">
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Geography</li>
                                                    <li>
                                                        <a href="#">Countries</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Languages</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Currencies</a>
                                                    </li>
       
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">People</li>
                                                    <li>
                                                        <a href="#">Relationships</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Religions</a>
                                                    </li>
                                                    
                 
                                                </ul>
  



                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li>
                                                <ul>
                                                    <li class="menu-tile">Boolean</li>
                                                    <li>
                                                        <a href="#">Active or Inactive</a>
                                                    </li>

                                                    <li>
                                                        <a href="#">Debit or Credit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Alive or Dead</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Male or Female</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">True or False</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Yes or No</a>
                                                    </li>


                                                    <li>
                                                        <button class="btn btn-warning btn-sm pull-right">View All</button> &nbsp;
                                                    </li>


                           
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Mega-Menu End -->
                                    </li>
                                    
                                    
                                    <li ><a href="#">News & Updates</a></li>
                                    <li>
                                        <a class="drop-icon" href="#">Manual</a>
                            
                                        <ul class="ht-dropdown">
                                            <li>
                                                <a href="#">How to receive JSON from Lookup Sentry</a>
                                            </li>
                                            <li>
                                                <a href="#">Save Public Scope JSON at Your Local Server</a>
                                            </li>

                                        </ul>
                                       
                                    </li>
                                    <li>
                                        <a class="drop-icon" href="#">Contribute</a>
                            
                                        <ul class="ht-dropdown">
                                            <li>
                                                <a href="#">Login</a>
                                            </li>
                                            <li>
                                                <a href="#">Register</a>
                                            </li>
                                            <li>
                                                <a href="#">Suggestions</a>
                                            </li>
                                        </ul>
                                       
                                    </li>

                                    
                                </ul>
                            </nav>
                        </div>
                        <!-- Menu Area End Here -->
                        <!-- Cart Box Start Here -->
                        <div class="col-lg-2">
                            <div class="setting-box float-right" style="display: none">
                                <ul>
                                    <li class="drodown-show"><a href="home-2.html#"><span class="ti-settings"></span></a>
                                        <!-- Currency & Language Selection Start -->
                                        <ul class="dropdown cart-box-width currency-selector">
                                            <li>
                                                <h3>My Account </h3>
                                                <ul>
                                                    <li><a href="register.html">Register</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="account.html">My Account</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h3>Currency: USD</h3>
                                                <ul>
                                                    <li><a href="home-2.html#">€ Euro</a></li>
                                                    <li><a href="home-2.html#">£ Pound Sterling</a></li>
                                                    <li><a href="home-2.html#">$ US Dollar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h3>Language: EN-GB</h3>
                                                <ul>
                                                   <li><a href="home-2.html#"><img src="img/header/1.jpg" alt="lang-icon"> English</a></li>
                                                   <li><a href="home-2.html#"><img src="img/header/2.jpg" alt="lang-icon"> Germany</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- Currency & Language Selection End -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cart Box End Here -->
                    </div>
                    <!-- Row End -->
                    <!-- Mobile Menu Start Here -->
                
                </div>
                 <!-- Container End -->
            </div>
        </header>
        <!-- Header Area End Here -->

        <main>
            @yield('content')
        </main>
       <!-- Start Area Buat content sini
        Masukkan content sini -->

        <br>
        <br>
        <br>
        <!-- Footer Area Start Here -->
        <footer class="footer-area black-bg pt-60">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-logo text-center">
                        <a href="https://www.viniatosolution.com" target="__blank"><img src="assets/img/logo/logo2.png" alt="footer-logo"></a>
                        <p class="copyright">Copyright 2019 © Akashah Ahamad  All right reserved</p>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
                
            </div>

        </footer>
        <!-- Footer Area End Here -->
        <!-- Quick View Content Start -->
    
    </div>
    <!-- Main Wrapper End Here -->

    <!-- jquery 3.3.1 -->
    <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!-- Mobile menu js -->
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <!-- ScrollUp js -->
    <script src="{{ asset('assets/js/jquery.scrollUp.js') }}"></script>
    <!-- Fancybox js -->
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <!-- Countdown js -->
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- Jquery nice select js -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Jquery ui price slider js -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap popper js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugin js -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- Main activaion js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>