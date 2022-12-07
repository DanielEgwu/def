@extends('layouts.auth')

@section('page-title', 'Reset Password')

@section('content')
    <div class="col-12 col-md-8 bg-white p-0">
        <div class="d-flex justify-content-center align-items-center bg-primary p-4">
            <h2 class="p-0 m-0">Reset Password</h2>
        </div>
        <div class="px-5 py-4">
            <h3 class="pt-3 text-center">{{ __('Fill the form below to reset your password') }}</h3>
           
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form_group">
                    <label class="form-label" for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form_group">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" aria-label="Password" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-eye" aria-hidden="true"></i></button>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form_group">
                    <div class="input-field">
                        <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                
                <div class="form_group text-center">
                    <button  type="submit" class="btn btn-primary btn bg-primary text-white px-5">{{ __('Reset Password') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
