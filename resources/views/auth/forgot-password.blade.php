@extends('layouts.auth')

@section('content')
    <div class="row flex-center min-vh-100 py-6 text-center">
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">

            {{-- Logo --}}
            <a class="d-flex flex-center mb-4" href="{{ url('/') }}">
                <img class="me-2"
                     src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}"
                     alt="falcon"
                     width="58">
                <span class="font-sans-serif text-primary fw-bolder fs-4 d-inline-block">falcon</span>
            </a>

            <div class="card">
                <div class="card-body p-4 p-sm-5">

                    {{-- Title --}}
                    <h5 class="mb-0">Forgot your password?</h5>
                    <small class="text-600">
                        Enter your email and we'll send you a reset link.
                    </small>

                    {{-- Session Status --}}
                    @if (session('status'))
                        <div class="alert alert-success mt-3">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Form --}}
                    <form class="mt-4" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <input
                            class="form-control @error('email') is-invalid @enderror"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Email address"
                            required
                            autofocus
                        >

                        @error('email')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                        @enderror

                        <button class="btn btn-primary d-block w-100 mt-3" type="submit">
                            Send reset link
                        </button>
                    </form>

                    {{-- Help / Back --}}
                    <a class="fs-10 text-600 d-inline-block mt-3" href="{{ route('login') }}">
                        Back to login
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection




{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600">--}}
{{--        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--    </div>--}}

{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
