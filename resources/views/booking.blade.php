<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Car Care</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="{{ asset('/img/Car_care__3.png') }}" rel="icon">
  <link href="{{ asset('/img/logo.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!--<link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">-->
  <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="{{ asset('vendor/aos/dist/aos.css/aos.css')}}" />


  <!-- Template Main CSS File -->
  <!--<link href="assets/css/style.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="{{ asset('css/booking.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">


  <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">CAR CARE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          @if (Auth::user()->role == 'user')
          <li><a class="nav-link scrollto active" href="{{ route('dashboard') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('service') }}">Services</a></li>
          <li><a class="nav-link scrollto" href="#aboutus">About Us</a></li>
          <li><a class="nav-link   scrollto" href="{{ route('booking') }}">Booking</a></li>
          @endif
          @if (Auth::user()->role == 'admin')
          <li><a class="nav-link   scrollto" href="{{ route('admindashboard') }}">Dashboard Admin</a></li>
          @endif
          <li><a class="nav-link scrollto" href="userprofile/{{Auth::user()->uuid }}">
              <div style="color:white">{{ Auth::user()->email }}</div>
            </a></li>
    </div>


    </ul>
    </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <body>
    <!-- partial -->
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->

        <!-- partial -->
        <div class="content-wrapper" style="margin-top: 30px">
          <div class="container">
            <div class="stretch-card grid-margin">
              <div class="card">
                <h2 style="display: flex; flex-direction: row; justify-content: center; align-items:center; margin-top:30px">Pilih Lahan Parkir</h2>
                <div class="card-body" style="margin-left: 90px; margin-right: 90px;">
                  <div class="row" style="gap: 20px;">
                    @foreach ($booking as $item)
                    <div class="coloum" style="border: 10px solid #37517e; border-radius:10px; width:fit-content;">
                      <img src="{{ asset('/img/Car_care__3.png') }}" alt="thumb" style="width: 230px; height: 220px;" />
                      <div>
                        <h2 class="mb-2 font-weight-600">
                          {{ $item-> Tempat}}
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">{{ $item-> price}} </span>/ Month
                        </div>
                        <p class="mb-0">
                          {{ $item-> deskripsi}}
                        </p>
                        <div class="p-4 pt-0 border-top-0 bg-transparent">
                          <div class="text-center"><a class="btn btn-success" href="bookingform/{{$item->id}}">BOOK</a></div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <footer id="footer">
        <div class="container footer-bottom clearfix">
          <div class="copyright">
            &copy; Copyright <strong><span>CarCare</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
          </div>
        </div>
      </footer><!-- End Footer -->
      <!-- partial -->
      <!-- inject:js -->
      <script src="{{asset('vendor/js/vendor.bundle.base.js')}}"></script>
      <!-- endinject -->
      <!-- plugin js for this page -->
      <script src="{{asset('vendor/aos/dist/aos.js/aos.js')}}"></script>
  </body>

</html>