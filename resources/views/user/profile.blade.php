<!DOCTYPE html>
<html lang="en">
<style>
  .gradient-custom-2 {
    /* fallback for old browsers */
    background: #fbc2eb;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(251, 194, 235, 1), rgba(166, 193, 238, 1))
  }

  .buttonEdit {
    width: 150px;
    height: 30px;
    background-color: #4CAF50;
    border-radius: 4px;
    border: 1px solid green;
    margin-left: auto;
    margin-right: 5px;
    margin-top: 5px;
    text-align: center;
    line-height: 30px;
    /* Centers text vertically */
    color: white;
    /* Text color */
    cursor: pointer;
    /* Cursor style */
    padding: 0;
    /* Remove default padding */
  }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

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



  <!-- Template Main CSS File -->
  <!--<link href="assets/css/style.css" rel="stylesheet"> -->
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
  <section class="h-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
          <div class="card">
            @include('notification')
            <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
              <div class="ms-3" style="margin-top: 100px;">
                <h5> Name : {{ Auth::user()->name }}</h5>
                <p> Email : {{ Auth::user()->email }}</p>
                <p> No Telp : {{ Auth::user()->no_hp }}</p>

              </div>
            </div>
            <a class="buttonEdit" href="{{ route('user.editProfile', ['id' => Auth::user()->id ]) }}">Edit Profile</a>
            <div class="card-body p-4 text-black">
              <div class="mb-5">
                <p class="lead fw-normal mb-1">Booking Detail</p>
                <div class="p-4" style="background-color: #f8f9fa;">
                  <label>Tempat Penyewaan : <p style="float:right" class="font-italic mb-1"> {{ $barang->Tempat ?? '' }}</p></label>
                  <br>
                  <label>Jenis Mobil : <p style="float:right" class="font-italic mb-1">{{ $barang->type ?? '' }}</p> </label>
                  <br>
                  <label>Durasi Penyewaan : <p style="float:right" class="font-italic mb-1">{{ $barang->durasi ?? ''}} / Month</p> </label>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="lead fw-normal mb-0">QR Code</p>

              </div>
              <div class="row g-2">
                <div class="col mb-2">
                  <div class="qrcode" id="qrcode"></div>
                </div>
              </div>
            </div>
            <a href="/logout" class="btn btn-danger">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>CarCare</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->
  <script src="{{ asset('vendor/aos/aos.css') }}"></script>
  <!--<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/css/glightbox.min.css') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <!-- <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>-->
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.css') }}"></script>
  <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
  <!--<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>-->
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script>-->
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script>
    window.addEventListener("load", () => {
      var qrc = new QRCode(document.getElementById("qrcode"), "{{ $barang->id ?? '' . '-' . Auth::user()->name}}");
    });
  </script>
  @if(session('edit_success'))
  <script>
    setTimeout(function() {}, 2000); // 2000 milliseconds = 2 seconds
  </script>
  <p>{{ session('pesan') }}</p>
  @endif

</body>

</html>