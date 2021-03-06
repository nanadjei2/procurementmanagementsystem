
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
                            <img class="img-circle img-fluid" src="{{ asset('images/user_avatar.png') }}">
                        </div>
                        <div class="profile-title">
                            @if(Auth::check())
                            {{ Auth::user()->firstname }} {{ Auth::user()->othernames }}
                            @endif
                        </div>
                        <!--<div class="profile-subtitle">lucas.smith@gmail.com</div>-->
                        <!--<div class="profile-toggle">
                            <button data-click="toggle-profile" type="button" class="btn btn-white btn-outline no-border">
                                <i class="pull-right fa fa-caret-down icon-toggle-profile"></i> 
                            </button>
                        </div>-->
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
                                
                                <!--<li>
                                    <a class="sideline">
                                        <i class="zmdi zmdi-edit md-icon pull-left"></i> 
                                        <span class="title">Update</span> 
                                    </a>
                                </li>-->
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
                                    <a class="sideline" href="{{ route('view-profile-info', $user) }}">
                                        <i class="zmdi zmdi-account-circle md-icon pull-left"></i> 
                                        <span class="title">Profile</span> 
                                    </a>
                                </li>
                            </ul>

                            @if(Auth::check())
                            @if(Auth::user()->admin == 0)
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a href="{{ route('dashboard') }}" class="sideline" href="index-2.html">
                                        <i class="zmdi zmdi-view-dashboard md-icon pull-left"></i> 
                                        <span class="title">Dashboard</span> 
                                    </a>
                                </li>
                            </ul>
                             @endif
                            @endif


                            @if(Auth::check())
                            @if(Auth::user()->admin == 1)
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a href="{{ route('dashboard-admin') }}" class="sideline" href="index-2.html">
                                        <i class="zmdi zmdi-view-dashboard md-icon pull-left"></i> 
                                        <span class="title">Admin DashBoard</span> 
                                    </a>
                                </li>
                            </ul>
                            @endif
                            @endif
                            
                            @if(Auth::check())
                            @if(Auth::user()->admin == 1)
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a href="{{ route('all-system-users') }}" class="sideline" href="index-2.html">
                                        <i class="zmdi zmdi-view-dashboard md-icon pull-left"></i> 
                                        <span class="title">All System Users</span> 
                                    </a>
                                </li>
                            </ul>
                            @endif
                            @endif


                            

                            @if(Auth::check())
                            @if(Auth::user()->admin == 1)
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a href="{{ route('view-all-bidders') }}" class="sideline" href="index-2.html">
                                        <i class="zmdi zmdi-view-week md-icon pull-left"></i> 
                                        <span class="title">View All Bidders</span> 
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
                                        <span class="title">Add Supplier</span> 
                                    </a>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" href="{{ route('view-profile-info', $user) }}">
                                        <i class="fa fa-user-plus md-icon pull-left"></i> 
                                        <span class="title">View Supplier Info</span> 
                                    </a>
                                </li>
                            </ul>

                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" href="index-2.html">
                                        <i class="fa fa-user-plus md-icon pull-left"></i> 
                                        <span class="title">Update Supplier  Info</span> 
                                    </a>
                                </li>
                            </ul>
                             <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" href="{{ route('logout') }}">
                                        <i class="zmdi zmdi-sign-in md-icon pull-left"></i> 
                                        <span class="title">Logout</span> 
                                    </a>
                                </li>
                            </ul>
                            @endif
                            @endif


                            @if(Auth::check())
                            @if(Auth::user()->admin == 1)
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a href="{{ route('logout') }}" class="sideline" href="index-2.html">
                                        <i class="zmdi zmdi-sign-in md-icon pull-left"></i> 
                                        <span class="title">Logout</span> 
                                    </a>
                                </li>
                            </ul>
                            @endif
                            @endif
                        </div>



