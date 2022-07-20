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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!--<link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">-->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet"/>
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
<style>
   
.title {
 
    margin-bottom: 50px;
    text-transform: uppercase;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
     
}
.card {
    font-size: 1em;
    overflow: hidden;
    padding: 5;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
    margin-top:20px;
}

.carousel-indicators li {
    border-radius: 12px;
    width: 12px;
    height: 12px;
    background-color: #404040;
}
.carousel-indicators li {
    border-radius: 12px;
    width: 12px;
    height: 12px;
    background-color: #404040;
}
.carousel-indicators .active {
    background-color: white;
    max-width: 12px;
    margin: 0 3px;
    height: 12px;
}
.carousel-control-prev-icon {
 background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}
 {lex-direction: column;
}

.btn {
  margin-top: auto;
}
    </style>
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/">CAR CARE</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="{{ route('dashboard') }}">Home</a></li>
                    <li><a class="nav-link scrollto active" href="{{ route('service') }}">Services</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                    <li><a class="nav-link   scrollto"href="{{ route('shop.index') }}">Shop</a></li>
                    <li><a class="nav-link scrollto" href="userprofile/{{Auth::user()->id }}"><div style="color:white">{{ Auth::user()->email }}</div></a></li>
                  
            </div>


                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


<section class="home">
    <div class="container py-3">
        <div class="title h1 text-center" style="color: whitesmoke">OUR SERVICES</div>
        <!-- Card Start -->
        <div class="card">
          <div class="row ">
      
            <div class="col-md-7 px-3">
              <div class="card-block px-6">
                <h4 class="card-title">BOOKING CAR CARE </h4>
                <p class="card-text">
                    because car care can help customers who like to leave their vehicles for a long period of
                    time and the customer's vehicle will be maintained and will be kept safe
                </p>
                <p class="card-text">LET'S BOOK YOUR PLACE!!!!</p>
                <br>
                <a href="{{ route('booking') }}" class="mt-auto btn btn-primary  ">Book Now!!</a>
              </div>
            </div>
            <div class="col-sm-5">
                <img class="d-block w-100" src="{{ asset('/img/Car_Care.png') }}" alt="">
              </div>
            <!-- End of carousel -->
          </div>
        </div>
        <div class="card">
            <div class="row ">
        
              <div class="col-md-7 px-3">
                <div class="card-block px-6">
                  <h4 class="card-title">SHOP CAR CARE </h4>
                  <p class="card-text">
                      With car care you can also buy some stuff for maintenance car at your home.
                  </p>
                  <p class="card-text">LET'S BUY YOUR ITEMS!!!!</p>
                  <br>
                  <a href="{{ route('shop.index') }}" class="mt-auto btn btn-primary  ">Shop Now!!</a>
                </div>
              </div>
              <!-- End of carousel -->
              <div class="col-sm-5">
                <img class="d-block w-100" src="{{ asset('/img/Car_Care.png') }}" alt="">
              </div>
            </div>
          </div>
        <!-- End of card -->
      
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
    
    {{-- <div id="preloader"></div> --}}
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
    <script>
    $(document).ready(function(){
    setTimeout(function(){
    $('body').addClass('loaded');
    $('h1').css('color','#222222')
    }, 1000);
    });
    </script>
    <!-- Vendor JS Files -->
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
    
    </body>
    
    </html>
    