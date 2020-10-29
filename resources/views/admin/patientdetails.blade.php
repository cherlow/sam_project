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
            <h3 class="block-title">Patient Details
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Patient Details </li>
            </ol>
        </div>
    </div>

    {{-- my emergency list here --}}


    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-6">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Patient Details</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong>Patient Id</strong> </td>
                                    <td>{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Name</strong></td>
                                    <td>{{ $user->name }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Email</strong></td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Emergency Requests</strong></td>
                                    <td>
                                        {{ count($user->emergencies) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Appointments </strong></td>
                                    <td>{{ count($user->appointments) }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    <!-- /Export links-->

                </div>
            </div>
            <!-- /Widget Item -->
            <!-- Widget Item -->
            <div class="col-md-6">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Patient Visits</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Doctor Name</th>

                                    <th>Visit Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>



                                @foreach ($user->appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->doctor->name }}</td>
                                    <td>{{ $appointment->date }}</td>
                                    <td>
                                        @if ($appointment->status==0)
                                        <span class="badge badge-warning">Pending</span>
                                        @else
                                        <span class="badge badge-success">Completed</span>
                                        @endif

                                    </td>
                                    <td><a href="/admin/appointments/{{ $appointment->id }}"
                                            class="btn btn-success">view</a></td>
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
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Patient Emergency Requests</h3>
                    <div class="table-responsive">
                        <table id="tableId" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="no-sort">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="select-all">
                                            <label class="custom-control-label" for="select-all"></label>
                                        </div>
                                    </th>
                                    <th>Emergency ID</th>
                                    <th>Patient Name</th>
                                    <th>Mobile</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Created At</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>



                                @foreach ($user->emergencies as $emergency)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="12">
                                            <label class="custom-control-label" for="12"></label>
                                        </div>
                                    </td>
                                    <td>{{$emergency->id}}</td>
                                    <td>{{$emergency->user->name}}</td>
                                    <td>{{$emergency->mobile}}</td>
                                    <td>{{$emergency->location}}</td>
                                    <td>
                                        @if ($emergency->status==0)
                                        <span class="badge badge-warning">Pending</span>

                                        @else
                                        <span class="badge badge-success">Completed</span>

                                        @endif

                                    </td>

                                    <td>{{$emergency->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="/admin/emergency/{{ $emergency->id }}" class="btn btn-success">View</a>
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

    {{-- my modal goes here --}}


    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Doctor Notes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/addnotes/" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Doctor Notes</label>

                            <textarea class="form-control" id="exampleFormControlSelect1" rows="5"
                                name="notes"></textarea>

                        </div>

                        <button type="submit" class="btn btn-success"> submit</button>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
        <!-- /.col-sm-9 -->
    </div>

</div>
@endsection