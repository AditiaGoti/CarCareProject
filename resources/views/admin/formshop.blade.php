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
                    <li><a href="{{ route('adminformbook') }}" ><i class="ti-home"></i> Dashboard </a>
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
                          
                            <li><a href="page-register.html">Booking</a></li>
                            <li><a href="page-reset-password.html">Shop</a></li>
                        </ul>
                    </li>
                    <li><a><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->
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
                          <!-- <li><a href="{{ route('adminformshop') }}">Shop</a></li> -->
                  </ul>
              </li>
                  <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid2"></i> Table <span
                              class="sidebar-collapse-icon ti-angle-down"></span></a>
                      <ul>
                        
                          <li><a href="{{ route('admintablebook') }}">Customer Booking</a></li>
                          <li><a href="{{ route('admintableservice') }}">Service</a></li>
                          <li><a href="{{route('admintableuser')}}">User</a></li>
                      </ul>
                  </li>
                  <li><a><i class="ti-close"></i> Logout</a></li>
              </ul>
          </div>
      </div>
  </div>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Item</p>
                  @include('notification')

                  <form class="mx-1 mx-md-4" method="POST" action="{{ url('/add-shop') }}">
                    @csrf
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Nama Barang</label>
                        <input type="text" name="title" class="form-control" />
                      
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Merek Barang</label>
                        <input type="text" name="merek" class="form-control" />
                      
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                     
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Price</label>
                        <input type="" name="price" class="form-control" />
                        
                      </div>
                    </div>  
                    <div class="d-flex flex-row align-items-center mb-4">
                     
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Deskripsi</label>
                        <textarea type="text" name="deskripsi" class="form-control"></textarea>
                      
                      </div>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Save</button>
                    </div>
  
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                    <img src="{{ asset('img/Car_Care_2.png') }}" class="img-fluid animated" alt="">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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