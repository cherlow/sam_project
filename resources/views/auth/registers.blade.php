@extends('layouts.app')
@section('content')

<div class="wrapper">
    <!-- Page Content -->
    <div id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 auth-box">
                    <div class="proclinic-box-shadow">
                        <!-- Page Title -->
                        <h2>New to medically ?</h2>
                        <br>
                        <h3 class="widget-title">Sign Up</h3>
                        <!-- /Page Title -->

                        <!-- Form -->
                        <form class="widget-form" method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror --}}


                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="email" placeholder="Email" name="email" class="form-control"
                                        required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" name="user" placeholder="Username" class="form-control"
                                        required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="password" placeholder="Password" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="password" placeholder="Confirm Password" name="password_confirmation"
                                        class="form-control">
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="button-btn-block">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                            </div>
                            <!-- /Button -->
                            <!-- Linsk -->
                            <div class="auth-footer-text">
                                <small>Alredy Sign Up,
                                    <a href="/login">Login</a> Here</small>
                            </div>
                            <!-- /Links -->
                        </form>
                        <!-- /Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</div>
@endsection