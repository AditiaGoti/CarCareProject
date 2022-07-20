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
    <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Template Main CSS File -->
    <!--<link href="assets/css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}" type="text/css">


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

            <h1 class="logo me-auto"><a>CAR CARE</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="{{ route('dashboard') }}">Home</a></li>
                    <li><a class="nav-link scrollto active" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                    <li><a class="nav-link   scrollto"href="{{ route('shop.index') }}">Shop</a></li>
                    <li><a class="nav-link scrollto" href="userprofile/{{Auth::user()->id }}"><div style="color:white">{{ Auth::user()->email }}</div></a></li>
                  
        </div>


        </ul>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->




    <!-- Header-->
    <header class="py-5" style="background: #37517e;">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">CAR CARE SHOP</h1>
            </div>
        </div>
    </header>
    @include('notification')
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                        src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{ $title }}</h1>
                    <div class="fs-5 mb-5">
                        <span>{{ $merek }}</span>
                        <span>{{ $price }}</span>
                    </div>
                    <p class="lead">{{ $deskripsi }}</p>
                    <button type="button" class="btn btn-primary"data-toggle="modal"
                        data-target="#modalSubscriptionForm">Buy</button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog"
            aria-labelledby="modalSubscriptionForm" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('ordering') }}" id="form2" method="post">
                        @csrf
                        <input type="hidden" value="{{$id_barang}}" name="id_barang"/>
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Payment</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="form2">Email</label>
                                <input type="email" id="form2" name="email" class="form-control validate"
                                    value="{{ Auth::user()->email }}" readonly required>
                            </div>
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="form2">Nama Barang</label>
                                <input type="text" id="form2" name="title"class="form-control validate"
                                    value="{{ $title }}" readonly required>
                            </div>
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="form2">Merek</label>
                                <input type="text" id="form2" name="merek" class="form-control validate"
                                    value="{{ $merek }}" readonly required>
                            </div>
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="form2">Harga</label>
                                <input type="text" id="form2" name="price" class="form-control validate"
                                    value="{{ $price }}" readonly required>
                            </div>
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="form2">Metode
                                    Pembayaran</label>
                                <input type="text" id="form2" name="metode"class="form-control validate"
                                    value="COD" readonly required>
                            </div>
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="form2">Alamat</label>
                                <input type="text" id="form2" name="alamat" class="form-control validate"
                                    >
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <input type="submit" class="btn btn-success" id="form2" value="Order">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="background: rgb(98, 240, 110)">
                        <h4 class="modal-title w-100 font-weight-bold">MESSAGE</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <p>Successful Order</p>
                            <p>Thank you for trusting us </p>
                        </center>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($detail as $item)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $item->title }}</h5>
                                    <!-- Product price-->
                                    <span>{{ $item->price }}</span>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                        href="/shopdetail/{{ $item->id }}">buy</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ======= Footer ======= -->
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
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
