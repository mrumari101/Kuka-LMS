@extends('layouts.auth') {{-- Your Falcon dashboard layout --}}

@section('content')
    <div class="row flex-center min-vh-100 py-6">
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">

            {{-- Logo --}}
            <a class="d-flex flex-center mb-4" href="{{ url('/') }}">
                <img class="me-2" src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}" alt="" width="58" />
                <span class="font-sans-serif text-primary fw-bolder fs-4 d-inline-block">falcon</span>
            </a>

            <div class="card">
                <div class="card-body p-4 p-sm-5">

                    {{-- Header --}}
                    <div class="row flex-between-center mb-2">
                        <div class="col-auto">
                            <h5>Log in</h5>
                        </div>
                        <div class="col-auto fs-10 text-600">
                            <span class="mb-0 undefined">or</span>
                            <span><a href="{{ route('register') }}">Create an account</a></span>
                        </div>
                    </div>

                    {{-- Session Status --}}
                    @if(session('status'))
                        <div class="alert alert-success mb-3">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Login Form --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- Email --}}
                        <div class="mb-3">
                            <input class="form-control @error('email') is-invalid @enderror" type="email"
                                   name="email" value="{{ old('email') }}" required autofocus
                                   placeholder="Email address">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="mb-3">
                            <input class="form-control @error('password') is-invalid @enderror" type="password"
                                   name="password" required placeholder="Password" autocomplete="current-password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Remember Me + Forgot Password --}}
                        <div class="row flex-between-center mb-3">
                            <div class="col-auto">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember_me"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label mb-0" for="remember_me">Remember me</label>
                                </div>
                            </div>
                            <div class="col-auto">
                                @if(Route::has('password.request'))
                                    <a class="fs-10" href="{{ route('password.request') }}">Forgot Password?</a>
                                @endif
                            </div>
                        </div>

                        {{-- Submit Button --}}
                        <div class="mb-3">
                            <button class="btn btn-primary d-block w-100 mt-3" type="submit">
                                Log in
                            </button>
                        </div>
                    </form>

                    {{-- Social Login --}}
{{--                    <div class="position-relative mt-4">--}}
{{--                        <hr />--}}
{{--                        <div class="divider-content-center">or log in with</div>--}}
{{--                    </div>--}}
{{--                    <div class="row g-2 mt-2">--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#">--}}
{{--                                <span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> Google--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <a class="btn btn-outline-facebook btn-sm d-block w-100" href="#">--}}
{{--                                <span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> Facebook--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
    </div>
@endsection


{{--@extends('layouts.falcon') --}}{{-- Your Falcon dashboard layout --}}

{{--@section('content')--}}
{{--    <main class="main" id="top">--}}
{{--        <div class="container" data-layout="container">--}}
{{--            <div class="row flex-center min-vh-100 py-6">--}}
{{--                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">--}}
{{--                    <a class="d-flex flex-center mb-4" href="{{ url('/') }}">--}}
{{--                        <img class="me-2" src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}" alt="" width="58" />--}}
{{--                        <span class="font-sans-serif text-primary fw-bolder fs-4 d-inline-block">falcon</span>--}}
{{--                    </a>--}}

{{--                    <div class="card">--}}
{{--                        <div class="card-body p-4 p-sm-5">--}}

{{--                            <div class="row flex-between-center mb-2">--}}
{{--                                <div class="col-auto">--}}
{{--                                    <h5>Log in</h5>--}}
{{--                                </div>--}}
{{--                                <div class="col-auto fs-10 text-600">--}}
{{--                                    <span class="mb-0 undefined">or</span>--}}
{{--                                    <span><a href="{{ route('register') }}">Create an account</a></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            --}}{{-- Session Status --}}
{{--                            @if(session('status'))--}}
{{--                                <div class="alert alert-success mb-3">--}}
{{--                                    {{ session('status') }}--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            <form method="POST" action="{{ route('login') }}">--}}
{{--                                @csrf--}}

{{--                                --}}{{-- Email --}}
{{--                                <div class="mb-3">--}}
{{--                                    <input class="form-control @error('email') is-invalid @enderror" type="email"--}}
{{--                                           name="email" value="{{ old('email') }}" required autofocus--}}
{{--                                           placeholder="Email address">--}}
{{--                                    @error('email')--}}
{{--                                    <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                                --}}{{-- Password --}}
{{--                                <div class="mb-3">--}}
{{--                                    <input class="form-control @error('password') is-invalid @enderror" type="password"--}}
{{--                                           name="password" required placeholder="Password" autocomplete="current-password">--}}
{{--                                    @error('password')--}}
{{--                                    <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                                --}}{{-- Remember Me --}}
{{--                                <div class="row flex-between-center mb-3">--}}
{{--                                    <div class="col-auto">--}}
{{--                                        <div class="form-check mb-0">--}}
{{--                                            <input class="form-check-input" type="checkbox" name="remember" id="remember_me"--}}
{{--                                                {{ old('remember') ? 'checked' : '' }}>--}}
{{--                                            <label class="form-check-label mb-0" for="remember_me">Remember me</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-auto">--}}
{{--                                        @if(Route::has('password.request'))--}}
{{--                                            <a class="fs-10" href="{{ route('password.request') }}">Forgot Password?</a>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                --}}{{-- Submit --}}
{{--                                <div class="mb-3">--}}
{{--                                    <button class="btn btn-primary d-block w-100 mt-3" type="submit">--}}
{{--                                        Log in--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </form>--}}

{{--                            --}}{{-- Social Login --}}
{{--                            <div class="position-relative mt-4">--}}
{{--                                <hr />--}}
{{--                                <div class="divider-content-center">or log in with</div>--}}
{{--                            </div>--}}
{{--                            <div class="row g-2 mt-2">--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#">--}}
{{--                                        <span class="fab fa-google-plus-g me-2"></span> Google--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <a class="btn btn-outline-facebook btn-sm d-block w-100" href="#">--}}
{{--                                        <span class="fab fa-facebook-square me-2"></span> Facebook--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </main>--}}
{{--@endsection--}}



{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
