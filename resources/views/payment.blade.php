<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Subscribtion Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
        <link rel="stylesheet" href="{{asset('fonts/linearicons/style.css')}}">
		<!-- STYLE CSS -->
        <link rel="stylesheet" href="{{asset('css/regis.css')}}">
	</head>

	<body>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-2">
						<img src="{{asset('/img/logo.png')}}" style="margin-top: -230px; margin-left: -150px;"class="img-" alt="">
						</div>
					</div>
					<img src="{{asset('/img/Car_Care_2.png')}}" class="img-cover"  style="width: 900px; margin-left: -80px; margin-top: -200px;"alt="">
				</div>
			<div class="col-sm-8">
			<div class="inner">
				<form action="" method="post">
						<img src="{{asset('/img/logo.png')}}" style="margin-top:-170px;" alt="">
					<h3>PAYMENT</h3>
					<div class="form-holder">
						<span class="lnr lnr-user" style="color: white;"></span>
						<input type="text" class="form-control" placeholder="Email">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope" style="color: white;"></span>
						<input type="text" class="form-control" placeholder="Tittle">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"style="color: white;"></span>
						<input type="text" class="form-control" placeholder="Merek">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"style="color: white;"></span>
						<input type="text" class="form-control" placeholder="Price">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"style="color: white;"></span>
						<input type="text" class="form-control" placeholder="COD">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"style="color: white;"></span>
						<input type="text" class="form-control" placeholder="Alamat">
					</div>
					<button style="color: black;">
						<span>ORDER</span>
					</button>
				</form>
			</div>
			
		</div>
		</div>
		</div>
		
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>