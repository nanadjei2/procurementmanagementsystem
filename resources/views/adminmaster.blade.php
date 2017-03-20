<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="Marino, Admin theme, Dashboard theme, AngularJS Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">

   
<!-- implementing using laravel approach -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap.css') }}" />
<link href="{{ asset('cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('cdnjs.cloudflare.com/ajax/libs/flag-icon-css/1.0.0/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/chartist/dist/chartist.min.css') }}" />


</head>
<body data-layout="empty-layout" data-palette="palette-0">
    <nav class="navbar navbar-fixed-top navbar-1">
        <ul class="nav navbar-nav pull-left toggle-layout">
            <li class="nav-item">

                <a class="nav-link" data-click="toggle-layout">
                    <i class="zmdi zmdi-menu"></i> 
                </a>
            </li>
        </ul>
        <a class="navbar-brand" href="index-2.html">Proucurement Mangement System</a> 
        <ul class="nav navbar-nav pull-left toggle-fullscreen-mode">
            <li class="nav-item">

                <a class="nav-link" data-click="toggle-fullscreen-mode">
                    <i class="zmdi zmdi-fullscreen"></i> 
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav pull-left navbar-dropdown">
            <li class="nav-item dropdown mega-dropdown">
                <mega-menu-1 class="ng-isolate-scope">

                    <a class="nav-link dropdown-toggle no-after" data-toggle="dropdown">
                        <i class="fa fa-plus"></i> 
                        <span class="nav-link-text">Navigation</span> 
                    </a>

                </mega-menu-1>
            </li>
        </ul>
        <ul class="nav navbar-nav pull-left toggle-search">
            <li class="nav-item">

                <a class="nav-link" data-click="toggle-search">
                    <i class="zmdi zmdi-search"></i> 
                </a>
            </li>
        </ul>
        <div class="navbar-drawer pull-left hidden-lg-down">
            <form class="form-inline navbar-form ">

                <input class="form-control" type="text" placeholder="Search">
            </form>
        </div>





        <ul class="nav navbar-nav pull-right hidden-lg-down navbar-toggle-theme-selector">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle no-after" data-toggle="dropdown">
                    <span class="zmdi zmdi-settings"></span> 
                </a>
                <div class="dropdown-menu dropdown-menu-scale from-right dropdown-menu-right">
                    <a href="{{ route('logout') }}" class="dropdown-item">
                        <span class="title">
                            Logout
                        </span> 
                    </a>

                </div>
            </li>
        </ul>






        <ul class="nav navbar-nav pull-right hidden-lg-down navbar-flags">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle no-after" data-toggle="dropdown">
                    <span class="flag flag-icon flag-icon-gb"></span> 
                </a>
                <div class="dropdown-menu dropdown-menu-scale from-right dropdown-menu-right">

                    <a class="dropdown-item">
                        <span class="flag flag-icon flag-icon-gb"></span> 
                        <span class="title">English</span> 
                    </a>

                    <a class="dropdown-item">
                        <span class="flag flag-icon flag-icon-de"></span> 
                        <span class="title">German</span> 
                    </a>

                    <a class="dropdown-item">
                        <span class="flag flag-icon flag-icon-es"></span> 
                        <span class="title">Spanish</span> 
                    </a>

                    <a class="dropdown-item">
                        <span class="flag flag-icon flag-icon-fr"></span> 
                        <span class="title">French</span> 
                    </a>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav pull-right hidden-lg-down navbar-notifications">
            <li class="nav-item">

                <a class="nav-link" data-click="toggle-right-sidebar">
                    <i class="zmdi zmdi-notifications-active"></i> 
                    <span class="label label-rounded label-primary label-xs">3</span> 
                </a>
            </li>
        </ul>

        
        
    </nav>
  












<!-- Left Nav Begins -->
@include('partials.side-nav')
<!-- Left Nav Ends -->
      
<div class="right-sidebar-outer">
    <div class="right-sidebar-inner">
        <div class="right-sidebar">
            <div class="bs-nav-tabs nav-tabs-warning justified">
                <ul class="nav nav-tabs nav-animated-border-from-center">
                    <li class="nav-item">
                        <a href="index-2.html#" class="nav-link active" data-toggle="tab" data-target="#rtab-left">Activities</a> 
                    </li>
                    <li class="nav-item">
                        <a href="index-2.html#" class="nav-link" data-toggle="tab" data-target="#rtab-center">Users</a> 
                    </li>
                    <li class="nav-item">
                        <a href="index-2.html#" class="nav-link" data-toggle="tab" data-target="#rtab-right">Stats</a> 
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
                    

        
            <div class="footer">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="http://www.batchthemes.com/" target="_blank">© 2016. Batch Themes Ltd. </a><a href="http://www.themeforest.com/" target="_blank">Buy Marino</a>
                    </div>
                </div>
            </div>
       

<!-- global scripts -->
<!-- <script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/tether/dist/js/tether.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="bower_components/PACE/pace.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/lodash.js/4.0.0/lodash.min.js"></script>
<script src="scripts/components/jquery-fullscreen/jquery.fullscreen-min.js"></script>
<script src="bower_components/jquery-storage-api/jquery.storageapi.min.js"></script>
<script src="bower_components/wow/dist/wow.min.js"></script>
<script src="scripts/functions.js"></script>
<script src="scripts/colors.js"></script>
<script src="scripts/left-sidebar.js"></script>
<script src="scripts/navbar.js"></script>
<script src="scripts/horizontal-navigation-1.js"></script>
<script src="scripts/horizontal-navigation-2.js"></script>
<script src="scripts/horizontal-navigation-3.js"></script>
<script src="scripts/main.js"></script>
<script src="bower_components/notifyjs/dist/notify.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script src="bower_components/chartist/dist/chartist.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
<script src="bower_components/d3/d3.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
<script src="../bower.batchthemes.com/bower_components/datamaps/dist/datamaps.all.js"></script>
<script src="scripts/dashboards.js"></script>
<script src="scripts/index.js"></script>
 -->

<!-- implementing the JS files using laravel approach -->
<script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/tether/dist/js/tether.js') }}"></script>

<script type="text/javascript" src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/PACE/pace.js') }}"></script>

<script type="text/javascript" src="{{ asset('cdnjs.cloudflare.com/ajax/libs/lodash.js/4.0.0/lodash.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/components/jquery-fullscreen/jquery.fullscreen-min.js') }}"></script>

<script type="text/javascript" src="{{ asset('bower_components/jquery-storage-api/jquery.storageapi.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/wow/dist/wow.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('scripts/functions.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/colors.js') }}"></script>

<script type="text/javascript" src="{{ asset('scripts/left-sidebar.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/navbar.js') }}"></script>

<script type="text/javascript" src="{{ asset('scripts/horizontal-navigation-1.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/horizontal-navigation-2.js') }}"></script>

<script type="text/javascript" src="{{ asset('scripts/horizontal-navigation-3.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/main.js') }}"></script>

<script type="text/javascript" src="{{ asset('bower_components/notifyjs/dist/notify.js') }}"></script>
<script type="text/javascript" src="{{ asset('cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('bower_components/chartist/dist/chartist.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('bower_components/d3/d3.js') }}"></script>
<script type="text/javascript" src="{{ asset('cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('bower.batchthemes.com/bower_components/datamaps/dist/datamaps.all.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/dashboards.js') }}"></script>
<script type="text/javascript" src="{{ asset('scripts/index.js') }}"></script>

</body>

<!-- Mirrored from marino-2.batchthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Apr 2016 18:08:49 GMT -->
</html>
