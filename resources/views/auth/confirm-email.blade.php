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
                <div class="text-center">

                    {{-- Illustration --}}
                    <img
                        class="d-block mx-auto mb-4"
                        src="{{ asset('assets/img/icons/spot-illustrations/16.png') }}"
                        alt="Email sent"
                        width="100"
                    >

                    <h4 class="mb-2">Please check your email!</h4>

                    <p class="text-600">
                        An email has been sent to
                        <strong>{{ $email ?? 'your email address' }}</strong>.
                        Please click on the included link to complete the process.
                    </p>

                    {{-- Back to Login --}}
                    <a class="btn btn-primary btn-sm mt-3" href="{{ route('login') }}">
                        <span class="fas fa-chevron-left me-1" data-fa-transform="shrink-4 down-1"></span>
                        Return to login
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
