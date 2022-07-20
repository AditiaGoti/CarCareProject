<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CAR CARE : Admin Dashboard</title>
    <!-- ================= Favicon ================== -->

    <!-- Favicons -->

    <link href="{{ asset('/img/Car_care__3.png') }}" rel="icon">
    <link href="{{ asset('/img/logo.png') }}" rel="apple-touch-icon">
    <!-- Styles -->
    <link href="{{ asset('css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/helper.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/dashboardadmin.css') }}" type="text/css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html">
                            <!-- <img src="images/logo.png" alt="" /> --><span>CAR CARE | Admin</span>
                        </a></div>
                    <li class="label">Main</li>
                    <li><a href="{{ route('adminformbook') }}"><i class="ti-home"></i> Dashboard </a>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> Form <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{ route('adminformbook') }}">Booking</a></li>
                            <li><a href="{{ route('adminformshop') }}">Shop</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid2"></i> Table <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="page-login.html">User</a></li>
                            <li><a href="{{ route('admintablebook') }}">Customer Booking</a></li>
                            <li><a href="{{ route('admintableservice') }}">Service</a></li>
                            <li><a href="{{ route('admintableshop') }}">Shop</a></li>
                        </ul>
                    </li>
                    <li><a id="logout" href="/logout"><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">{{ Auth::user()->name }}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome {{ Auth::user()->name  }}</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <header class="masthead bg-primary text-white text-center">
                    <div class="container d-flex align-items-center flex-column">
                        <!-- Masthead Avatar Image-->
                        <!-- Masthead Heading-->
                        <h1 class="masthead-heading text-uppercase mb-0">CAR CARE | Admin Dashboard</h1>
                        <!-- Icon Divider-->
                        <div class="divider-custom divider-light">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                        <!-- Masthead Subheading-->
                        <p class="masthead-subheading font-weight-light mb-0" style="color: whitesmoke">WELCOME ADMIN
                        </p>
                    </div>
                </header>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->

    <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- bootstrap -->

    <script src="{{ asset('js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <script src="{{ asset('js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('js/lib/calendar-2/pignose.init.js') }}"></script>


    <script src="{{ asset('js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ asset('js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('js/dashboard2.js') }}"></script>
    <script>
        function DoPost(){
            $.post({{route('logout')}});
        }
    </script>
</body>

</html>
