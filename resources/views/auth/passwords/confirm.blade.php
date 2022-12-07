@extends('layouts.auth')

@section('page-title', 'Confirm Password')

@section('content')
    <div class="col-12 col-md-8 bg-white p-0">
        <div class="d-flex justify-content-center align-items-center bg-primary p-4">
            <h2 class="p-0 m-0">Welcome</h2>
        </div>
        <div class="px-5 py-4">
            <h3 class="pt-3 text-center">{{ __('Confirm Password') }}</h3>
            <p class="text-center">
            {{ __('Please confirm your password before continuing.') }}
            </p>
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
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

                <div class="form_group text-center">
                    <button  type="submit" class="btn btn-primary btn bg-primary text-white px-5">{{ __('Confirm Password') }}</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
