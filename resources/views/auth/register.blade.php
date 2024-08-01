
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="{{asset('fonts/linearicons/style.css')}}">
       
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('css/regis.css')}}">
    </head>
        <!-- Validation Errors -->
        <div class="wrapper">
			<div class="row">
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-2">
						<img src="{{asset('/img/logo.png')}}" style="margin-top: -260px; margin-left: -150px;"class="img-" alt="">
						</div>
					</div>
					<img src="{{asset('/img/Car_Care_2.png')}}" class="img-cover"  style="width: 900px; margin-left: -80px; margin-top: -200px;"alt="">
				</div>
			<div class="col-sm-8">
			<div class="inner">
        <form method="POST" action="{{ route('register') }}" class="text-white" style="margin-left: 20px;">
            @csrf
            <img src="{{asset('/img/logo.png')}}" style="margin-top:-170px;" alt="">
					<h3>REGISTRATION</h3>
            <!-- Name -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <div class="form-holder">
           
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="form-control" style="color: white" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="form-holder">
            
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" style="color: white" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="form-holder">
            
                <x-label for="no_hp" :value="__('No Telpon')" />

                <x-input id="no_hp" style="color: white" class="form-control" type="text" name="no_hp" :value="old('no_hp')" required />
            </div>

            <!-- Password -->
            <div class="form-holder">
          
                <x-label for="password" :value="__('Password')" />

                <x-input style="color: white" id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="form-holder">
         
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input style="color: white" id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-white hover:text-white" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
            </div>
            </div>
            </div>
        </div>
</html>
            

