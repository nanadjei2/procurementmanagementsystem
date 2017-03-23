
<div class="container-fluid">
    <div class="row">
        <div class="sidebar-placeholder"></div>
        <div class="sidebar-outer-wrapper">
            <div class="sidebar-inner-wrapper">
                <div class="sidebar-1">
                    <div class="profile">
                        <button data-click="toggle-sidebar" type="button" class="btn btn-white btn-outline no-border close-sidebar">
                            <i class="fa fa-close"></i> 
                        </button>
                        <div class="profile-image">
                            <img class="img-circle img-fluid" src="{{ asset('images/avator.png') }}">
                        </div>
                        <div class="social-media">
                            <button type="button" class="btn btn-facebook btn-circle m-r-5">
                                <i class="fa fa-facebook"></i> 
                            </button>
                            <button type="button" class="btn btn-twitter btn-circle m-r-5">
                                <i class="fa fa-twitter"></i> 
                            </button>
                            <button type="button" class="btn btn-google btn-circle m-r-5">
                                <i class="fa fa-google"></i> 
                            </button>
                        </div>
                        <div class="profile-title">{{ Auth::user()->firstname }} {{ Auth::user()->othernames }}</div>
                        <!--<div class="profile-subtitle">lucas.smith@gmail.com</div>-->
                        <div class="profile-toggle">
                            <button data-click="toggle-profile" type="button" class="btn btn-white btn-outline no-border">
                                <i class="pull-right fa fa-caret-down icon-toggle-profile"></i> 
                            </button>
                        </div>
                    </div>
                    <div class="sidebar-nav">
                        <div class="sidebar-section account-links">
                            <div class="section-title">Account</div>
                            <ul class="list-unstyled section-content">
                                <li>
                                    <a class="sideline">
                                        <i class="zmdi zmdi-account-circle md-icon pull-left"></i> 
                                        <span class="title">Profile</span> 
                                    </a>
                                </li>
                                <li>
                                    <a class="sideline">
                                        <i class="zmdi zmdi-settings md-icon pull-left"></i> 
                                        <span class="title">Settings</span> 
                                    </a>
                                </li>
                                <li>
                                    <a class="sideline">
                                        <i class="zmdi zmdi-edit md-icon pull-left"></i> 
                                        <span class="title">Update</span> 
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" class="sideline">
                                        <i class="zmdi zmdi-sign-in md-icon pull-left"></i> 
                                        <span class="title">Logout</span> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-section">
                            <div class="section-title hidden">Navigation</div>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a href="{{ route('dashboard') }}" class="sideline" href="index-2.html">
                                        <i class="zmdi zmdi-view-dashboard md-icon pull-left"></i> 
                                        <span class="title">Dashboard</span> 
                                    </a>
                                </li>
                            </ul>
                            @if(Auth::check())
                                @if(Auth::user()->admin == 1)
                                    <ul class="l1 list-unstyled section-content">
                                        <li>
                                            <a href="{{ route('admin-dashboard') }}" class="sideline" href="index-2.html">
                                                <i class="zmdi zmdi-view-dashboard md-icon pull-left"></i> 
                                                <span class="title">Admin Dashboard</span> 
                                            </a>
                                        </li>
                                    </ul>
                                @endif
                            @endif

                            @if(Auth::check())
                                @if(!Auth::user()->admin == 1)
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a href="{{ route('register-member') }}" class="sideline" href="index-2.html">
                                        <i class="fa fa-user md-icon pull-left"></i> 
                                        <span class="title">Add More Info</span> 
                                    </a>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" href="index-2.html">
                                        <i class="fa fa-user-plus md-icon pull-left"></i> 
                                        <span class="title">Add Supplier</span> 
                                    </a>
                                </li>
                            </ul>
                                @endif
                            @endif
                         </div>

                         





            <div class="sidebar-labels m-t-20">
                <h5>Tags</h5> 
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-dot-circle-o color-warning"></i> 
                        <span class="m-l-10">Family</span> 
                    </li>
                    <li>
                        <i class="fa fa-dot-circle-o color-success"></i> 
                        <span class="m-l-10">Work</span> 
                    </li>
                    <li>
                        <i class="fa fa-dot-circle-o color-danger"></i> 
                        <span class="m-l-10">Home</span> 
                    </li>
                </ul>
            </div>
            <div class="sidebar-progress">
                <h5>Project status</h5> 
                <div class="row">
                    <div class="col-xs-8">
                        <div class="p-t-10 p-l-10">
                            <progress class="progress-sm progress progress-warning" value="50" max="100">50%</progress>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <span class="number">50%</span> 
                    </div>
                </div>
            </div>

