@extends('layouts.userlayout')

@section('content')
<div id="content">
    <!-- Top Navigation -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="responsive-logo">
                <a href="#"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
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
            <h3 class="block-title">Appointment Details
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Appointment Details </li>
            </ol>
        </div>
    </div>

    {{-- my emergency list here --}}

    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Appointment Details</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td><strong>Appointment ID</strong></td>
                                    <td>{{$appointment->id}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Patient Name</strong></td>
                                    <td>{{$appointment->user->name}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Date</strong></td>
                                    <td>{{$appointment->date}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Session </strong></td>
                                    <td>{{$appointment->time_slot}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Status </strong></td>
                                    <td>
                                        @if ($appointment->status==0)
                                        <span class="badge badge-warning">Pending</span>
                                        @else
                                        <span class="badge badge-success">Completed</span>
                                        @endif

                                    </td>
                                </tr>


                                <tr>
                                    <td><strong>Doctor </strong></td>
                                    <td>

                                        {{$appointment->doctor->name}}
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Details </strong></td>
                                    <td>

                                        {{$appointment->details}}

                                    </td>
                                </tr>

                                <tr>
                                    <td><strong>Doctor Notes </strong></td>
                                    <td>

                                        {{$appointment->notes}}

                                    </td>
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
                    <form action="/addnotes/{{$appointment->id}}" method="POST">
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