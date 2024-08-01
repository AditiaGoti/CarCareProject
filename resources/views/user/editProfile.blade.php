<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/login.css')}}">

</head>

<body class="img" style="background-image: url('/img/backgorund.png');">
    <section class="ftco-section">
        <div class="row">
            <img src="{{asset('/img/logo.png')}}" class="img-fluid" style="margin-top:-300px" alt="">
        </div>
        <div class="container" style=" margin-top:-120px;border: 20px solid #252540; border-style: ridge; border-radius:25px; width: 500px; background-color: rgba(36, 36, 137, 0.55);">
            <div class="row justify-content-center">
                <img src="{{asset('/img/logo.png')}}" class="img-fluid" style="margin-top: -200px; margin-left: -20px; padding-top:20px;" alt="">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4" style="margin-top:-180px;">
                    <div class="login-wrap p-0">
                        <h3 class="mb-2 text-center" style="font-weight: bold; width:max-content">Edit Profile</h3>
                        @include('notification')
                        <form action="{{ route('updateUser', Auth::user()) }}" method="post" class="signin-form" style="margin-left: -100px; width: 350px; padding-top: 10px;">
                            @csrf
                            @method('PATCH')
                            <x-auth-validation-errors class="mb-4 inline" :errors="$errors" />
                            <div class="form-group" style="padding-top: 10px;">
                                <p>Email</p>
                                <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group" style="padding-top: 10px;">
                                <p>Name</p>
                                <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group" style="padding-top: 10px;">
                                <p>No Telp</p>
                                <input type="text" name="no_hp" value="{{ Auth::user()->no_hp }}" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group" style="padding-top: 10px;">
                                <button type="submit" value="submit"  name="submit" class="form-control submit px-3" style="background-color:#F4EE54; color: black; font-size:medium">Edit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    @if(session('edit_success'))
    <script>
        setTimeout(function() {
            window.location.href = "{{ route('user.profile') }}";
        }, 2000); // 2000 milliseconds = 2 seconds
    </script>
    <p>{{ session('pesan') }}</p>
@endif

</body>

</html>