@extends('layouts.auth')

@section('page-title', 'Auth')

@section('content')
<div class="col-md-8 bg-white p-0">

    <div class="text-center bg-primary p-4">
        <h2 class="p-0 m-0">Hey, Welcome</h2>
    </div>

    <div class="px-5 py-4 register d-none">
        <h3 class="pt-3 text-center">Register</h3>
        <p class="text-center">
            Create an account to get started in less than a minute
        </p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form_group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" aria-label="Password">
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

            <div class="form_group">
                <label>Liscense Key <small class="text-muted">(optional)</small> </label>
                <i data-feather="key" class="fea icon-sm icons"></i>
                <div class="input-group mb-3">
                    <input type="text" class="form-control pl-5 @error('liscense_key') is-invalid @enderror" name="liscense_key" placeholder="Liscense Key">
                    @error('liscense_key')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form_group">
                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
            </div>

            <div class="form_group text-center">
                <button type="submit" class="btn btn-primary btn bg-primary text-white px-5">Register</button>
            </div>
        </form>
    </div>

    <div class="px-5 py-4 login">
        <h3 class="pt-3 text-center">Login</h3>
        <p class="text-center"> Sign In to your Account </p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form_group">
                <label class="form-label" for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form_group">
                <label class="form-label" for="password">Password</label>
                <div class="input-group mb-3">
                    <input type="password" placeholder="Password" aria-label="Password" aria-describedby="button-addon2" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-eye" aria-hidden="true"></i></button>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="form_group text-center">
                <button type="submit" class="btn btn-primary btn bg-primary text-white px-5">Login</button>
            </div>
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </form>
    </div>
</div>

<div class="text-center pt-3">
    <span class="login">Don't have an account? <a id="signUp_link">Sign Up</a></span>
    <span class="register d-none">Do you have an account? <a id="login_link">Login</a></span>
</div>
@endsection
