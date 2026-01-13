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
            <span class="font-sans-serif text-primary fw-bolder fs-4 d-inline-block">
                falcon
            </span>
        </a>

        <div class="card">
            <div class="card-body p-4 p-sm-5">

                <h5 class="mb-2">Confirm Password</h5>
                <p class="fs-10 text-600 mb-4">
                    This is a secure area of the application. Please confirm your password before continuing.
                </p>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    {{-- Password --}}
                    <div class="mb-3 text-start">
                        <input
                            id="password"
                            type="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password"
                            required
                            autocomplete="current-password"
                        >

                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit">
                        Confirm
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection




{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600">--}}
{{--        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}--}}
{{--    </div>--}}

{{--    <form method="POST" action="{{ route('password.confirm') }}">--}}
{{--        @csrf--}}

{{--        <!-- Password -->--}}
{{--        <div>--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Confirm') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
