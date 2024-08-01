<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Booking Form</title>

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

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/bookingform.css') }}" type="text/css">
    <script src="{{ asset('js/scripts.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
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
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="booking-cta">
                            <h1>Make your reservation</h1>
                            <p>let's book now, feel the comfort and security of CARCARE services.
                                and don't forget to enjoy our other services. #withcarcarewecare
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-7" style="margin-top: 40px; margin-left: 70px">
                        <div class="booking-form">
                            @include('notification')
                            <form action="{{ route('ordering.book') }}" method="post">
                                @csrf
                                <!-- <input type="hidden" value="{{$id}}" name="id"/> -->
                                <input type="hidden" value="{{Auth::user()->uuid}}" name="uuid" />
                                <div class="form-group">
                                    <span class="form-label">Email</span>
                                    <input class="form-control" type="text" name="email" value="{{ Auth::user()->email }}" readonly required>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Tempat Penyewaan</span>
                                    <input class="form-control" type="text" name="Tempat" value="{{ $Tempat }}" readonly required>
                                </div>
                                <div class="form-row">
                                    <div class="name">Jenis Mobil</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="type">
                                                    <option disabled="disabled" selected="selected">Choose option</option>
                                                    <option>Sedan</option>
                                                    <option>SUV</option>
                                                    <option>LATCHBACK</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Harga</span>
                                    <input class="form-control prc" type="text" value="{{ $price }}" name="price" readonly required>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Durasi</span>
                                    <div style="display: flex; align-items: center;">
                                        <input class="form-control prc" name="durasi" type="text" placeholder="">
                                        <span style="margin-left: 8px;">/month</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="form-label">TOTAL Harga</span>
                                    <input class="form-control prc" name="totalharga" type="text">
                                </div>
                                <div class="form-btn text-center">
                                    <button class="submit-btn" value="Order">Book!!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript'></script>

    <!-- Jquery JS-->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
    <script src="{{ asset('vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{ asset('vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/global.js')}}"></script>
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>CarCare</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
        </div>
    </footer><!-- End Footer -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // This event listener will update the total price based on the duration and price.
            $('.form-group').on('input', '.prc', function() {
                // Get the price and duration values
                var price = parseFloat($('input[name="price"]').val()) || 0;
                var duration = parseFloat($('input[name="durasi"]').val()) || 0;

                // Calculate the total price
                var total = price * duration;

                // Update the total price input field
                $('input[name="totalharga"]').val(total);
            });

            // Trigger input event initially to calculate total price if default values are present
            $('.form-group .prc').trigger('input');
        });
    </script>

</body>

</html>