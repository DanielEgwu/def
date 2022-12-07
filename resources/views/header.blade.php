    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{route('home')}}" class="logo d-flex align-items-center">
                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="">
                <span>FlexStart</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                        <li><a class="getstarted scrollto" href="{{ route('login') }}">Login / Register</a></li>

                </ul>
                {{-- @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link scrollto" href="#">Profile</a></li>
                      <li><a class="nav-link scrollto" href="#">Settings</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="nav-link scrollto" href="{{route('login')}}">Logout</a></li>
                    </ul>
                  </li>
                @endauth --}}
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header><!-- End Header -->
