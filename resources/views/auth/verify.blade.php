@extends('layouts.auth')

@section('page-title', 'Verify Email')

@section('content')
<div class="col-12 col-md-8 bg-white p-0">
    <div class="d-flex justify-content-center align-items-center bg-primary p-4">
        <h3 class="p-0 m-0">Complete your Registration</h3>
    </div>
    <div class="px-5 py-4 text-center">
        <h4 class="pt-3">{{ __('Verify Your Email Address') }}</h4>

        @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
        @endif

        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <p class="mt-3">
                Before proceeding, please check your email for a verification link. If you did not receive the email
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
            </p>
        </form>

        <a class="btn btn-outline-dark px-5 my-3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
@endsection