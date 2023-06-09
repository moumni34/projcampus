<?php $page="setting-student-billing";?>
@extends('layout.mainlayout')
@section('content')	
<!--Dashbord Student -->
<div class="page-content">
    <div class="container">
        <div class="row">
            
            @component('components.sidebar')   
            @endcomponent
            
            <!-- Profile Details -->
            <div class="col-xl-9 col-md-8">	
                <div class="settings-widget profile-details">
                    <div class="settings-menu p-0">
                        <div class="profile-heading">
                            <h3>Billing Address</h3>
                            <p>Changes to your billing infomration will take effect starting with scheduled payment and will be refelected on your next invoice.</p>
                        </div>
                        <div class="address-check-widget comman-space">
                            <div class="check-bill-address">
                                <div class="add-new-address grad-border hvr-sweep-to-right">
                                    <a href="javascript:;" class="btn btn-primary">Add New Address</a>
                                </div>
                                <div class="edit-new-address wallet-method wallet-radio-blk d-flex align-items-center">
                                    <label class="radio-inline custom_radio me-4">
                                        <input type="radio" name="optradio" checked="">
                                        <span class="checkmark"></span> 1901 Thornridge Cir. Shiloh, Hawaii 81063
                                    </label>
                                    <div class="address-edits">
                                        <a href="javascript:;" class="edit-btn-blk "><i class="feather-edit"></i></a>
                                    </div>
                                </div>
                                <div class="edit-new-address wallet-method wallet-radio-blk d-flex align-items-center mb-0">
                                    <label class="radio-inline custom_radio me-4">
                                        <input type="radio" name="optradio" >
                                        <span class="checkmark"></span> 1800 Thomas Cir. France 61063
                                    </label>
                                    <div class="address-edits">
                                        <a href="javascript:;" class="edit-btn-blk"><i class="feather-edit"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
            <!-- Profile Details -->
            
        </div>
    </div>
</div>	
<!-- /Dashbord Student -->
@endsection