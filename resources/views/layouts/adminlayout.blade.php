<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 27 Oct 2020 18:09:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Medically</title>
    <!-- Fav  Icon Link -->
    <link rel="shortcut icon" type="image/png" href="/images/fav.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- themify icons CSS -->
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!-- Animations CSS -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/red.css" id="style_theme">
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- morris charts -->
    <link rel="stylesheet" href="/charts/css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/css/jquery-jvectormap.css">

    <script src="/js/modernizr.min.js"></script>
</head>

<body>
    <!-- Pre Loader -->
    <div class="loading">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--/Pre Loader -->
    <!-- Color Changer -->

    <!-- /Color Changer -->
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="proclinic-bg">
            <div class="sidebar-header">

                <a href="index.html">
                    <h2>Medically</h2>
                </a>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="/home">
                        <span class="ti-home"></span> Dashboard
                    </a>

                </li>

                <li class="">
                    <a href="/admin/patients">
                        <span class="ti-wheelchair"></span> Patients
                    </a>

                </li>

                <li>
                    <a href="#nav-icons" data-toggle="collapse" aria-expanded="false">
                        <span class="ti-user"></span> Doctors
                    </a>

                    <ul class="collapse list-unstyled" id="nav-icons">
                        <li>
                            <a href="/admin/doctors">All Doctors </a>
                        </li>
                        <li>
                            <a href="/doctors/create">New Doctor</a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="/admin/appointments">
                        <span class="ti-pencil-alt"></span> Appointments
                    </a>



                </li>

                <li>
                    <a href="/admin/emergency">
                        <span class="ti-truck"></span> Emergency
                    </a>


                </li>

                <li>
                    <a href="#nav-emer" data-toggle="collapse" aria-expanded="false">
                        <span class="ti-truck"></span> Emergency Responders
                    </a>

                    <ul class="collapse list-unstyled" id="nav-emer">
                        <li>
                            <a href="/responders/index">All Responders </a>
                        </li>
                        <li>
                            <a href="/admin/responders">New Responder</a>
                        </li>
                    </ul>

                </li>












            </ul>
            <div class="nav-help animated fadeIn">
                <h5><span class="ti-comments"></span> Need Help</h5>
                <h6>
                    <span class="ti-mobile"></span> +1 1234 567 890</h6>
                <h6>
                    <span class="ti-email"></span> info@medically.com</h6>
                <p class="copyright-text">Copy rights &copy; {{ date("Y") }}</p>
            </div>
        </nav>
        <!-- /Sidebar -->

        @yield('content')



    </div>
    <!-- Back to Top -->
    <a id="back-to-top" href="#" class="back-to-top">
        <span class="ti-angle-up"></span>
    </a>
    <!-- /Back to Top -->

    <!-- Jquery Library-->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <!-- Popper Library-->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap Library-->
    <script src="/js/bootstrap.min.js"></script>
    <!-- morris charts -->
    <script src="/charts/js/raphael-min.js"></script>
    <script src="/charts/js/morris.min.js"></script>
    <script src="/js/custom-morris.js"></script>

    <!-- Custom Script-->
    <script src="/js/custom.js"></script>
</body>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 27 Oct 2020 18:11:34 GMT -->

</html>