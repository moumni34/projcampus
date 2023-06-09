<?php $page="setting-support-view-tickets";?>
@extends('layout.mainlayout')
@section('content')	
@component('components.breadcrumb')   
@slot('title') Home @endslot
@slot('li1') Pages @endslot
@slot('li2') Ticket View @endslot 
@endcomponent
<!-- Ticket View -->
<div class="page-banner instructor-bg-blk">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btm-para-blk text-center">
                                <h2> Ticket View</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Ticket View -->	

<!--Dashbord Student -->
<div class="page-content">
    <div class="container">
        <div class="row">
            <!-- Profile Details -->
            <div class="col-md-12">
                <div class="filter-grp ticket-grp tiket-suport d-flex align-items-center justify-content-between">
                    <div>
                        <h3>Support Tickets</h3>
                    </div>
                    <div class="ticket-btn-grp">
                        <a href="javascript:;">Back to Tickets</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="settings-widget">
                    <div class="settings-inner-blk new-ticket-blk p-0">
                        <div class="comman-space-ticket bdr-bottom-line">
                            <div class="bug-software-head ">
                                <h2>Bug in software</h2>
                                <p>[Ticket#002]</p>
                            </div>
                        </div>
                        <div class="comman-space-ticket bdr-bottom-line">
                            <div class="ticket-profile">
                                <div class="course-group-img d-flex align-items-center">
                                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/user/user11.jpg')}}" alt="" class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="javascript:void(0);">Rolands R</a></h4>
                                        <p>25/02/2022 12:42:02</p>
                                    </div>
                                </div>
                                <p class="mb-0">laptop microphone not woring </p>
                            </div>
                        </div>
                        <div class="comman-space-ticket bdr-bottom-line">
                            <div class="ticket-profile">
                                <div class="course-group-img d-flex align-items-center">
                                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/user/user11.jpg')}}" alt="" class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="javascript:void(0);">Admin</a></h4>
                                        <p>25/02/2022 12:42:02</p>
                                    </div>
                                </div>
                                <p class="mb-0">laptop microphone not woring </p>
                                <p> Hi Kevin Smith,</p>
                                <ul class="admin-msg-list">
                                    <li>Thanks for taking the time to speak about Microphone issue.</li>
                                    <li>It's been [NUMBER OF DAYS] days since we've heard from you, so I wanted to let you know that we are going to close this ticket.</li>
                                    <li>Please feel free to open a new ticket if you need any further assistance.</li>
                                    <li>Thanks again for reaching out to us.</li>
                                </ul>
                                <p class="mb-0">Regards,</p>
                                <p>Admin</p>
                                <p class="mb-0">DreamsLMS Courses. Support</p>
                            </div>
                        </div>
                        <div class="comman-space-ticket ">
                            <div class="ticket-profile">
                                <div class="course-group-img d-flex align-items-center">
                                    <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/user/user11.jpg')}}" alt="" class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="javascript:void(0);">Rolands R</a></h4>
                                        <p>25/02/2022 12:42:02</p>
                                    </div>
                                </div>
                                <p class="mb-0">no, that solutions is not working if i restart it, still not able to detect the microphone while on call </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="settings-widget">
                    <div class="settings-inner-blk new-ticket-blk p-0">
                        <div class="comman-space-ticket">
                            <div class="your-replay-head ">
                                <h2>Your Reply <span class="text-danger">*</span></h2>
                                <p>You can find all of your order Invoices.</p>
                            </div>
                            <div class="form-group">
                                <div id="editor"></div>
                            </div>
                            <div class="form-group ">
                                <label class="add-course-label">Attachment</label>
                                <div class="file-drop">
                                    <form action="#" class="dropzone">
                                        <p >Drag & Drop files </p>
                                    </form>
                                </div>
                                <div class="accept-drag-file">
                                    <p>Only JPEG, JPG, PNG, BMP, GIF, PDF, CSV, XLS, and XLSX formats are allowed.</p>
                                </div>
                            </div>
                            <div class="submit-ticket">
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="settings-widget theiaStickySidebar">
                    <div class="settings-inner-blk new-ticket-blk p-0 ">
                        <div class="comman-space ">
                            <div class="ticket-view-blk bdr-bottom-line pt-0">
                                <h5>Requester</h5>
                                <div class="requested-img d-flex align-items-center">
                                    <a href="javascript:;"><img src="{{ URL::asset('/assets/img/user/user11.jpg')}}" alt="" class="img-fluid"></a>
                                    <h4><a href="javascript:;">Rolands R</a></h4>
                                </div>
                            </div>
                            <div class="ticket-view-blk bdr-bottom-line">
                                <h5>Department</h5>
                                <p>Demo Problem</p>
                            </div>
                            <div class="ticket-view-blk bdr-bottom-line">
                                <h5>Status</h5>
                                <a href="javascript:;" class="btn btn-success">Opened</a>
                            </div>
                            <div class="ticket-view-blk bdr-bottom-line">
                                <h5>Priority</h5>
                                <a href="javascript:;" class="btn btn-danger">High</a>
                            </div>
                            <div class="ticket-view-blk bdr-bottom-line">
                                <h5>Last Activity</h5>
                                <h3>04/04/2022 00:34:15</h3>
                            </div>
                            <div class="ticket-view-blk bdr-bottom-line">
                                <h5>Created</h5>
                                <h3>30/03/2022 08:46:06</h3>
                            </div>
                            <div class="ticket-close-btn">
                                <a href="javascript:;" class="btn btn-danger">Close Ticket</a>
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