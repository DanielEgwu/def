<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>Deftpress</title>

    <link href="{{asset('backend/../plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('backend/../plugins/morris/morris.css')}}">

    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css">


</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo"><i class="mdi mdi-radar"></i> <span>DEFTPRESS</span></a>
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">

                    <!-- <li class="list-inline-item notification-list hide-phone">
                            <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-crop-free noti-icon"></i>
                            </a>
                        </li> -->

                    <!-- <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                                <i class="mdi mdi-dots-horizontal noti-icon"></i>
                            </a>
                        </li>  -->


                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('backend/assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout"></i> <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>

                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="{{route('dashboard')}}" class="waves-effect waves-primary @if(request()->routeIs('dashboard')) active @endif"><i class="ti-home"></i><span> Dashboard </span></a>
                        </li>

                        <li>
                            <a href="{{route('profile')}}" class="waves-effect waves-primary @if(request()->routeIs('profile')) active @endif"><i class="ti-user"></i><span> Profile</span></a>
                        </li>

                        <li>
                            <a href="{{route('website')}}" class="waves-effect waves-primary"><i class="ti-world"></i><span> Website</span></a>
                        </li>

                        <li>
                            <a href="{{route('security')}}" class="waves-effect waves-primary"><i class="ti-lock"></i><span> Security</span></a>
                        </li>


                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->




       

        <div class="content-page">

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <h4 class="page-title">@yield('page-title')</h4>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
            <footer class="footer">
            ©{{ date('Y') }} <a href="petrongsoftware.com">Petrong Software Solutions</a>
            </footer>

        </div>
      



    </div>
    <!-- END wrapper -->



    <script>
        var resizefunc = [];
    </script>

    <!-- Plugins  -->
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/popper.min.js')}}"></script><!-- Popper for Bootstrap -->
    <script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/detect.js')}}"></script>
    <script src="{{asset('backend/assets/js/fastclick.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('backend/assets/js/waves.js')}}"></script>
    <script src="{{asset('backend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.scrollTo.min.js')}}"></script>
    <!-- <script src="{{asset('backend/../plugins/switchery/switchery.min.js')}}"></script> -->

    <!-- Counter   -->
    <!-- <script src="{{asset('backend/../plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('backend/../plugins/counterup/jquery.counterup.min.js')}}"></script> -->

    <!-- Page js  -->
    <script src="{{asset('backend/assets/pages/jquery.dashboard.js')}}"></script>

    <!-- Custom -->
    <script src="{{asset('backend/assets/js/jquery.core.js')}}"></script>
    <script src="{{asset('backend/assets/js/jquery.app.js')}}"></script>


    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });
    </script>

</body>

</html>


