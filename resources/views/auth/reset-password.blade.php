@extends('layouts.auth')

@section('content')
<div class="row flex-center min-vh-100 py-6">
    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">

        {{-- Logo --}}
        <a class="d-flex flex-center mb-4" href="{{ url('/') }}">
            <img class="me-2"
                 src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}"
                 alt="falcon"
                 width="58">
            <span class="font-sans-serif text-primary fw-bolder fs-4 d-inline-block">
                falcon
            </span>
        </a>

        <div class="card">
            <div class="card-body p-4 p-sm-5">

                <h5 class="text-center mb-3">Reset new password</h5>

                <form class="mt-3" method="POST" action="{{ route('password.store') }}">
                    @csrf

                    {{-- Password Reset Token --}}
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    {{-- Email --}}
                    <div class="mb-3">
                        <input
                            class="form-control @error('email') is-invalid @enderror"
                            type="email"
                            name="email"
                            value="{{ old('email', $request->email) }}"
                            placeholder="Email address"
                            required
                            autocomplete="username"
                        >
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    {{-- New Password --}}
                    <div class="mb-3">
                        <input
                            class="form-control @error('password') is-invalid @enderror"
                            type="password"
                            name="password"
                            placeholder="New Password"
                            required
                            autocomplete="new-password"
                        >
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    {{-- Confirm Password --}}
                    <div class="mb-3">
                        <input
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirm Password"
                            required
                            autocomplete="new-password"
                        >
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit">
                        Set password
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection





{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('password.store') }}">--}}
{{--        @csrf--}}

{{--        <!-- Password Reset Token -->--}}
{{--        <input type="hidden" name="token" value="{{ $request->route('token') }}">--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}
{{--            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Reset Password') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
