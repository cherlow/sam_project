@extends('layouts.app')

@section('content')

<div class="wrapper">
    <!-- Page Content  -->
    <div id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 auth-box">
                    <div class="proclinic-box-shadow">
                        <h2>Welcome to medically</h2>
                        <br>
                        <h3 class="widget-title">Login</h3>
                        <form class="widget-form" method="POST" action="{{ route('login') }}">
                            <!-- form-group -->
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input name="email" placeholder="email" class="form-control" required=""
                                        data-validation="email" data-validation-error-msg="enter correct email"
                                        data-validation-has-keyup-event="true" type="email">
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <!-- form-group -->
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="password" placeholder="Password" name="password" class="form-control"
                                        data-validation="strength" data-validation-strength="2"
                                        data-validation-has-keyup-event="true">
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <!-- Check Box -->
                            <div class="form-check row">
                                <div class="col-sm-12 text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="ex-check-2"
                                            name="remember">
                                        <label class="custom-control-label" for="ex-check-2">Remember Me</label>
                                    </div>
                                </div>
                            </div>
                            <!-- /Check Box -->
                            <!-- Login Button -->
                            <div class="button-btn-block">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                            <!-- /Login Button -->
                            <!-- Links -->
                            <div class="auth-footer-text">
                                <small>New User,
                                    <a href="/register">Sign Up</a> Here</small>
                            </div>
                            <!-- /Links -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content  -->
</div>

@endsection