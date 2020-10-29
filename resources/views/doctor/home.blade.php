@extends('layouts.doctorlayout')

@section('content')
<div id="content">
    <!-- Top Navigation -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="responsive-logo">
                <a href="index.html"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <span class="ti-menu" id="sidebarCollapse"></span>
                </li>



                <li class="nav-item">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="ti-user"></span>
                    </a>
                    <div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
                        <h5>{{ auth()->user()->name }}</h5>


                        <a class="dropdown-item" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <span class="ti-power-off"></span> Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
    <!-- /Top Navigation -->
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title">Quick Statistics</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- /Page Title -->

    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container-fluid home">


        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-4">
                <div class="widget-area proclinic-box-shadow color-red">
                    <div class="widget-left">
                        <span class="ti-user"></span>
                    </div>
                    <div class="widget-right">
                        <h4 class="wiget-title">Patients</h4>
                        <span class="numeric color-red">348</span>
                        <p class="inc-dec mb-0"><span class="ti-angle-up"></span> +20% Increased</p>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
            <!-- Widget Item -->
            <div class="col-md-4">
                <div class="widget-area proclinic-box-shadow color-green">
                    <div class="widget-left">
                        <span class="ti-bar-chart"></span>
                    </div>
                    <div class="widget-right">
                        <h4 class="wiget-title">Appointments</h4>
                        <span class="numeric color-green">1585</span>
                        <p class="inc-dec mb-0"><span class="ti-angle-down"></span> -15% Decreased</p>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
            <!-- Widget Item -->
            <div class="col-md-4">
                <div class="widget-area proclinic-box-shadow color-yellow">
                    <div class="widget-left">
                        <span class="ti-money"></span>
                    </div>
                    <div class="widget-right">
                        <h4 class="wiget-title">Total Revenue</h4>
                        <span class="numeric color-yellow">$7300</span>
                        <p class="inc-dec mb-0"><span class="ti-angle-up"></span> +10% Increased</p>
                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>







    </div>
    <!-- /Main Content -->
</div>
@endsection