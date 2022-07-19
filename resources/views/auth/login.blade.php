<x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <body class="img" style="background-image: url('/img/backgorund.png');">
	<section class="ftco-section">
		<div class="row">
			<img src="{{asset('/img/logo.png')}}" class="img-fluid" style="margin-top:-300px" alt="">
	</div>
		<div class="container" style=" margin-top:-150px;border: 20px solid #252540; border-style: ridge; border-radius:25px; width: 500px; background-color: rgba(36, 36, 137, 0.55);">
			<div class="row justify-content-center">
					<img src="{{asset('/img/logo.png')}}" class="img-fluid" style="margin-top: -200px; margin-left: -20px; padding-top:20px;" alt="">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4" style="margin-top:-160px;">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center" style="font-weight: bold;">LOGIN</h3>
        <form method="POST" action="{{ route('login') }}" style="margin-left: -100px; width: 350px; padding-top: 10px;">
            @csrf

            <!-- Email Address -->
            <div class="form-group" style="padding-top: 10px;">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="form-group" style="padding-top: 10px;">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="form-control submit px-3" style="background-color:#252540; color: black; padding-top: 10px;">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

</x-guest-layout>
