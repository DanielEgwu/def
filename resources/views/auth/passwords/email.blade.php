@extends('layouts.auth')

@section('page-title', 'Reset Password')

@section('content')
    <div class="col-md-8 bg-white p-0">
        <div class="d-flex justify-content-center align-items-center bg-primary p-4">
            <h3 class="p-0 m-0">Reset Password</h3>
        </div>
        <div class="px-5 py-4">
            <h4 class="pt-3 text-center">Confirm your email and proceed</h4>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form_group">
                    <label class="form-label" for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form_group text-center">
                    <button type="submit" class="btn btn-primary">
                    Send Password Reset Link
                    </button>
                </div>
                <small class="text-warning my-3">Check your spam if you do not see the message in your inbox.</small>
            </form>
        </div>
    </div>
@endsection
