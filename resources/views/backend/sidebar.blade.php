<div class="left-sidebar-pro">
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="#"><img src="img/message/1.jpg" alt="" />
            </a>
            <h3>Andrar Son</h3>
            <p>Developer</p>
            <strong>AP+</strong>
        </div>
        <div class="left-custom-menu-adp-wrap">
            <ul class="nav navbar-nav left-sidebar-menu-pro">
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX {{Request::is('admin') || Request::is('admin/*')}}">
                        <a href="{{ route('admin.home') }}" class="dropdown-item">Home</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-hospital-o"></i> <span class="mini-dn">Department</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX {{Request::is('department') || Request::is('department/*')}}">
                        <a href="{{ route('department.create') }}" class="dropdown-item">Create Department</a>
                        <a href="{{ route('department.all_department_list') }}" class="dropdown-item">All Department List</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user-md"></i> <span class="mini-dn">Doctor</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX {{Request::is('doctor') || Request::is('doctor/*')}}">
                        <a href="{{ route('doctor.create') }}" class="dropdown-item">Create Doctor</a>
                        <a href="{{ route('doctor.all_doctor_list') }}" class="dropdown-item">All Doctor List</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-wheelchair"></i> <span class="mini-dn">Patient</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX {{Request::is('patient') || Request::is('patient/*')}}">
                        <a href="{{ route('patient.create') }}" class="dropdown-item">Create Patient</a>
                        <a href="{{ route('patient.all_patient_list') }}" class="dropdown-item">All Patient List</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user-plus"></i> <span class="mini-dn">Receptionist</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX {{Request::is('receptionist') || Request::is('receptionist/*')}}">
                        <a href="{{ route('receptionist.create') }}" class="dropdown-item">Create Receptionist</a>
                        <a href="{{ route('receptionist.all_receptionist_list') }}" class="dropdown-item">All Receptionist List</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">Test</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX {{Request::is('test') || Request::is('test/*')}}">
                        <a href="{{ route('test.create') }}" class="dropdown-item">Create Test</a>
                        <a href="{{ route('test.all_test_list') }}" class="dropdown-item">All Test List</a>
                    </div>
                </li>
                <!-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">Forms Elements</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                        <a href="basic-form-element.html" class="dropdown-item">Basic Elements</a>
                        <a href="advance-form-element.html" class="dropdown-item">Advance Elements</a>
                        <a href="password-meter.html" class="dropdown-item">Password Meter</a>
                        <a href="multi-upload.html" class="dropdown-item">Multi Upload</a>
                        <a href="tinymc.html" class="dropdown-item">Text Editor</a>
                        <a href="dual-list-box.html" class="dropdown-item">Dual List Box</a>
                    </div>
                </li> -->
                <!-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span class="mini-dn">App views</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown apps-left-menu-std animated flipInX">
                        <a href="notifications.html" class="dropdown-item">Notifications</a>
                        <a href="alerts.html" class="dropdown-item">Alerts</a>
                        <a href="modals.html" class="dropdown-item">Modals</a>
                        <a href="buttons.html" class="dropdown-item">Buttons</a>
                        <a href="tabs.html" class="dropdown-item">Tabs</a>
                        <a href="accordion.html" class="dropdown-item">Accordion</a>
                        <a href="tab-menus.html" class="dropdown-item">Tab Menus</a>
                    </div>
                </li> -->
                <!-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-files-o"></i> <span class="mini-dn">Pages</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                        <a href="login.html" class="dropdown-item">Login</a>
                        <a href="register.html" class="dropdown-item">Register</a>
                        <a href="captcha.html" class="dropdown-item">Captcha</a>
                        <a href="checkout.html" class="dropdown-item">Checkout</a>
                        <a href="contact.html" class="dropdown-item">Contacts</a>
                        <a href="review.html" class="dropdown-item">Review</a>
                        <a href="order.html" class="dropdown-item">Order</a>
                        <a href="comment.html" class="dropdown-item">Comment</a>
                    </div>
                </li> -->
            </ul>
        </div>
    </nav>
</div>


<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#admin" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="admin" class="collapse dropdown-header-top {{Request::is('admin') || Request::is('admin/*')}}">
                                    <li>
                                      <a href="{{ route('admin.home') }}">Home</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#department" href="#">Department <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="department" class="collapse dropdown-header-top {{Request::is('department') || Request::is('department/*')}}">
                                    <li>
                                      <a href="{{ route('department.create') }}">Create Department</a>
                                    </li>
                                    <li>
                                      <a href="{{ route('department.all_department_list') }}">All Department List</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#doctor" href="#">Doctor <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="doctor" class="collapse dropdown-header-top {{Request::is('doctor') || Request::is('doctor/*')}}">
                                    <li>
                                      <a href="{{ route('doctor.create') }}">Create Doctor</a>
                                    </li>
                                    <li>
                                      <a href="{{ route('doctor.all_doctor_list') }}">All Doctor List</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#patient" href="#">Patient <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="patient" class="collapse dropdown-header-top">
                                    <li>
                                      <a href="{{ route('patient.create') }}">Create Patient</a>
                                    </li>
                                    <li>
                                      <a href="{{ route('patient.all_patient_list') }}">All Patient List</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#receptionist" href="#">Charts <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="receptionist" class="collapse dropdown-header-top">
                                    <li>
                                      <a href="{{ route('receptionist.create') }}">Create Receptionist</a>
                                    </li>
                                    <li>
                                      <a href="{{ route('receptionist.all_receptionist_list') }}">All Receptionist List</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#test" href="#">Test <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="test" class="collapse dropdown-header-top">
                                    <li>
                                      <a href="{{ route('test.create') }}">Create Test</a>
                                    </li>
                                    <li>
                                      <a href="{{ route('test.all_test_list') }}">All Test List</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="formsmob" class="collapse dropdown-header-top">
                                    <li><a href="basic-form-element.html">Basic Form Elements</a>
                                    </li>
                                    <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                    </li>
                                    <li><a href="password-meter.html">Password Meter</a>
                                    </li>
                                    <li><a href="multi-upload.html">Multi Upload</a>
                                    </li>
                                    <li><a href="tinymc.html">Text Editor</a>
                                    </li>
                                    <li><a href="dual-list-box.html">Dual List Box</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                    <li><a href="basic-form-element.html">Basic Form Elements</a>
                                    </li>
                                    <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                    </li>
                                    <li><a href="password-meter.html">Password Meter</a>
                                    </li>
                                    <li><a href="multi-upload.html">Multi Upload</a>
                                    </li>
                                    <li><a href="tinymc.html">Text Editor</a>
                                    </li>
                                    <li><a href="dual-list-box.html">Dual List Box</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="login.html">Login</a>
                                    </li>
                                    <li><a href="register.html">Register</a>
                                    </li>
                                    <li><a href="captcha.html">Captcha</a>
                                    </li>
                                    <li><a href="checkout.html">Checkout</a>
                                    </li>
                                    <li><a href="contact.html">Contacts</a>
                                    </li>
                                    <li><a href="review.html">Review</a>
                                    </li>
                                    <li><a href="order.html">Order</a>
                                    </li>
                                    <li><a href="comment.html">Comment</a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
