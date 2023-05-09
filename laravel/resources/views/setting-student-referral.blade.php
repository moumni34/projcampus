<?php $page="setting-student-referral";?>
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
                        <div class="col-xl-3 col-lg-6">
                            <div class="card stat-info net-earn">
                                <div class="card-body">
                                    <span>Net Earnings</span>
                                    <h3>$ 63,240</h3>
                                    <p>Earning this month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card stat-info bal">
                                <div class="card-body">
                                    <span>Balance</span>
                                    <h3>$ 8,530</h3>
                                    <p>Earning this month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card stat-info avg">
                                <div class="card-body">
                                    <span>Avg Deal Size</span>
                                    <h3>$ 2,600</h3>
                                    <p>Earning this month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card stat-info refer">
                                <div class="card-body">
                                    <span>Referral Signups</span>
                                    <h3>$ 783</h3>
                                    <p>Earning this month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 d-flex">
                            <div class="card link-box flex-fill">
                                <div class="card-body">
                                    <h3>Your Referral Link</h3>
                                    <p>Plan your blog post by choosing a topic, creating an outline conduct research, and checking facts</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="https://dreamslmscourse.com/reffer/?refid=345re667877k9">
                                    </div>
                                    <a href="javascript:;">Copy link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 d-flex">
                            <div class="card withdraw-box flex-fill">
                                <div class="card-body">
                                    <div class="widra-your-money d-flex align-items-end justify-content-between">
                                        <div>
                                            <h4>Withdraw Your Money to a Bank Account</h4>
                                            <p>Withdraw money securily to your bank account. Commision is $25 per transaction under $50,000</p>
                                            <div class="hvr-sweep-to-right">
                                                <a href="javascript:;">Withdraw Money</a>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="{{ URL::asset('/assets/img/bank-image.png')}}" alt="Withdraw money">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="settings-widget">
                    <div class="settings-inner-blk p-0">
                        <div class="comman-space pb-0">
                            <div class="filter-grp user-referred table-select-blk d-flex align-items-center justify-content-between">
                                <h3>Referred Users</h3>
                                <div class="filter-blk d-flex">
                                    <div class="form-group select-form mb-0">
                                        <select class="form-select select" id="datefilter" name="datefilterby">
                                            <option>Month</option>
                                            <option>Daily</option>
                                            <option>Week</option>
                                        </select>
                                    </div>
                                    <div class="form-group select-form mb-0">
                                        <select class="form-select select" id="filterpicker" name="filterpickerby">
                                            <option>Oct 2020</option>
                                            <option>Jan 2020</option>
                                            <option>Feb 2020</option>
                                            <option>Mar 2020</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-referral-blk table-responsive">

                                <!-- Referred Users-->
                                <table class="table table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                        <th>Referrals</th>
                                        <th>Referred ID</th>
                                        <th>URL</th>
                                        <th>&nbsp;</th>
                                        <th class="text-center">Visits</th>
                                        <th class="text-end">Total earned</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="{{url('student-profile')}}" class="refer-avatar-blk d-flex align-items-center">
                                                    <img src="{{ URL::asset('/assets/img/students/refer-img1.png')}}" class="rounded-circle me-2" alt="Referred User Info">
                                                    <p>Guy Hawkins</p>
                                                </a>
                                            </td>
                                            <td>09341</td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td><a href="javascript:;" class="btn-style"><i class="feather-clipboard"></i></a></td>
                                            <td class="text-center">10</td>
                                            <td class="text-end">$45.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('student-profile')}}" class="refer-avatar-blk d-flex align-items-center">
                                                    <img src="{{ URL::asset('/assets/img/students/refer-img2.png')}}" class="rounded-circle me-2" alt="Referred User Info">
                                                    <p>Dianna Smiley</p>
                                                </a>
                                            </td>
                                            <td>09342</td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td><a href="javascript:;" class="btn-style"><i class="feather-clipboard"></i></a></td>
                                            <td class="text-center">15</td>
                                            <td class="text-end">$75.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('student-profile')}}" class="refer-avatar-blk d-flex align-items-center">
                                                    <img src="{{ URL::asset('/assets/img/students/refer-img3.png')}}" class="rounded-circle me-2" alt="Referred User Info">
                                                    <p>Guy Hawkins</p>
                                                </a>
                                            </td>
                                            <td>09343</td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td><a href="javascript:;" class="btn-style"><i class="feather-clipboard"></i></a></td>
                                            <td class="text-center">20</td>
                                            <td class="text-end">$100.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('student-profile')}}" class="refer-avatar-blk d-flex align-items-center">
                                                    <img src="{{ URL::asset('/assets/img/students/refer-img4.png')}}" class="rounded-circle me-2" alt="Referred User Info">
                                                    <p>Jacob Jones</p>
                                                </a>
                                            </td>
                                            <td>09344</td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td><a href="javascript:;" class="btn-style"><i class="feather-clipboard"></i></a></td>
                                            <td class="text-center">1</td>
                                            <td class="text-end">$44.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('student-profile')}}" class="refer-avatar-blk d-flex align-items-center">
                                                    <img src="{{ URL::asset('/assets/img/students/refer-img5.png')}}" class="rounded-circle me-2" alt="Referred User Info">
                                                    <p>Kristin Watson</p>
                                                </a>
                                            </td>
                                            <td>09345</td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td><a href="javascript:;" class="btn-style"><i class="feather-clipboard"></i></a></td>
                                            <td class="text-center">5</td>
                                            <td class="text-end">$25.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('student-profile')}}" class="refer-avatar-blk d-flex align-items-center">
                                                    <img src="{{ URL::asset('/assets/img/students/refer-img6.png')}}" class="rounded-circle me-2" alt="Referred User Info">
                                                    <p>Rivao Luke</p>
                                                </a>
                                            </td>
                                            <td>09346</td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td><a href="javascript:;" class="btn-style"><i class="feather-clipboard"></i></a></td>
                                            <td class="text-center">500</td>
                                            <td class="text-end">$160.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('student-profile')}}" class="refer-avatar-blk d-flex align-items-center">
                                                    <img src="{{ URL::asset('/assets/img/students/refer-img7.png')}}" class="rounded-circle me-2" alt="Referred User Info">
                                                    <p>Nia Sikhone</p>
                                                </a>
                                            </td>
                                            <td>09347</td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td><a href="javascript:;" class="btn-style"><i class="feather-clipboard"></i></a></td>
                                            <td class="text-center">187</td>
                                            <td class="text-end">$150.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('student-profile')}}" class="refer-avatar-blk d-flex align-items-center">
                                                    <img src="{{ URL::asset('/assets/img/students/refer-img8.png')}}" class="rounded-circle me-2" alt="Referred User Info">
                                                    <p>Xiaon Merry</p>
                                                </a>
                                            </td>
                                            <td>09348</td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td><a href="javascript:;" class="btn-style"><i class="feather-clipboard"></i></a></td>
                                            <td class="text-center">10</td>
                                            <td class="text-end">$45.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('student-profile')}}" class="refer-avatar-blk d-flex align-items-center">
                                                    <img src="{{ URL::asset('/assets/img/students/refer-img9.png')}}" class="rounded-circle me-2" alt="Referred User Info">
                                                    <p>Guy Hawkins</p>
                                                </a>
                                            </td>
                                            <td>09349</td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td><a href="javascript:;" class="btn-style"><i class="feather-clipboard"></i></a></td>
                                            <td class="text-center">15</td>
                                            <td class="text-end">$10.00</td>
                                        </tr>
                                        <tr >
                                            <td>
                                                <a href="{{url('student-profile')}}" class="refer-avatar-blk d-flex align-items-center">
                                                    <img src="{{ URL::asset('/assets/img/students/refer-img10.png')}}" class="rounded-circle me-2" alt="Referred User Info">
                                                    <p>Dianna Smiley</p>
                                                </a>
                                            </td>
                                            <td>09350</td>
                                            <td><span class="text-wrap">https://dreamslmscourse.com/reffer/?refid=345re667877k9</span></td>
                                            <td><a href="javascript:;" class="btn-style"><i class="feather-clipboard"></i></a></td>
                                            <td class="text-center">98</td>
                                            <td class="text-end">$10.00</td>
                                        </tr>
                                    </tbody>
                                    </table>
                                <!-- /Referred Users-->	

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