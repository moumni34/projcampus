<?php $page="setting-support-tickets";?>
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
                <div class="settings-top-widget">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card stat-info ttl-tickets">
                                <div class="card-body">
                                    <img src="{{ URL::asset('/assets/img/students/ticket-total.svg')}}" alt="Total Tickets">
                                    <h3>50</h3>
                                    <p>Total Tickets</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card stat-info open-tickets">
                                <div class="card-body">
                                    <img src="{{ URL::asset('/assets/img/students/ticket-open.svg')}}" alt="Open Tickets">
                                    <h3>30</h3>
                                    <p>Open Tickets</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card stat-info close-tickets">
                                <div class="card-body">
                                    <img src="{{ URL::asset('/assets/img/students/ticket-close.svg')}}" alt="Close Tickets">
                                    <h3>20</h3>
                                    <p>Close Tickets</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="comman-space pb-0">
                            <div class="filter-grp ticket-grp d-flex align-items-center justify-content-between">
                                <div>
                                    <h3>Support Tickets</h3>
                                    <p>You can find all of your order Invoices.</p>
                                </div>
                                <div class="ticket-btn-grp">
                                    <a href="{{url('setting-support-new-tickets')}}">Add New Ticket</a>
                                </div>
                            </div>
                            <!-- Ticket Tab -->
                            <div class="category-tab tickets-tab-blk">
                                <ul class="nav nav-justified ">
                                    <li class="nav-item"><a href="#all" class="nav-link active" data-bs-toggle="tab" >All</a></li>
                                    <li class="nav-item"><a href="#open" class="nav-link" data-bs-toggle="tab" >Open</a></li>
                                    <li class="nav-item"><a href="#inprogress" class="nav-link" data-bs-toggle="tab" >Inprogress</a></li>
                                    <li class="nav-item"><a href="#close" class="nav-link" data-bs-toggle="tab" >Closed</a></li>
                                </ul>
                            </div>
                            <!-- /Ticket Tab -->
                            
                            <!-- Referred Ticket List -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="all">
                                    <div class="settings-tickets-blk table-responsive">

                                        <!-- Referred Users-->
                                        <table class="table table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                <th>Subject</th>
                                                <th>Priority</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#001]
                                                        </a>
                                                        <span>need a freelancer software</span>
                                                    </td>
                                                    <td><span class="badge info-high">High</span></td>
                                                    <td>Mailing Issue</td>
                                                    <td><span class="badge info-high">Closed</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#002]
                                                        </a>
                                                        <span>I have a problem</span>
                                                    </td>
                                                    <td><span class="badge info-low">Low</span></td>
                                                    <td>Language Issue</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#003]
                                                        </a>
                                                        <span>Enabling SSH service</span>
                                                    </td>
                                                    <td><span class="badge info-low">High</span></td>
                                                    <td>Installation Error</td>
                                                    <td><span class="badge info-low">Closed</span></td>
                                                </tr>
                                                    <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#004]
                                                        </a>
                                                        <span>when will start the order</span>
                                                    </td>
                                                    <td><span class="badge info-medium">Medium</span></td>
                                                    <td>Demo Problem</td>
                                                    <td><span class="badge info-high">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#005]
                                                        </a>
                                                        <span>I need blog comment backlinks from example.co.uk</span>
                                                    </td>
                                                    <td><span class="badge info-low">Low</span></td>
                                                    <td>Submit Issue</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#006]
                                                        </a>
                                                        <span>need a freelancer software</span>
                                                    </td>
                                                    <td><span class="badge info-high">High</span></td>
                                                    <td>Submit Issues</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#007]
                                                        </a>
                                                        <span>I have a problem</span>
                                                    </td>
                                                    <td><span class="badge info-low">Low</span></td>
                                                    <td>Demo Problem</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#008]
                                                        </a>
                                                        <span>Enabling SSH service</span>
                                                    </td>
                                                    <td><span class="badge info-medium">Medium</span></td>
                                                    <td>Demo Problems</td>
                                                    <td><span class="badge info-medium">Inprogress</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#009]
                                                        </a>
                                                        <span>when will start the order</span>
                                                    </td>
                                                    <td><span class="badge info-low">Low</span></td>
                                                    <td>Mailing Issue</td>
                                                    <td><span class="badge info-medium">Inprogress</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#010]
                                                        </a>
                                                        <span>I need blog comment backlinks from example.co.uk</span>
                                                    </td>
                                                    <td><span class="badge info-medium">Medium</span></td>
                                                    <td>Installation Error</td>
                                                    <td><span class="badge info-medium">Inprogress</span></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        <!-- /Referred Users-->	

                                    </div>
                                </div>
                                
                                <div class="tab-pane fade show " id="open">
                                    <div class="settings-tickets-blk table-responsive">

                                        <!-- Referred Users-->
                                        <table class="table table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                <th>Subject</th>
                                                <th>Priority</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#006]
                                                        </a>
                                                        <span>need a freelancer software</span>
                                                    </td>
                                                    <td><span class="badge info-high">High</span></td>
                                                    <td>Submit Issues</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#007]
                                                        </a>
                                                        <span>I have a problem</span>
                                                    </td>
                                                    <td><span class="badge info-low">Low</span></td>
                                                    <td>Demo Problem</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#008]
                                                        </a>
                                                        <span>Enabling SSH service</span>
                                                    </td>
                                                    <td><span class="badge info-medium">Medium</span></td>
                                                    <td>Demo Problems</td>
                                                    <td><span class="badge info-medium">Inprogress</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#009]
                                                        </a>
                                                        <span>when will start the order</span>
                                                    </td>
                                                    <td><span class="badge info-low">Low</span></td>
                                                    <td>Mailing Issue</td>
                                                    <td><span class="badge info-medium">Inprogress</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#010]
                                                        </a>
                                                        <span>I need blog comment backlinks from example.co.uk</span>
                                                    </td>
                                                    <td><span class="badge info-medium">Medium</span></td>
                                                    <td>Installation Error</td>
                                                    <td><span class="badge info-medium">Inprogress</span></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        <!-- /Referred Users-->	

                                    </div>
                                </div>
                                <div class="tab-pane fade show " id="inprogress">
                                    <div class="settings-tickets-blk table-responsive">

                                        <!-- Referred Users-->
                                        <table class="table table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                <th>Subject</th>
                                                <th>Priority</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#001]
                                                        </a>
                                                        <span>need a freelancer software</span>
                                                    </td>
                                                    <td><span class="badge info-high">High</span></td>
                                                    <td>Mailing Issue</td>
                                                    <td><span class="badge info-high">Closed</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#002]
                                                        </a>
                                                        <span>I have a problem</span>
                                                    </td>
                                                    <td><span class="badge info-low">Low</span></td>
                                                    <td>Language Issue</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#003]
                                                        </a>
                                                        <span>Enabling SSH service</span>
                                                    </td>
                                                    <td><span class="badge info-low">High</span></td>
                                                    <td>Installation Error</td>
                                                    <td><span class="badge info-low">Closed</span></td>
                                                </tr>
                                                    <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#004]
                                                        </a>
                                                        <span>when will start the order</span>
                                                    </td>
                                                    <td><span class="badge info-medium">Medium</span></td>
                                                    <td>Demo Problem</td>
                                                    <td><span class="badge info-high">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#005]
                                                        </a>
                                                        <span>I need blog comment backlinks from example.co.uk</span>
                                                    </td>
                                                    <td><span class="badge info-low">Low</span></td>
                                                    <td>Submit Issue</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#006]
                                                        </a>
                                                        <span>need a freelancer software</span>
                                                    </td>
                                                    <td><span class="badge info-high">High</span></td>
                                                    <td>Submit Issues</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#007]
                                                        </a>
                                                        <span>I have a problem</span>
                                                    </td>
                                                    <td><span class="badge info-low">Low</span></td>
                                                    <td>Demo Problem</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        <!-- /Referred Users-->	

                                    </div>
                                </div>
                                
                                <div class="tab-pane fade show " id="close">
                                    <div class="settings-tickets-blk table-responsive">

                                        <!-- Referred Users-->
                                        <table class="table table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                <th>Subject</th>
                                                <th>Priority</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#005]
                                                        </a>
                                                        <span>I need blog comment backlinks from example.co.uk</span>
                                                    </td>
                                                    <td><span class="badge info-low">Low</span></td>
                                                    <td>Submit Issue</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#006]
                                                        </a>
                                                        <span>need a freelancer software</span>
                                                    </td>
                                                    <td><span class="badge info-high">High</span></td>
                                                    <td>Submit Issues</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#007]
                                                        </a>
                                                        <span>I have a problem</span>
                                                    </td>
                                                    <td><span class="badge info-low">Low</span></td>
                                                    <td>Demo Problem</td>
                                                    <td><span class="badge info-low">Opened</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#008]
                                                        </a>
                                                        <span>Enabling SSH service</span>
                                                    </td>
                                                    <td><span class="badge info-medium">Medium</span></td>
                                                    <td>Demo Problems</td>
                                                    <td><span class="badge info-medium">Inprogress</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#009]
                                                        </a>
                                                        <span>when will start the order</span>
                                                    </td>
                                                    <td><span class="badge info-low">Low</span></td>
                                                    <td>Mailing Issue</td>
                                                    <td><span class="badge info-medium">Inprogress</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;" class="link">
                                                            [Ticket#010]
                                                        </a>
                                                        <span>I need blog comment backlinks from example.co.uk</span>
                                                    </td>
                                                    <td><span class="badge info-medium">Medium</span></td>
                                                    <td>Installation Error</td>
                                                    <td><span class="badge info-medium">Inprogress</span></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        <!-- /Referred Users-->	

                                    </div>
                                </div>
                            </div>	
                            <!-- Referred Ticket List -->									
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
