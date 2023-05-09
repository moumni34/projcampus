<?php $page="instructor-linked-account";?>
@extends('layout.mainlayout')
@section('content')	
<!--Dashbord Student -->
<div class="page-content">
    <div class="container">
        <div class="row">
            
            @component('components.sidebar')   
            @endcomponent
            
            <!-- Linked Accounts -->
            <div class="col-xl-9 col-md-8">	
                <div class="settings-widget profile-details">
                    <div class="settings-menu p-0">
                        <div class="profile-heading">
                            <h3>Linked Accounts</h3>
                            <p>Delete or Close your account permanently.</p>
                        </div>
                        <div class="link-accounts personal-form">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="world-img">
                                        <img src="{{ URL::asset('/assets/img/net-icon-02.png')}}" class="img-fluid" alt="Logo">
                                    </div>
                                </div>
                                <div class="col-lg-11">
                                    <div class="google-account">
                                        <div class="account-list">
                                            <h4>Facebook</h4>
                                            <p class="mb-0">Enable one-click login and receive more personalized course recommendations.</p>
                                        </div>
                                        <div class="account-link">
                                            <a href="javascript:void(0);" class="btn btn-primary">Remove your facebook Account</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="world-img">
                                        <img src="{{ URL::asset('/assets/img/net-icon-01.png')}}" class="img-fluid" alt="Logo">
                                    </div>
                                </div>
                                <div class="col-lg-11">
                                    <div class="google-account">
                                        <div class="account-list">
                                            <h4>Sign In using Google</h4>
                                            <p class="mb-0">Enable one-click login and receive more personalized course recommendations.</p>
                                        </div>
                                        <div class="google-link">
                                            <a href="javascript:void(0);" class="btn btn-primary">Link my google Account</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="world-img">
                                        <img src="{{ URL::asset('/assets/img/net-icon-03.png')}}" class="img-fluid" alt="Logo">
                                    </div>
                                </div>
                                <div class="col-lg-11">
                                    <div class="google-account">
                                        <div class="account-list">
                                            <h4>Github</h4>
                                            <p class="mb-0">Enable one-click login and receive more personalized course recommendations.</p>
                                        </div>
                                        <div class="google-link">
                                            <a href="javascript:void(0);" class="btn btn-primary">Link my google Account</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="world-img">
                                        <img src="{{ URL::asset('/assets/img/net-icon-04.png')}}" class="img-fluid" alt="Logo">
                                    </div>
                                </div>
                                <div class="col-lg-11">
                                    <div class="google-account mb-0">
                                        <div class="account-list">
                                            <h4>Twitter</h4>
                                            <p class="mb-0">Enable one-click login and receive more personalized course recommendations.</p>
                                        </div>
                                        <div class="google-link">
                                            <a href="javascript:void(0);" class="btn btn-primary">Link my google Account</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
            <!-- Linked Accounts -->
            
        </div>
    </div>
</div>	
<!-- /Dashbord Student -->
@endsection