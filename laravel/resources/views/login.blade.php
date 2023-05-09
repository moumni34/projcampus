<?php $page="login";?>
@extends('layout.mainlayout')
@section('content')	
<div class="row">
			
@component('components.loginbanner')   
@endcomponent
    
    <div class="col-md-6 login-wrap-bg">		
    
        <!-- Login -->
        <div class="login-wrapper">
            <div class="loginbox">
                <div class="w-100">
                    <div class="img-logo">
                        <img src="{{ URL::asset('/assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
                        <div class="back-home">
                            <a href="{{url('index')}}">Back to Home</a>
                        </div>
                    </div>
                    <h1>Sign into Your Account</h1>
                    <form action="instructor-dashboard">
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email address">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input" placeholder="Enter your password">
                                <span class="feather-eye toggle-password"></span>
                            </div>
                        </div>
                        <div class="forgot">
                            <span><a class="forgot-link" href="{{url('forgot-password')}}">Forgot Password ?</a></span>
                        </div>
                        <div class="remember-me">
                            <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me  
                                <input type="checkbox" name="radio">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-start" type="submit">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="google-bg text-center">
                <span><a href="#">Or sign in with</a></span>
                <div class="sign-google">
                    <ul>
                        <li><a href="#"><img src="{{ URL::asset('/assets/img/net-icon-01.png')}}" class="img-fluid" alt="Logo"> Sign In using Google</a></li>
                        <li><a href="#"><img src="{{ URL::asset('/assets/img/net-icon-02.png')}}" class="img-fluid" alt="Logo">Sign In using Facebook</a></li>
                    </ul>
                </div>
                <p class="mb-0">New User ? <a href="{{url('register')}}">Create an Account</a></p>
            </div>
        </div>
        <!-- /Login -->
        
    </div>
    
</div>
@endsection