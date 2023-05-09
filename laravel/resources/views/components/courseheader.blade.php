@if(!Route::is(['deposit-student-dashboard','deposit-student','instructor-chat','transactions-student']))
<!-- Course Header -->
<div class="course-student-header">
    <div class="container">
        <div class="student-group">
            <div class="course-group ">
                <div class="course-group-img d-flex">
                    <a href="{{url('student-profile')}}"><img src="{{ URL::asset('/assets/img/user/user11.jpg')}}" alt="" class="img-fluid"></a>
                    <div class="d-flex align-items-center">
                        <div class="course-name">
                            <h4><a href="{{url('student-profile')}}">Rolands R</a><span>Beginner</span></h4>
                            <p>Student</p>
                        </div>
                    </div>
                </div>
                <div class="course-share ">
                    <a href="javascript:;" class="btn btn-primary">Account Settings</a>
                </div>
            </div>
        </div>
        <div class="my-student-list">
            <ul>
                <li><a class="{{ Request::is('course-student') ? 'active' : '' }}" href="{{url('course-student')}}">Courses</a></li>
                <li><a class="{{ Request::is('course-wishlist') ? 'active' : '' }}" href="{{url('course-wishlist')}}">Wishlists</a></li>
                <li><a class="{{ Request::is('course-message') ? 'active' : '' }}" href="{{url('course-message')}}">Messages</a></li>
                <li class="mb-0"><a class="{{ Request::is('purchase-history') ? 'active' : '' }}" href="{{url('purchase-history')}}">Purchase history</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /Course Header -->
@endif
@if(Route::is(['deposit-student-dashboard','deposit-student','transactions-student']))
<!-- Student Header -->
<div class="course-student-header">
    <div class="container">
        <div class="student-group">
            <div class="course-group ">
                <div class="course-group-img d-flex">
                    <a href="{{url('student-profile')}}"><img src="{{ URL::asset('/assets/img/user/user11.jpg')}}" alt="" class="img-fluid"></a>
                    <div class="d-flex align-items-center">
                        <div class="course-name">
                            <h4><a href="{{url('student-profile')}}">Rolands R</a><span>Beginner</span></h4>
                            <p>Student</p>
                        </div>
                    </div>
                </div>
                <div class="course-share ">
                    <a href="javascript:;" class="btn btn-primary">Account Settings</a>
                </div>
            </div>
        </div>
        <div class="my-student-list">
            <ul>
                <li><a class="{{ Request::is('deposit-student-dashboard') ? 'active' : '' }}" href="{{url('deposit-student-dashboard')}}">Dashboard</a></li>
                <li><a class="{{ Request::is('course-student') ? 'active' : '' }}" href="{{url('course-student')}}">Courses</a></li>
                <li><a class="{{ Request::is('course-wishlist') ? 'active' : '' }}" href="{{url('course-wishlist')}}">Wishlists</a></li>
                <li><a class="{{ Request::is('course-message') ? 'active' : '' }}" href="{{url('course-message')}}">Messages</a></li>
                <li><a class="{{ Request::is('purchase-history') ? 'active' : '' }}" href="{{url('purchase-history')}}">Purchase history</a></li>
                <li><a class="{{ Request::is('deposit-student') ? 'active' : '' }}" href="{{url('deposit-student')}}">Deposit</a></li>
                <li class="mb-0"><a class=" {{ Request::is('transactions-student') ? 'active' : '' }}" href="{{url('transactions-student')}}">Transactions</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /Student Header -->
@endif
@if(Route::is(['instructor-chat']))
<!-- Course Header -->
<div class="page-banner instructor-bg-blk">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="instructor-profile d-flex align-items-center mb-0">
                    <div class="instructor-profile-pic">
                        <a href="{{url('instructor-profile')}}">
                            <img src="{{ URL::asset('/assets/img/instructor/profile-avatar.jpg')}}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="instructor-profile-content">
                        <h4><a href="{{url('instructor-profile')}}">Jenny Wilson <span>Beginner</span></a></h4>
                        <p>Instructor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Course Header -->
@endif