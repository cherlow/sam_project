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
            <h3 class="block-title">Doctor Details
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Doctor Details </li>
            </ol>
        </div>
    </div>

    {{-- my emergency list here --}}

    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Doctor Details</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td><strong>Doctor ID</strong></td>
                                    <td>{{$user->id}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Doctor Name</strong></td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Specialisation</strong></td>
                                    <td>{{$user->specialization}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Experience</strong></td>
                                    <td>{{$user->experience}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Age </strong></td>
                                    <td>{{$user->age}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Mobile </strong></td>
                                    <td>{{$user->phone}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Gender </strong></td>
                                    <td>{{$user->gender}}</td>
                                </tr>

                                <tr>
                                    <td><strong>Details </strong></td>
                                    <td>{{$user->details}}</td>
                                </tr>



                                <tr>
                                    <td><strong>Created</strong></td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <!--Export links-->

                        <!-- /Export links-->


                    </div>
                </div>
            </div>
            <!-- /Widget Item -->
        </div>
    </div>



    {{-- my modal goes here --}}




</div>
@endsection