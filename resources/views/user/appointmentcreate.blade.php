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
            <h3 class="block-title"> Appointment Create</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active"> Appointment Create</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <!-- Widget Item -->
            <div class="col-md-12">
                <div class="widget-area-2 proclinic-box-shadow">
                    <h3 class="widget-title">Add Appointment</h3>
                    <form method="POST" action="/appointment/create">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="patient-name">User ID</label>
                            <input type="text" class="form-control" value="{{auth()->user()->id}}" id="patient-id" name="user_id" readonly>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="doctor-name">User Name</label>
                            <input type="text" value="{{auth()->user()->name}}" name="user_name" class="form-control" id="doctor-name" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="department">Doctor</label>
                                <select class="form-control" id="department" name="doctor">

                                    @foreach ($doctors as $doctor)
                                <option value="{{$doctor->id}}">{{$doctor->name}}</option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="appointment-date">Appointment Date</label>
                                <input type="date" placeholder="Appointment Date" class="form-control" id="appointment-date" name="date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="time-slot">Time Slot</label>
                                <select class="form-control" id="time-slot" name="time_slot">
                                    <option value="10AM-11AM">10AM-11AM</option>
                                    <option value="11AM-12pm">11AM-12pm</option>
                                    <option value="12PM-01PM">12PM-01PM</option>
                                    <option value="2PM-3PM">2PM-3PM</option>
                                    <option value="3PM-4PM">3PM-4PM</option>
                                    <option value="4PM-5PM">4PM-5PM</option>
                                    <option value="6PM-7PM">6PM-7PM</option>
                                    <option value="7PM-8PM">7PM-8PM</option>
                                    <option value="8PM-9PM">8PM-9PM</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="problem">Problem</label>
                                <textarea placeholder="Problem" class="form-control" id="problem" rows="3" name="details"></textarea>
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
