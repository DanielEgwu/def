<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>


    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('login/assets/images/favicon.png')}}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{asset('login/assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('login/assets/plugins/animation/css/animate.min.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('login/assets/css/style.css')}}">

</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content container">
            <div class="card">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <form action="{{route('register')}}" method="post">
                            @csrf
                        <div class="card-body">
                            <h4 class="mb-3 f-w-400">Register your account</h4>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-user"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-mail"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="Email address">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                </div>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                            </div>
                            <button class="btn btn-primary shadow-2 mb-4" type="submit">Register</button>
                            <p class="mb-2">Already have an account? <a href="{{route('login')}}" class="f-w-400">Log in</a></p>
                        </div>
                    </div>
                </form>
                    <div class="col-md-6 d-none d-md-block">
                        <img src="{{asset('login/assets/images/features-3.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Required Js -->
    <script src="{{asset('login/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('login/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('login/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
