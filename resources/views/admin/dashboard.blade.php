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
    <link href="{{ asset('css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{ asset('css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/lib/helper.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" type="text/css">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html">
                            <!-- <img src="images/logo.png" alt="" /> --><span>CAR CARE | Admin</span></a></div>
                    <li class="label">Main</li>
                    <li><a href="{{ route('adminformbook') }}" class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard 
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
                            <li><a href="{{ route('admintablebook') }}">Booking</a></li>
                            <li><a href="page-reset-password.html">Shop</a></li>
                        </ul>
                    </li>
                    <li><a><i class="ti-close"></i> Logout</a></li>
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
                                <span class="user-avatar">Admin
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                                <h1>Hello, <span>Welcome Here</span></h1>
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
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Profit</div>
                                        <div class="stat-digit">1,012</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">New Customer</div>
                                        <div class="stat-digit">961</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Active Projects</div>
                                        <div class="stat-digit">770</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Referral</div>
                                        <div class="stat-digit">2,781</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="{{ asset('js/lib/jquery.min.js')}}"></script>
    <script src="{{ asset('js/lib/jquery.nanoscroller.min.js')}}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{ asset('js/lib/preloader/pace.min.js')}}"></script>
    <!-- sidebar -->

    <script src="{{ asset('js/lib/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
    <!-- bootstrap -->

    <script src="{{ asset('js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <script src="{{ asset('js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
    <script src="{{ asset('js/lib/calendar-2/pignose.init.js')}}"></script>


    <script src="{{ asset('js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{ asset('js/lib/weather/weather-init.js')}}"></script>
    <script src="{{ asset('js/lib/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('js/lib/circle-progress/circle-progress-init.js')}}"></script>
    <script src="{{ asset('js/lib/chartist/chartist.min.js')}}"></script>
    <script src="{{ asset('js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('js/lib/sparklinechart/sparkline.init.js')}}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
    <!-- scripit init-->
    <script src="{{ asset('js/dashboard2.js')}}"></script>
</body>

</html>