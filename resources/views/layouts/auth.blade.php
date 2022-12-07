<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blog | @yield('page-title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/styles.css')}}">
    <script src="https://kit.fontawesome.com/f52cb7977d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center py-5" style="min-height: 100vh;">
        <div class="row">
            <div class="col-md-2"></div>
            @yield('content')
            <div class="col-md-2"></div>
        </div>
    </div>
        <!-- javascript -->
        @include('layouts.scripts')

</body>

</html>   