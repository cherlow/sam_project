@extends('layouts.userlayout')

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
            <h3 class="block-title"> Doctors</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Doctors</li>
                <li class="breadcrumb-item active"> Doctors</li>
            </ol>
        </div>
    </div>
    <!-- /Page Title -->

    <!-- /Breadcrumb -->
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Doctors List</h3>
                    <div class="table-responsive mb-3">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="no-sort">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="select-all">
                                            <label class="custom-control-label" for="select-all"></label>
                                        </div>
                                    </th>
                                    <th>Doctor ID</th>
                                    <th>Doctor Name</th>
                                    <th>Experience <small>(in Years)</small></th>
                                    <th>Phone</th>
                                    <th>Specialization</th>
                                    <th>Action</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>






                                @foreach ($doctors as $doctor)

                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="7">
                                            <label class="custom-control-label" for="7"></label>
                                        </div>
                                    </td>
                                    <td>{{$doctor->id}}</td>
                                    <td>{{$doctor->name}}</td>
                                    <td>{{$doctor->experience}}</td>
                                    <td>{{$doctor->phone}}</td>
                                    <td>{{$doctor->specialization}}</td>
                                    <td>
                                        <a href="/user/appointments" class="btn btn-success"> Make an Appointment</a>
                                    </td>
                                    <td>
                                        <a href="/user/messages/{{ $doctor->id }}" class="btn btn-success">Send A
                                            Message</a>
                                    </td>
                                </tr>
                                @endforeach


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
    <!-- /Main Content -->
</div>
@endsection