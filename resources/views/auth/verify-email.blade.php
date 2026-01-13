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

                <h5 class="mb-3">Verify your email</h5>

                <p class="fs-10 text-600">
                    Thanks for signing up! Before getting started, please verify your email address by clicking the
                    link we just emailed to you. If you didn’t receive the email, we can send another one.
                </p>

                {{-- Status Message --}}
                @if (session('status') === 'verification-link-sent')
                    <div class="alert alert-success fs-10 mt-3" role="alert">
                        A new verification link has been sent to the email address you provided.
                    </div>
                @endif

                <div class="d-flex justify-content-between align-items-center mt-4">

                    {{-- Resend Verification --}}
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button class="btn btn-primary btn-sm" type="submit">
                            Resend Verification Email
                        </button>
                    </form>

                    {{-- Logout --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-link fs-10 text-600 text-decoration-none" type="submit">
                            Log Out
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection




{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600">--}}
{{--        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}--}}
{{--    </div>--}}

{{--    @if (session('status') == 'verification-link-sent')--}}
{{--        <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--            {{ __('A new verification link has been sent to the email address you provided during registration.') }}--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <div class="mt-4 flex items-center justify-between">--}}
{{--        <form method="POST" action="{{ route('verification.send') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-primary-button>--}}
{{--                    {{ __('Resend Verification Email') }}--}}
{{--                </x-primary-button>--}}
{{--            </div>--}}
{{--        </form>--}}

{{--        <form method="POST" action="{{ route('logout') }}">--}}
{{--            @csrf--}}

{{--            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                {{ __('Log Out') }}--}}
{{--            </button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</x-guest-layout>--}}
