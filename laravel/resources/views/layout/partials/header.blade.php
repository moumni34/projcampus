<!-- Header -->
@if(!Route::is(['index']))
<header class="header header-page">
@endif
@if(Route::is(['index']))
<header class="header">
@endif
    <div class="header-fixed">
        <nav class="navbar navbar-expand-lg header-nav scroll-sticky">
            @if(!Route::is(['cart','checkout','course-details','course-details1','course-details2','course-grid','course-list','course-wishlist','course-message','course-student',
            'purchase-history','dashboard-instructor','deposit-instructor-dashboard','deposit-instructor','deposit-student-dashboard',
            'deposit-student','faq','help-center','instructor-edit','instructor-grid','instructor-list','instructor-profile','job-category',
            'notifications','pricing-plan-2','pricing-plan','privacy-policy','setting-support-view-tickets','student-profile','students-grid',
            'students-grid2','students-list','support','instructor-grid-2','term-condition','transactions-instructor','transactions-student','wishlist','withdrawal-instructor']))
            <div class="container">
            @endif
            @if(Route::is(['cart','checkout','course-details','course-details1','course-details2','course-grid','course-list','course-wishlist','course-message','course-student',
            'purchase-history','dashboard-instructor','deposit-instructor-dashboard','deposit-instructor','deposit-student-dashboard',
            'deposit-student','faq','help-center','instructor-edit','instructor-grid','instructor-list','instructor-profile','job-category',
            'notifications','pricing-plan-2','pricing-plan','privacy-policy','setting-support-view-tickets','student-profile','students-grid',
            'students-grid2','students-list','support','instructor-grid-2','term-condition','transactions-instructor','transactions-student','wishlist','withdrawal-instructor']))    
            <div class="container header-border">   
            @endif 
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{url('index')}}" class="navbar-brand logo">
                        <img src="{{ URL::asset('/assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{url('index')}}" class="menu-logo">
                            <img src="{{ URL::asset('/assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="{{ Request::is('index') ? 'active' : '' }}">
                            <a href="{{url('index')}}">Home</a>
                        </li>
                        <li class="has-submenu {{ Request::is('instructor-dashboard','withdrawal-instructor','transactions-instructor','instructor-student-grid','instructor-student-list','instructor-new-tickets','instructor-chat','instructor-edit','instructor-grid-2','deposit-instructor-dashboard','deposit-instructor','dashboard-instructor','instructor-list','instructor-grid','instructor-course','instructor-reviews',
                            'instructor-earnings','instructor-orders','instructor-payouts','instructor-tickets','instructor-edit-profile','instructor-security',
                            'instructor-social-profiles','instructor-profile','instructor-notification','instructor-profile-privacy','instructor-delete-profile','instructor-linked-account') ? 'active' : '' }}">
                            <a href="">Instructor <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="{{ Request::is('instructor-dashboard','dashboard-instructor','deposit-instructor-dashboard') ? 'active' : '' }}"><a href="{{url('instructor-dashboard')}}">Dashboard</a></li>
                                <li class="has-submenu {{ Request::is('instructor-list','instructor-grid','instructor-grid-2') ? 'active' : '' }}">
                                    <a href="{{url('instructor-list')}}">Instructor</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('instructor-list') ? 'active' : '' }}"><a href="{{url('instructor-list')}}">List</a></li>
                                        <li class="{{ Request::is('instructor-grid','instructor-grid-2') ? 'active' : '' }}"><a href="{{url('instructor-grid')}}">Grid</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('instructor-course') ? 'active' : '' }}"><a href="{{url('instructor-course')}}">My Course</a></li>
                                <li class="{{ Request::is('instructor-reviews') ? 'active' : '' }}"><a href="{{url('instructor-reviews')}}">Reviews</a></li>
                                <li class="{{ Request::is('instructor-earnings') ? 'active' : '' }}"><a href="{{url('instructor-earnings')}}">Earnings</a></li>
                                <li class="{{ Request::is('instructor-orders') ? 'active' : '' }}"><a href="{{url('instructor-orders')}}">Orders</a></li>
                                <li class="{{ Request::is('instructor-payouts') ? 'active' : '' }}"><a href="{{url('instructor-payouts')}}">Payouts</a></li>
                                <li class="{{ Request::is('instructor-tickets','instructor-new-tickets') ? 'active' : '' }}"><a href="{{url('instructor-tickets')}}">Support Ticket</a></li>
                                <li class="{{ Request::is('instructor-edit-profile','instructor-profile') ? 'active' : '' }}"><a href="{{url('instructor-edit-profile')}}">Instructor Profile</a></li>
                                <li class="{{ Request::is('instructor-security') ? 'active' : '' }}"><a href="{{url('instructor-security')}}">Security</a></li>
                                <li class="{{ Request::is('instructor-social-profiles') ? 'active' : '' }}"><a href="{{url('instructor-social-profiles')}}">Social Profiles</a></li>
                                <li class="{{ Request::is('instructor-notification') ? 'active' : '' }}"><a href="{{url('instructor-notification')}}">Notifications</a></li>
                                <li class="{{ Request::is('instructor-profile-privacy') ? 'active' : '' }}"><a href="{{url('instructor-profile-privacy')}}">Profile Privacy</a></li>
                                <li class="{{ Request::is('instructor-delete-profile') ? 'active' : '' }}"><a href="{{url('instructor-delete-profile')}}">Delete Profile</a></li>
                                <li class="{{ Request::is('instructor-linked-account') ? 'active' : '' }}"><a href="{{url('instructor-linked-account')}}">Linked Accounts</a></li>
                            </ul>
                        </li>	
                        <li class="has-submenu {{ Request::is('students-list','transactions-student','view-invoice','students-grid2','setting-support-view-tickets','student-profile','setting-support-new-tickets','setting-student-delete-profile','deposit-student-dashboard','deposit-student','students-grid','setting-edit-profile','setting-student-security',
                            'setting-student-social-profile','setting-student-notification','setting-student-privacy','setting-student-accounts',
                            'setting-student-referral','setting-student-subscription','setting-student-billing','setting-student-payment',
                            'setting-student-invoice','setting-support-tickets','course-student','course-message','purchase-history') ? 'active' : '' }}">
                            <a href="">Student <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu first-submenu">
                                <li class="has-submenu {{ Request::is('students-list','students-grid','students-grid2') ? 'active' : '' }}">
                                    <a href="{{url('students-list')}}">Student</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('students-list') ? 'active' : '' }}"><a href="{{url('students-list')}}">List</a></li>
                                        <li class="{{ Request::is('students-grid','students-grid2') ? 'active' : '' }}"><a href="{{url('students-grid')}}">Grid</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('setting-edit-profile','student-profile') ? 'active' : '' }}"><a href="{{url('setting-edit-profile')}}">Student Profile</a></li>
                                <li class="{{ Request::is('setting-student-security') ? 'active' : '' }}"><a href="{{url('setting-student-security')}}">Security</a></li>
                                <li class="{{ Request::is('setting-student-social-profile') ? 'active' : '' }}"><a href="{{url('setting-student-social-profile')}}">Social profile</a></li>
                                <li class="{{ Request::is('setting-student-notification') ? 'active' : '' }}"><a href="{{url('setting-student-notification')}}">Notification</a></li>
                                <li class="{{ Request::is('setting-student-privacy') ? 'active' : '' }}"><a href="{{url('setting-student-privacy')}}">Profile Privacy</a></li>
                                <li class="{{ Request::is('setting-student-accounts') ? 'active' : '' }}"><a href="{{url('setting-student-accounts')}}">Link Accounts</a></li>
                                <li class="{{ Request::is('setting-student-referral') ? 'active' : '' }}"><a href="{{url('setting-student-referral')}}">Referal</a></li>
                                <li class="{{ Request::is('setting-student-subscription') ? 'active' : '' }}"><a href="{{url('setting-student-subscription')}}">Subscribtion</a></li>
                                <li class="{{ Request::is('setting-student-billing') ? 'active' : '' }}"><a href="{{url('setting-student-billing')}}">Billing</a></li>
                                <li class="{{ Request::is('setting-student-payment') ? 'active' : '' }}"><a href="{{url('setting-student-payment')}}">Payment</a></li>
                                <li class="{{ Request::is('setting-student-invoice','view-invoice') ? 'active' : '' }}"><a href="{{url('setting-student-invoice')}}">Invoice</a></li>
                                <li class="{{ Request::is('setting-support-tickets','setting-support-new-tickets','setting-support-view-tickets') ? 'active' : '' }}"><a href="{{url('setting-support-tickets')}}">Support Tickets</a></li>
                            </ul>
                        </li>	
                        <li class="has-submenu {{ Request::is('notifications','term-condition','pricing-plan-2','privacy-policy','pricing-plan','wishlist','come-soon','error-404','error-500',
                            'under-construction','faq','support','job-category','cart','checkout','login','add-course','course-list',
                            'course-grid','help-center','course-details','registers','forgot-password','course-details1','course-details2','course-wishlist') ? 'active' : '' }}">
                            <a href="">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="{{ Request::is('notifications') ? 'active' : '' }}"><a href="{{url('notifications')}}">Notification</a></li>
                                <li class="{{ Request::is('pricing-plan','pricing-plan-2') ? 'active' : '' }}"><a href="{{url('pricing-plan')}}">Pricing Plan</a></li>
                                <li class="{{ Request::is('wishlist') ? 'active' : '' }}"><a href="{{url('wishlist')}}">Wishlist</a></li>
                                <li class="has-submenu {{ Request::is('add-course','course-list','course-grid','course-details','course-details1','course-details2') ? 'active' : '' }}">
                                    <a href="{{url('course-list')}}">Course</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('add-course') ? 'active' : '' }}"><a href="{{url('add-course')}}">Add Course</a></li>
                                        <li class="{{ Request::is('course-list') ? 'active' : '' }}"><a href="{{url('course-list')}}">Course List</a></li>
                                        <li class="{{ Request::is('course-grid') ? 'active' : '' }}"><a href="{{url('course-grid')}}">Course Grid</a></li>
                                        <li class="{{ Request::is('course-details','course-details1','course-details2') ? 'active' : '' }}"><a href="{{url('course-details')}}">Course Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu {{ Request::is('come-soon','error-404','error-500','under-construction') ? 'active' : '' }}">
                                    <a href="{{url('come-soon')}}">Error</a>
                                    <ul class="submenu">
                                        <li class="{{ Request::is('come-soon') ? 'active' : '' }}"><a href="{{url('come-soon')}}">Comeing soon</a></li>
                                        <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a href="{{url('error-404')}}">404</a></li>
                                        <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a href="{{url('error-500')}}">500</a></li>
                                        <li class="{{ Request::is('under-construction') ? 'active' : '' }}"><a href="{{url('under-construction')}}">Under Construction</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('help-center') ? 'active' : '' }}"><a href="{{url('help-center')}}">Help Center</a></li>
                                <li class="{{ Request::is('faq') ? 'active' : '' }}"><a href="{{url('faq')}}">FAQ</a></li>
                                <li class="{{ Request::is('support') ? 'active' : '' }}"><a href="{{url('support')}}">Support</a></li>
                                <li class="{{ Request::is('term-condition') ? 'active' : '' }}"><a href="{{url('term-condition')}}">Terms & Conditions</a></li>
                                <li class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                                <li class="{{ Request::is('job-category') ? 'active' : '' }}"><a href="{{url('job-category')}}">Category</a></li>
                                <li class="{{ Request::is('cart') ? 'active' : '' }}"><a href="{{url('cart')}}">Cart</a></li>
                                <li class="{{ Request::is('checkout') ? 'active' : '' }}"><a href="{{url('checkout')}}">Checkout</a></li>
                                <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{url('login')}}">Login</a></li>
                                <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{url('register')}}">Register</a></li>
                                <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a href="{{url('forgot-password')}}">Forgot Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu {{ Request::is('blog-list','blog-grid','blog-masonry','blog-modern','blog-details') ? 'active' : '' }}">
                            <a href="">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="{{ Request::is('blog-list') ? 'active' : '' }}"><a href="{{url('blog-list')}}">Blog List</a></li>
                                <li class="{{ Request::is('blog-grid') ? 'active' : '' }}"><a href="{{url('blog-grid')}}">Blog Grid</a></li>
                                <li class="{{ Request::is('blog-masonry') ? 'active' : '' }}"><a href="{{url('blog-masonry')}}">Blog Masonry</a></li>
                                <li class="{{ Request::is('blog-modern') ? 'active' : '' }}"><a href="{{url('blog-modern')}}">Blog Modern</a></li>
                                <li class="{{ Request::is('blog-details') ? 'active' : '' }}"><a href="{{url('blog-details')}}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="login-link">
                            <a href="{{url('login')}}">Login / Signup</a>
                        </li>
                    </ul>		 
                </div>		 
                @if(!Route::is(['blog-details','blog-grid','blog-list','blog-masonry','blog-modern','dashboard-instructor',
                'deposit-instructor-dashboard','deposit-instructor','faq','help-center','index','instructor-chat','instructor-course',
                'instructor-dashboard','instructor-delete-profile','instructor-earnings','instructor-edit-profile','instructor-edit',
                'instructor-grid','instructor-linked-account','instructor-list','instructor-new-tickets','instructor-notification',
                'instructor-orders','instructor-payouts','instructor-profile-privacy','instructor-profile','instructor-reviews',
                'instructor-security','instructor-social-profiles','instructor-student-grid','instructor-student-list','instructor-tickets',
                'job-category','notifications','pricing-plan-2','pricing-plan','privacy-policy','support','term-condition',
                'transactions-instructor','wishlist','withdrawal-instructor','instructor-grid-2']))
                <ul class="nav header-navbar-rht">
                    <li class="nav-item">
                        <a href="{{url('course-message')}}"><img src="{{ URL::asset('/assets/img/icon/messages.svg')}}" alt="img"></a> 
                    </li>
                    <li class="nav-item cart-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ URL::asset('/assets/img/icon/cart.svg')}}" alt="img"> 
                        </a>
                        <div class="wishes-list dropdown-menu dropdown-menu-right">
                            <div class="wish-header">
                                <a href="#">View Cart</a>
                                <a href="javascript:void(0)" class="float-end">Checkout</a>
                            </div>
                            <div class="wish-content">
                                <ul>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('course-details')}}">
                                                        <img alt="" src="{{ URL::asset('/assets/img/course/course-04.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('course-details')}}">Learn Angular...</a></h6>
                                                    <p>By Dave Franco</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                </div>
                                            </div>
                                            <div class="remove-btn">
                                                <a href="#" class="btn">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('course-details')}}">
                                                        <img alt="" src="{{ URL::asset('/assets/img/course/course-14.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('course-details')}}">Build Responsive Real...</a></h6>
                                                    <p>Jenis R.</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                </div>
                                            </div>
                                            <div class="remove-btn">
                                                <a href="#" class="btn">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('course-details')}}">
                                                        <img alt="" src="{{ URL::asset('/assets/img/course/course-15.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('course-details')}}">C# Developers Double ...</a></h6>
                                                    <p>Jesse Stevens</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                </div>
                                            </div>
                                            <div class="remove-btn">
                                                <a href="#" class="btn">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total-item">
                                    <h6>Subtotal : $ 600</h6>
                                    <h5>Total : $ 600</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item wish-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ URL::asset('/assets/img/icon/wish.svg')}}" alt="img"> 
                        </a>
                        <div class="wishes-list dropdown-menu dropdown-menu-right">
                            <div class="wish-content">
                                <ul>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('course-details')}}">
                                                        <img alt="" src="{{ URL::asset('/assets/img/course/course-04.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('course-details')}}">Learn Angular...</a></h6>
                                                    <p>By Dave Franco</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('course-details')}}">
                                                        <img alt="" src="{{ URL::asset('/assets/img/course/course-14.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('course-details')}}">Build Responsive Real...</a></h6>
                                                    <p>Jenis R.</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('course-details')}}">
                                                        <img alt="" src="{{ URL::asset('/assets/img/course/course-15.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('course-details')}}">C# Developers Double ...</a></h6>
                                                    <p>Jesse Stevens</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item noti-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ URL::asset('/assets/img/icon/notification.svg')}}" alt="img"> 
                        </a>
                        <div class="notifications dropdown-menu dropdown-menu-right">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications
                                <select>
                                    <option>All</option>
                                    <option>Unread</option>
                                </select>
                                </span>
                                <a href="javascript:void(0)" class="clear-noti">Mark all as read <i class="feather-solid feather-check-circle"></i></a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>															
                                                <a href="{{url('notifications')}}" class="avatar">
                                                    <img class="avatar-img" alt="" src="{{ URL::asset('/assets/img/user/user1.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="{{url('notifications')}}">Lex Murphy requested <span>access to</span> UNIX directory tree hierarchy </a></h6>
                                                <button class="btn btn-accept">Accept</button>
                                                <button class="btn btn-reject">Reject</button>
                                                <p>Today at 9:42 AM</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>															
                                                <a href="{{url('notifications')}}" class="avatar">
                                                    <img class="avatar-img" alt="" src="{{ URL::asset('/assets/img/user/user2.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="{{url('notifications')}}">Ray Arnold left 6 <span>comments on</span> Isla Nublar SOC2 compliance report</a></h6>
                                                <p>Yesterday at 11:42 PM</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>															
                                                <a href="{{url('notifications')}}" class="avatar">
                                                    <img class="avatar-img" alt="" src="{{ URL::asset('/assets/img/user/user3.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="{{url('notifications')}}">Dennis Nedry <span>commented on</span> Isla Nublar SOC2 compliance report</a></h6>
                                                <p class="noti-details">“Oh, I finished de-bugging the phones, but the system's compiling for eighteen minutes, or twenty.  So, some minor systems may go on and off for a while.”</p>
                                                <p>Yesterday at 5:42 PM</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>															
                                                <a href="{{url('notifications')}}" class="avatar">
                                                    <img class="avatar-img" alt="" src="{{ URL::asset('/assets/img/user/user1.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="{{url('notifications')}}">John Hammond <span>created</span> Isla Nublar SOC2 compliance report </a></h6>
                                                <p>Last Wednesday at 11:15 AM</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item user-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{ URL::asset('/assets/img/user/user11.jpg')}}" alt="">
                                <span class="status online"></span>
                            </span>
                        </a>
                        <div class="users dropdown-menu dropdown-menu-right" data-popper-placement="bottom-end" >
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img src="{{ URL::asset('/assets/img/user/user11.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                </div>
                                <div class="user-text">
                                    <h6>Rolands R</h6>
                                    <p class="text-muted mb-0">Student</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{url('setting-edit-profile')}}"><i class="feather-user me-1"></i> Profile</a>
                            <a class="dropdown-item" href="{{url('setting-student-subscription')}}"><i class="feather-star me-1"></i> Subscription</a>
                            <div class="dropdown-item night-mode">
                                <span><i class="feather-moon me-1"></i> Night Mode </span>
                                <div class="form-check form-switch check-on m-0">
                                    <input class="form-check-input" type="checkbox" id="night-mode">
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{url('index')}}"><i class="feather-log-out me-1"></i> Logout</a>
                        </div>
                    </li>
                </ul>
                @endif
                @if(Route::is(['blog-details','blog-grid','blog-list','blog-masonry','blog-modern','faq','help-center','index','job-category',
                'notifications','pricing-plan-2','pricing-plan','privacy-policy','support','term-condition','wishlist']))
                <ul class="nav header-navbar-rht">
                    <li class="nav-item">
                        <a class="nav-link header-sign" href="{{url('login')}}">Signin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-login" href="{{url('register')}}">Signup</a>
                    </li>
                </ul>
                @endif
                @if(Route::is(['dashboard-instructor','deposit-instructor-dashboard','deposit-instructor','instructor-chat','instructor-course',
                'instructor-dashboard','instructor-delete-profile','instructor-earnings','instructor-edit-profile','instructor-edit',
                'instructor-grid','instructor-linked-account','instructor-list','instructor-new-tickets','instructor-notification',
                'instructor-orders','instructor-payouts','instructor-profile-privacy','instructor-profile','instructor-reviews',
                'instructor-security','instructor-social-profiles','instructor-student-grid','instructor-student-list','instructor-tickets',
                'transactions-instructor','withdrawal-instructor','instructor-grid-2']))
                <ul class="nav header-navbar-rht">
                    <li class="nav-item">
                        <a href="{{url('instructor-chat')}}"><img src="{{ URL::asset('/assets/img/icon/messages.svg')}}" alt="img"></a> 
                    </li>
                    <li class="nav-item cart-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ URL::asset('/assets/img/icon/cart.svg')}}" alt="img"> 
                        </a>
                        <div class="wishes-list dropdown-menu dropdown-menu-right">
                            <div class="wish-header">
                                <a href="#">View Cart</a>
                                <a href="javascript:void(0)" class="float-end">Checkout</a>
                            </div>
                            <div class="wish-content">
                                <ul>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('course-details')}}">
                                                        <img alt="" src="{{ URL::asset('/assets/img/course/course-04.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('course-details')}}">Learn Angular...</a></h6>
                                                    <p>By Dave Franco</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                </div>
                                            </div>
                                            <div class="remove-btn">
                                                <a href="#" class="btn">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('course-details')}}">
                                                        <img alt="" src="{{ URL::asset('/assets/img/course/course-14.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('course-details')}}">Build Responsive Real...</a></h6>
                                                    <p>Jenis R.</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                </div>
                                            </div>
                                            <div class="remove-btn">
                                                <a href="#" class="btn">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('course-details')}}">
                                                        <img alt="" src="{{ URL::asset('/assets/img/course/course-15.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('course-details')}}">C# Developers Double ...</a></h6>
                                                    <p>Jesse Stevens</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                </div>
                                            </div>
                                            <div class="remove-btn">
                                                <a href="#" class="btn">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total-item">
                                    <h6>Subtotal : $ 600</h6>
                                    <h5>Total : $ 600</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item wish-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ URL::asset('/assets/img/icon/wish.svg')}}" alt="img"> 
                        </a>
                        <div class="wishes-list dropdown-menu dropdown-menu-right">
                            <div class="wish-content">
                                <ul>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('course-details')}}">
                                                        <img alt="" src="{{ URL::asset('/assets/img/course/course-04.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('course-details')}}">Learn Angular...</a></h6>
                                                    <p>By Dave Franco</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('course-details')}}">
                                                        <img alt="" src="{{ URL::asset('/assets/img/course/course-14.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('course-details')}}">Build Responsive Real...</a></h6>
                                                    <p>Jenis R.</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('course-details')}}">
                                                        <img alt="" src="{{ URL::asset('/assets/img/course/course-15.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('course-details')}}">C# Developers Double ...</a></h6>
                                                    <p>Jesse Stevens</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item noti-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ URL::asset('/assets/img/icon/notification.svg')}}" alt="img"> 
                        </a>
                        <div class="notifications dropdown-menu dropdown-menu-right">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications
                                <select>
                                    <option>All</option>
                                    <option>Unread</option>
                                </select>
                                </span>
                                <a href="javascript:void(0)" class="clear-noti">Mark all as read <i class="fa-solid fa-circle-check"></i></a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>															
                                                <a href="{{url('notifications')}}" class="avatar">
                                                    <img class="avatar-img" alt="" src="{{ URL::asset('/assets/img/user/user1.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="{{url('notifications')}}">Lex Murphy requested <span>access to</span> UNIX directory tree hierarchy </a></h6>
                                                <button class="btn btn-accept">Accept</button>
                                                <button class="btn btn-reject">Reject</button>
                                                <p>Today at 9:42 AM</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>															
                                                <a href="{{url('notifications')}}" class="avatar">
                                                    <img class="avatar-img" alt="" src="{{ URL::asset('/assets/img/user/user2.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="{{url('notifications')}}">Ray Arnold left 6 <span>comments on</span> Isla Nublar SOC2 compliance report</a></h6>
                                                <p>Yesterday at 11:42 PM</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>															
                                                <a href="{{url('notifications')}}" class="avatar">
                                                    <img class="avatar-img" alt="" src="{{ URL::asset('/assets/img/user/user3.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="{{url('notifications')}}">Dennis Nedry <span>commented on</span> Isla Nublar SOC2 compliance report</a></h6>
                                                <p class="noti-details">“Oh, I finished de-bugging the phones, but the system's compiling for eighteen minutes, or twenty.  So, some minor systems may go on and off for a while.”</p>
                                                <p>Yesterday at 5:42 PM</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>															
                                                <a href="{{url('notifications')}}" class="avatar">
                                                    <img class="avatar-img" alt="" src="{{ URL::asset('/assets/img/user/user1.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="{{url('notifications')}}">John Hammond <span>created</span> Isla Nublar SOC2 compliance report </a></h6>
                                                <p>Last Wednesday at 11:15 AM</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item user-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{ URL::asset('/assets/img/instructor/profile-avatar.jpg')}}" alt="">
                                <span class="status online"></span>
                            </span>
                        </a>
                        <div class="users dropdown-menu dropdown-menu-right" data-popper-placement="bottom-end" >
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img src="{{ URL::asset('/assets/img/instructor/profile-avatar.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                                </div>
                                <div class="user-text">
                                    <h6>Jenny Wilson</h6>
                                    <p class="text-muted mb-0">Instructor</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{url('instructor-dashboard')}}"><i class="feather-home me-1"></i> Dashboard</a>
                            <a class="dropdown-item" href="{{url('instructor-edit-profile')}}"><i class="feather-star me-1"></i> Edit Profile</a>
                            <div class="dropdown-item night-mode">
                                <span><i class="feather-moon me-1"></i> Night Mode </span>
                                <div class="form-check form-switch check-on m-0">
                                    <input class="form-check-input" type="checkbox" id="night-mode">
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{url('index')}}"><i class="feather-log-out me-1"></i> Logout</a>
                        </div>
                    </li>
                </ul>
                @endif
            </div>
        </nav>
    </div>
</header>
<!-- /Header -->