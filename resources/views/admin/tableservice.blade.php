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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"> </script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"> </script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
        <script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"></script>
        <script src="//code.jquery.com/jquery-3.5.1.js"></script>
        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="//cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</head>
<style>
  h2 {  
  position: relative;  
  padding: 10;  
  margin: 10;  
  font-family: "Raleway", sans-serif;  
  font-weight: 300;  
  font-size: 40px;c  
  color: red;  
  -webkit-transition: all 0.4s ease 0s;  
  -o-transition: all 0.4s ease 0s;  
  transition: all 0.4s ease 0s;  
}
  </style>
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
                            <li><a href="{{ route('admintablebook') }}">Customer Booking</a></li>
                            <li><a href="{{ route('admintableservice') }}">Service</a></li>
                            <li><a href="{{route('admintableshop')}}">Shop</a></li>
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
<section style="background-color: #eee;">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Table Service</p>
                  <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                            <th><strong>Id</strong></th>
                            <th><strong>Tempat</strong></th>
                            <th><strong>Deskripsi</strong></th>
                            <th><strong>Harga</strong></th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $item)    
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->Tempat}}</td>
                            <td>{{ $item->deskripsi}}</td>
                            <td>{{ $item->price}}</td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
  $(document).ready(function () {
    $('#example').DataTable();
  });
  </script>
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