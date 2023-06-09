<?php $page="setting-student-privacy";?>
@extends('layout.mainlayout')
@section('content')	
<!--Dashbord Student -->
<div class="page-content">
    <div class="container">
        <div class="row">
            
            @component('components.sidebar')   
            @endcomponent
            
            <!-- Profile Privacy -->
            <div class="col-xl-9 col-md-8">	
                <div class="settings-widget profile-details">
                    <div class="settings-menu p-0">
                        <div class="profile-heading">
                            <h3>Profile Privacy Settings</h3>
                            <p>Making your profile public allow other users to see what you have been learning on Geeks.</p>
                        </div>
                        <div class="checkout-form personal-address add-course-info border-line">
                            <div class="personal-info-head">
                                <h4>Privacy levels</h4>
                                <p>Show your profile public and private.</p>
                            </div>
                            <form action="#">
                                <div class="new-address">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-0">
                                                <label  class="form-label">Privacy levels</label>
                                                <select class="form-select select country-select"  name="sellist1">
                                                    <option>Choose</option>
                                                    <option>Privacy level 1</option>
                                                    <option>Privacy level 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="checkout-form personal-address secure-alert">
                            <div class="personal-info-head">
                                <h4>Profile settings</h4>
                                <p>These controls give you the ability to customize what areas of your profile others are able to see.</p>
                            </div>
                            <div class="form-check form-switch check-on">
                                <input class="form-check-input" type="checkbox" >
                                <label class="form-check-label" >Updates from Classes You're Taking</label>
                            </div>
                            <div class="form-check form-switch check-on">
                                <input class="form-check-input" type="checkbox" >
                                <label class="form-check-label" >Updates from Teacher Discussions</label>
                            </div>
                            <div class="form-check form-switch check-on">
                                <input class="form-check-input" type="checkbox" >
                                <label class="form-check-label" >Personalized Class Recommendations</label>
                            </div>
                            <div class="form-check form-switch check-on">
                                <input class="form-check-input" type="checkbox" >
                                <label class="form-check-label" >Featured content</label>
                            </div>
                            <div class="form-check form-switch check-on">
                                <input class="form-check-input" type="checkbox" >
                                <label class="form-check-label" >Product updates</label>
                            </div>
                            <div class="form-check form-switch check-on mb-0">
                                <input class="form-check-input" type="checkbox" >
                                <label class="form-check-label" >Events and offers</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
            <!-- Profile Privacy -->
            
        </div>
    </div>
</div>	
<!-- /Dashbord Student -->
@endsection