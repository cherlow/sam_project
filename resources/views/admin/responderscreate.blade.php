@extends('layouts.adminlayout')

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
            <h3 class="block-title"> Responders Create</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active"> Responders Create</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Add Responder</h3>
                    <form method="POST" action="/responders/create">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="patient-name">Name</label>
                            <input type="text" class="form-control" placeholder="name" id="patient-id" name="name" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="doctor-name">Email</label>
                            <input type="email" placeholder="email" name="email" class="form-control" id="doctor-name">
                            </div>


                            <div class="form-group col-md-6">
                                <label for="appointment-date">Mobile Number</label>
                                <input type="text" placeholder="Mobile" class="form-control" id="mobile-number" name="mobile">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="appointment-date">Specialisation</label>
                                <input type="text" placeholder="specialisation" class="form-control" id="specialisation" name="specialisation">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="problem">Details</label>
                                <textarea placeholder="details" class="form-control" id="problem" rows="3" name="details"></textarea>
                            </div>


                            <div class="form-group col-md-6 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>


                    <!-- /Alerts-->
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>
</div>
@endsection
