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
        <a class="navbar-brand" href="index-2.html">Marino</a> 
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
                    <div class="dropdown-menu mega-menu-1 dropdown-menu-scale from-left">
                        <div>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-tachometer md-icon pull-left"></i> 
                                        <span>Dashboards</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="http://localhost:8003/dashboards-dashboard-1.php">
                                                <span>Analytics</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/dashboards-dashboard-2.php">
                                                <span>e-Commerce</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/dashboards-dashboard-3.php">
                                                <span>Sales</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/dashboards-dashboard-4.php">
                                                <span>Marketing</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/dashboards-dashboard-5.php">
                                                <span>Server monitoring</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/dashboards-dashboard-5.php">
                                                <span>Finance</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/dashboards-dashboard-5.php">
                                                <span>Health</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/dashboards-dashboard-5.php">
                                                <span>Social media</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/dashboards-dashboard-5.php">
                                                <span>Project management</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/dashboards-dashboard-5.php">
                                                <span>Education</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-star md-icon pull-left"></i> 
                                        <span>Layouts</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="index-2.html#" data-click="set-layout" data-id="default-sidebar">
                                                <span>Default sidebar</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html#" data-click="set-layout" data-id="collapsed-sidebar">
                                                <span>Collapsed sidebar</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html#" data-click="set-layout" data-id="off-canvas">
                                                <span>Off canvas</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html#" data-click="set-layout" data-id="left-sidebar-over">
                                                <span>Left sidebar over</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html#" data-click="set-layout" data-id="left-sidebar-under">
                                                <span>Left sidebar under</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html#" data-click="set-layout" data-id="horizontal-navigation-1">
                                                <span>Horizontal navigation 1</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html#" data-click="set-layout" data-id="horizontal-navigation-2">
                                                <span>Horizontal navigation 2</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html#" data-click="set-layout" data-id="horizontal-navigation-3">
                                                <span>Horizontal navigation 3</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html#" data-click="set-layout" data-id="mega-menu">
                                                <span>Mega menu</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-star md-icon pull-left"></i> 
                                        <span>Widgets</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="http://localhost:8003/widgets-activity-widgets.php">
                                                <span>Activity widgets</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/widgets-form-widgets.php">
                                                <span>Form widgets</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/widgets-social-widgets.php">
                                                <span>Social widgets</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/widgets-text-widgets.php">
                                                <span>Text widgets</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/widgets-timeline-widgets.php">
                                                <span>Timeline widgets</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="http://localhost:8003/widgets-user-widgets.php">
                                                <span>User widgets</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-cubes md-icon pull-left"></i> 
                                        <span>UI</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="ui-elements-timers-and-counters.html">
                                                <span>Timers and counters</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-images.html">
                                                <span>Images</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-overlays.html">
                                                <span>Overlays</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-lists.html">
                                                <span>Lists</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-typography.html">
                                                <span>Typography</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-buttons.html">
                                                <span>Buttons</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-labels.html">
                                                <span>Labels</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-progress-bars.html">
                                                <span>Progress Bars</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-carousel.html">
                                                <span>Carousel</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-tabs.html">
                                                <span>Tabs</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-grid.html">
                                                <span>Grid</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-alerts-and-notifications.html">
                                                <span>Alerts &amp; notifications</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-animations.html">
                                                <span>Animations</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-breadcrumbs.html">
                                                <span>Breadcrumbs</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-google-maps.html">
                                                <span>Google Maps</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-vector-maps.html">
                                                <span>Vector Maps</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-cards.html">
                                                <span>Cards</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="ui-elements-dropdowns.html">
                                                <span>Dropdowns</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-drag-and-drop.html">
                                                <span>Drag and drop</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-elements-other-elements.html">
                                                <span>Other elements</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-adjust md-icon pull-left"></i> 
                                        <span>Utilities</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="utilities-color-utilities.html">
                                                <span>Color utilities</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="utilities-border-utilities.html">
                                                <span>Border utilities</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="utilities-height-utilities.html">
                                                <span>Height utilities</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="utilities-margin-utilities.html">
                                                <span>Margin Utilities</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="utilities-other-utilities.html">
                                                <span>Other utilities</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="utilities-padding-utilities.html">
                                                <span>Padding utilities</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="utilities-position-utilities.html">
                                                <span>Position utilities</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="utilities-text-utilities.html">
                                                <span>Text utilities</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="utilities-width-utilities.html">
                                                <span>Width utilities</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-asterisk md-icon pull-left"></i> 
                                        <span>Icons</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="icons-font-awesome.html">
                                                <span>Font Awesome</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="icons-ionicons.html">
                                                <span>Ionicons</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="icons-emoji.html">
                                                <span>Emoji</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="icons-flags.html">
                                                <span>Flags</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="icons-material-design-icons.html">
                                                <span>Material Design Icons</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="icons-weather-icons.html">
                                                <span>Weather Icons</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-folder-open md-icon pull-left"></i> 
                                        <span>Forms</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="forms-basic.html">
                                                <span>Basic forms</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="forms-sample.html">
                                                <span>Sample forms</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="forms-validation.html">
                                                <span>Form Validation</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="forms-file-uploads.html">
                                                <span>File Uploads</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="forms-text-editor.html">
                                                <span>Text editor</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="forms-pickers.html">
                                                <span>Pickers</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="forms-nouislider.html">
                                                <span>NoUiSlider</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-table md-icon pull-left"></i> 
                                        <span>Tables</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="tables-static.html">
                                                <span>Static Tables</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="tables-datatable.html">
                                                <span>Datatable</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="tables-sortable.html">
                                                <span>Sortable</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-shopping-cart md-icon pull-left"></i> 
                                        <span>e-Commerce</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="e-commerce-dashboard.html">
                                                <span>Dashboard</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="e-commerce-orders.html">
                                                <span>Orders</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="e-commerce-order.html">
                                                <span>Order</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="e-commerce-products.html">
                                                <span>Products</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="e-commerce-product.html">
                                                <span>Product</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="e-commerce-customers.html">
                                                <span>Customers</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-envelope md-icon pull-left"></i> 
                                        <span>Email</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="email-inbox.html">
                                                <span>Inbox</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="email-view.html">
                                                <span>View email</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="email-compose.html">
                                                <span>Compose email</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-line-chart md-icon pull-left"></i> 
                                        <span>Charts</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="charts-nvd3.html">
                                                <span>NVD3</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="charts-chartist.html">
                                                <span>Chartist</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="charts-chart-js.html">
                                                <span>Chart.js</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="charts-easy-pie-chart.html">
                                                <span>Easy Pie Chart</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="charts-jquery-knob.html">
                                                <span>jQuery Knob</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a href="charts-gauge.html">
                                                <span>Gauges</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-file md-icon pull-left"></i> 
                                        <span>Pages</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="pages-error-page.html">
                                                <span>Error page</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="pages-empty-page.html">
                                                <span>Empty Page</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="pages-login.html">
                                                <span>Login</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="pages-register.html">
                                                <span>Register</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="pages-forgot-password.html">
                                                <span>Forgot Password</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="pages-lock-screen.html">
                                                <span>Lock Screen</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="pages-profile.html">
                                                <span>User profile</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="pages-coming-soon.html">
                                                <span>Coming soon</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="pages-under-maintenance.html">
                                                <span>Under maintenance</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title">
                                        <i class="fa fa-bolt md-icon pull-left"></i> 
                                        <span>Extras</span> 
                                    </a>
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="extras-invoice.html">
                                                <span>Invoice</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="extras-zoom.html">
                                                <span>Zoom</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="extras-search-results.html">
                                                <span>Search Results</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="extras-pricing-tables.html">
                                                <span>Pricing tables</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="extras-wow.html">
                                                <span>Wow</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="extras-syntax-highlighting.html">
                                                <span>Syntax highlighting</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="extras-calendar.html">
                                                <span>Calendar</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="extras-crop.html">
                                                <span>Image cropping</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="extras-mousetrap.html">
                                                <span>Mousetrap</span> 
                                            </a>
                                        </li>
                                        <li>

                                            <a href="extras-typed.html">
                                                <span>Typed.js</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="list-unstyled">
                                <li>

                                    <a class="title" href="documentation.html">
                                        <i class="fa fa-info-circle md-icon pull-left"></i> 
                                        <span>Docs</span> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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
            <li class="nav-item">

                <a class="nav-link" data-click="toggle-theme-selector">
                    <i class="zmdi zmdi-settings"></i> 
                </a>
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
        <ul class="nav navbar-nav pull-right hidden-lg-down navbar-profile">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle no-after" data-toggle="dropdown">

                    <img class="img-circle img-fluid profile-image" src="assets/faces/m1.png">
                </a>
                <div class="dropdown-menu dropdown-no-overflow animation-delay">

                    <a class="dropdown-item animated fadeIn" href="email-inbox.html">
                        <i class="zmdi zmdi-email"></i> 
                        <span class="label label-pill label-danger label-xs pull-right">New</span> 
                        <span class="dropdown-text">Inbox</span> 
                    </a>

                    <a class="dropdown-item animated fadeIn" href="pages-profile.html">
                        <i class="zmdi zmdi-settings-square"></i> 
                        <span class="dropdown-text">Profile</span> 
                    </a>

                    <a class="dropdown-item animated fadeIn" href="pages-lock-screen.html">
                        <i class="zmdi zmdi-alarm"></i> 
                        <span class="dropdown-text">Lock screen</span> 
                    </a>

                    <a class="dropdown-item animated fadeIn" href="pages-login.html">
                        <i class="zmdi zmdi-power"></i> 
                        <span class="dropdown-text">Logout</span> 
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="theme-selector">
        <p>Select theme</p>
        <div class="select-palette">
            <div class="color-palette" data-click="set-palette" data-id="palette-1"> <span class="color-block" style="background: #0283f1"></span>  <span class="color-block" style="background: #0267bf"></span>  <span class="color-block" style="background: #f0ad4e"></span> 
            </div>
            <div class="color-palette" data-click="set-palette" data-id="palette-2"> <span class="color-block" style="background: #003b84"></span>  <span class="color-block" style="background: #002451"></span>  <span class="color-block" style="background: #f0ad4e"></span> 
            </div>
            <div class="color-palette" data-click="set-palette" data-id="palette-3"> <span class="color-block" style="background: #3c414f"></span>  <span class="color-block" style="background: #262932"></span>  <span class="color-block" style="background: #5cb85c"></span> 
            </div>
            <div class="color-palette" data-click="set-palette" data-id="palette-4"> <span class="color-block" style="background: #1a1a1a"></span>  <span class="color-block" style="background: #000000"></span>  <span class="color-block" style="background: #5cb85c"></span> 
            </div>
            <div class="color-palette" data-click="set-palette" data-id="palette-5"> <span class="color-block" style="background: #602697"></span>  <span class="color-block" style="background: #461C6E"></span>  <span class="color-block" style="background: #f0ad4e"></span> 
            </div>
            <div class="color-palette" data-click="set-palette" data-id="palette-6"> <span class="color-block" style="background: #0283f1"></span>  <span class="color-block" style="background: #ffffff"></span>  <span class="color-block" style="background: #d9534f"></span> 
            </div>
            <div class="color-palette" data-click="set-palette" data-id="palette-7"> <span class="color-block" style="background: #003b84"></span>  <span class="color-block" style="background: #ffffff"></span>  <span class="color-block" style="background: #d9534f"></span> 
            </div>
            <div class="color-palette" data-click="set-palette" data-id="palette-8"> <span class="color-block" style="background: #1a1a1a"></span>  <span class="color-block" style="background: #ffffff"></span>  <span class="color-block" style="background: #d9534f"></span> 
            </div>
            <div class="color-palette" data-click="set-palette" data-id="palette-9"> <span class="color-block" style="background: #602697"></span>  <span class="color-block" style="background: #ffffff"></span>  <span class="color-block" style="background: #d9534f"></span> 
            </div>
        </div>
    </div>
    <div class="horizontal-navigation horizontal-navigation-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="p-t-20 p-b-20">
                        <ol class="breadcrumb icon-angle-right animation-delay">
                            <li class="wow fadeIn">Home</li>
                            <li class="wow fadeIn">Dashboard</li>
                            <li class="wow fadeIn active">Welcome</li>
                        </ol>
                        <div class="description">
                            <h3 class="wow fadeIn delay-1000">Dashboard</h3> 
                            <p class="wow fadeIn delay-1200">Welcome</p>
                        </div>
                        <ul class="list-unstyled navigation animation-delay">
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary" href="index-2.html">Dashboard</a> 
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Layouts</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="default-sidebar">Default sidebar</a> 
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="collapsed-sidebar">Collapsed sidebar</a> 
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="off-canvas">Off canvas</a> 
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="left-sidebar-over">Left sidebar over</a> 

                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="left-sidebar-under">Left sidebar under</a> 
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="horizontal-navigation-1">Horizontal navigation 1</a> 

                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="horizontal-navigation-2">Horizontal navigation 2</a> 
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="horizontal-navigation-3">Horizontal navigation 3</a> 
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="mega-menu">Mega menu</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary" href="widgets-all-widgets.html">Widgets</a> 
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">UI</a> 
                                <div class="horizontal-dropdown-menu horizontal-dropdown-menu-lg">
                                    <a class="btn btn-primary sideline" href="ui-elements-timers-and-counters.html">Timers and counters</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-images.html">Images</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-overlays.html">Overlays</a> 

                                    <a class="btn btn-primary sideline" href="ui-elements-lists.html">Lists</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-typography.html">Typography</a> 

                                    <a class="btn btn-primary sideline" href="ui-elements-buttons.html">Buttons</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-labels.html">Labels</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-progress-bars.html">Progress Bars</a> 

                                    <a class="btn btn-primary sideline" href="ui-elements-carousel.html">Carousel</a>

                                    <a class="btn btn-primary sideline" href="ui-elements-tabs.html">Tabs</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-grid.html">Grid</a> 

                                    <a class="btn btn-primary sideline" href="ui-elements-alerts-and-notifications.html">Alerts &amp; notifications</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-animations.html">Animations</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-breadcrumbs.html">Breadcrumbs</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-google-maps.html">Google Maps</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-vector-maps.html">Vector Maps</a> 

                                    <a class="btn btn-primary sideline" href="ui-elements-cards.html">Cards</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-dropdowns.html">Dropdowns</a> 

                                    <a class="btn btn-primary sideline" href="ui-elements-drag-and-drop.html">Drag and drop</a>
                                    <a class="btn btn-primary sideline" href="ui-elements-other-elements.html">Other elements</a>
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Utilities</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="utilities-color-utilities.html">Color utilities</a> 
                                    <a class="btn btn-primary sideline" href="utilities-border-utilities.html">Border utilities</a> 
                                    <a class="btn btn-primary sideline" href="utilities-height-utilities.html">Height utilities</a> 

                                    <a class="btn btn-primary sideline" href="utilities-margin-utilities.html">Margin Utilities</a> 
                                    <a class="btn btn-primary sideline" href="utilities-other-utilities.html">Other utilities</a> 
                                    <a class="btn btn-primary sideline" href="utilities-padding-utilities.html">Padding utilities</a> 
                                    <a class="btn btn-primary sideline" href="utilities-position-utilities.html">Position utilities</a> 

                                    <a class="btn btn-primary sideline" href="utilities-text-utilities.html">Text utilities</a> 
                                    <a class="btn btn-primary sideline" href="utilities-width-utilities.html">Width utilities</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Icons</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="icons-font-awesome.html">Font Awesome</a> 
                                    <a class="btn btn-primary sideline" href="icons-ionicons.html">Ionicons</a> 
                                    <a class="btn btn-primary sideline" href="icons-emoji.html">Emoji</a> 

                                    <a class="btn btn-primary sideline" href="icons-flags.html">Flags</a> 
                                    <a class="btn btn-primary sideline" href="icons-material-design-icons.html">Material Design Icons</a> 

                                    <a class="btn btn-primary sideline" href="icons-weather-icons.html">Weather Icons</a>
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Forms</a> 
                                <div class="horizontal-dropdown-menu horizontal-dropdown-menu-lg">
                                    <a class="btn btn-primary sideline" href="forms-basic.html">Basic forms</a> 
                                    <a class="btn btn-primary sideline" href="forms-sample.html">Sample forms</a> 

                                    <a class="btn btn-primary sideline" href="forms-validation.html">Form Validation</a> 
                                    <a class="btn btn-primary sideline" href="forms-file-uploads.html">File Uploads</a> 

                                    <a class="btn btn-primary sideline" href="forms-text-editor.html">Text editor</a> 
                                    <a class="btn btn-primary sideline" href="forms-pickers.html">Pickers</a> 

                                    <a class="btn btn-primary sideline" href="forms-nouislider.html">NoUiSlider</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Tables</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="tables-static.html">Static Tables</a> 
                                    <a class="btn btn-primary sideline" href="tables-datatable.html">Datatable</a> 
                                    <a class="btn btn-primary sideline" href="tables-sortable.html">Sortable</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">e-Commerce</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="e-commerce-dashboard.html">Dashboard</a> 
                                    <a class="btn btn-primary sideline" href="e-commerce-orders.html">Orders</a> 
                                    <a class="btn btn-primary sideline" href="e-commerce-order.html">Order</a> 

                                    <a class="btn btn-primary sideline" href="e-commerce-products.html">Products</a> 
                                    <a class="btn btn-primary sideline" href="e-commerce-product.html">Product</a> 
                                    <a class="btn btn-primary sideline" href="e-commerce-customers.html">Customers</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Email</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="email-inbox.html">Inbox</a> 
                                    <a class="btn btn-primary sideline" href="email-view.html">View email</a> 

                                    <a class="btn btn-primary sideline" href="email-compose.html">Compose email</a>
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Charts</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="charts-nvd3.html">NVD3</a> 
                                    <a class="btn btn-primary sideline" href="charts-chartist.html">Chartist</a> 

                                    <a class="btn btn-primary sideline" href="charts-chart-js.html">Chart.js</a> 
                                    <a class="btn btn-primary sideline" href="charts-easy-pie-chart.html">Easy Pie Chart</a> 
                                    <a class="btn btn-primary sideline" href="charts-jquery-knob.html">jQuery Knob</a> 
                                    <a class="btn btn-primary sideline" href="charts-gauge.html">Gauge</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Pages</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="pages-error-page.html">Error page</a> 
                                    <a class="btn btn-primary sideline" href="pages-empty-page.html">Empty Page</a> 
                                    <a class="btn btn-primary sideline" href="pages-login.html">Login</a> 

                                    <a class="btn btn-primary sideline" href="pages-register.html">Register</a> 
                                    <a class="btn btn-primary sideline" href="pages-forgot-password.html">Forgot Password</a> 

                                    <a class="btn btn-primary sideline" href="pages-lock-screen.html">Lock Screen</a> 
                                    <a class="btn btn-primary sideline" href="pages-profile.html">User profile</a> 
                                    <a class="btn btn-primary sideline" href="pages-coming-soon.html">Coming soon</a> 

                                    <a class="btn btn-primary sideline" href="pages-under-maintenance.html">Under maintenance</a>
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Extras</a> 
                                <div class="horizontal-dropdown-menu horizontal-dropdown-menu-lg">
                                    <a class="btn btn-primary sideline" href="extras-invoice.html">Invoice</a> 
                                    <a class="btn btn-primary sideline" href="extras-zoom.html">Zoom</a> 

                                    <a class="btn btn-primary sideline" href="extras-search-results.html">Search Results</a> 

                                    <a class="btn btn-primary sideline" href="extras-pricing-tables.html">Pricing tables</a> 
                                    <a class="btn btn-primary sideline" href="extras-wow.html">Wow</a> 
                                    <a class="btn btn-primary sideline" href="extras-syntax-highlighting.html">Syntax highlighting</a> 

                                    <a class="btn btn-primary sideline" href="extras-calendar.html">Calendar</a> 
                                    <a class="btn btn-primary sideline" href="extras-crop.html">Image cropping</a> 
                                    <a class="btn btn-primary sideline" href="extras-mousetrap.html">Mousetrap</a> 

                                    <a class="btn btn-primary sideline" href="extras-typed.html">Typed.js</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary" href="documentation.html">Docs</a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal-navigation horizontal-navigation-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="p-t-20 p-b-20">
                        <ol class="breadcrumb icon-angle-right animation-delay">
                            <li class="wow fadeIn">Home</li>
                            <li class="wow fadeIn">Dashboard</li>
                            <li class="wow fadeIn active">Welcome</li>
                        </ol>
                        <div class="description">
                            <h3 class="wow fadeIn delay-1000">Dashboard</h3> 
                            <p class="wow fadeIn delay-1200">Welcome</p>
                        </div>
                        <ul class="list-unstyled navigation animation-delay">
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary" href="index-2.html">Dashboard</a> 
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Layouts</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="default-sidebar">Default sidebar</a> 
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="collapsed-sidebar">Collapsed sidebar</a> 
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="off-canvas">Off canvas</a> 
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="left-sidebar-over">Left sidebar over</a> 

                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="left-sidebar-under">Left sidebar under</a> 
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="horizontal-navigation-1">Horizontal navigation 1</a> 

                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="horizontal-navigation-2">Horizontal navigation 2</a> 
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="horizontal-navigation-3">Horizontal navigation 3</a> 
                                    <a class="btn btn-primary sideline" data-click="set-layout" data-id="mega-menu">Mega menu</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary" href="widgets-all-widgets.html">Widgets</a> 
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">UI</a> 
                                <div class="horizontal-dropdown-menu horizontal-dropdown-menu-lg">
                                    <a class="btn btn-primary sideline" href="ui-elements-timers-and-counters.html">Timers and counters</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-images.html">Images</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-overlays.html">Overlays</a> 

                                    <a class="btn btn-primary sideline" href="ui-elements-lists.html">Lists</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-typography.html">Typography</a> 

                                    <a class="btn btn-primary sideline" href="ui-elements-buttons.html">Buttons</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-labels.html">Labels</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-progress-bars.html">Progress Bars</a> 

                                    <a class="btn btn-primary sideline" href="ui-elements-carousel.html">Carousel</a>

                                    <a class="btn btn-primary sideline" href="ui-elements-tabs.html">Tabs</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-grid.html">Grid</a> 

                                    <a class="btn btn-primary sideline" href="ui-elements-alerts-and-notifications.html">Alerts &amp; notifications</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-animations.html">Animations</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-breadcrumbs.html">Breadcrumbs</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-google-maps.html">Google Maps</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-vector-maps.html">Vector Maps</a> 

                                    <a class="btn btn-primary sideline" href="ui-elements-cards.html">Cards</a> 
                                    <a class="btn btn-primary sideline" href="ui-elements-dropdowns.html">Dropdowns</a> 

                                    <a class="btn btn-primary sideline" href="ui-elements-drag-and-drop.html">Drag and drop</a>
                                    <a class="btn btn-primary sideline" href="ui-elements-other-elements.html">Other elements</a>
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Utilities</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="utilities-color-utilities.html">Color utilities</a> 
                                    <a class="btn btn-primary sideline" href="utilities-border-utilities.html">Border utilities</a> 
                                    <a class="btn btn-primary sideline" href="utilities-height-utilities.html">Height utilities</a> 

                                    <a class="btn btn-primary sideline" href="utilities-margin-utilities.html">Margin Utilities</a> 
                                    <a class="btn btn-primary sideline" href="utilities-other-utilities.html">Other utilities</a> 
                                    <a class="btn btn-primary sideline" href="utilities-padding-utilities.html">Padding utilities</a> 
                                    <a class="btn btn-primary sideline" href="utilities-position-utilities.html">Position utilities</a> 

                                    <a class="btn btn-primary sideline" href="utilities-text-utilities.html">Text utilities</a> 
                                    <a class="btn btn-primary sideline" href="utilities-width-utilities.html">Width utilities</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Icons</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="icons-font-awesome.html">Font Awesome</a> 
                                    <a class="btn btn-primary sideline" href="icons-ionicons.html">Ionicons</a> 
                                    <a class="btn btn-primary sideline" href="icons-emoji.html">Emoji</a> 

                                    <a class="btn btn-primary sideline" href="icons-flags.html">Flags</a> 
                                    <a class="btn btn-primary sideline" href="icons-material-design-icons.html">Material Design Icons</a> 

                                    <a class="btn btn-primary sideline" href="icons-weather-icons.html">Weather Icons</a>
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Forms</a> 
                                <div class="horizontal-dropdown-menu horizontal-dropdown-menu-lg">
                                    <a class="btn btn-primary sideline" href="forms-basic.html">Basic forms</a> 
                                    <a class="btn btn-primary sideline" href="forms-sample.html">Sample forms</a> 

                                    <a class="btn btn-primary sideline" href="forms-validation.html">Form Validation</a> 
                                    <a class="btn btn-primary sideline" href="forms-file-uploads.html">File Uploads</a> 

                                    <a class="btn btn-primary sideline" href="forms-text-editor.html">Text editor</a> 
                                    <a class="btn btn-primary sideline" href="forms-pickers.html">Pickers</a> 

                                    <a class="btn btn-primary sideline" href="forms-nouislider.html">NoUiSlider</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Tables</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="tables-static.html">Static Tables</a> 
                                    <a class="btn btn-primary sideline" href="tables-datatable.html">Datatable</a> 
                                    <a class="btn btn-primary sideline" href="tables-sortable.html">Sortable</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">e-Commerce</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="e-commerce-dashboard.html">Dashboard</a> 
                                    <a class="btn btn-primary sideline" href="e-commerce-orders.html">Orders</a> 
                                    <a class="btn btn-primary sideline" href="e-commerce-order.html">Order</a> 

                                    <a class="btn btn-primary sideline" href="e-commerce-products.html">Products</a> 
                                    <a class="btn btn-primary sideline" href="e-commerce-product.html">Product</a> 
                                    <a class="btn btn-primary sideline" href="e-commerce-customers.html">Customers</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Email</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="email-inbox.html">Inbox</a> 
                                    <a class="btn btn-primary sideline" href="email-view.html">View email</a> 

                                    <a class="btn btn-primary sideline" href="email-compose.html">Compose email</a>
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Charts</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="charts-nvd3.html">NVD3</a> 
                                    <a class="btn btn-primary sideline" href="charts-chartist.html">Chartist</a> 

                                    <a class="btn btn-primary sideline" href="charts-chart-js.html">Chart.js</a> 
                                    <a class="btn btn-primary sideline" href="charts-easy-pie-chart.html">Easy Pie Chart</a> 
                                    <a class="btn btn-primary sideline" href="charts-jquery-knob.html">jQuery Knob</a> 
                                    <a class="btn btn-primary sideline" href="charts-gauge.html">Gauge</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Pages</a> 
                                <div class="horizontal-dropdown-menu">
                                    <a class="btn btn-primary sideline" href="pages-error-page.html">Error page</a> 
                                    <a class="btn btn-primary sideline" href="pages-empty-page.html">Empty Page</a> 
                                    <a class="btn btn-primary sideline" href="pages-login.html">Login</a> 

                                    <a class="btn btn-primary sideline" href="pages-register.html">Register</a> 
                                    <a class="btn btn-primary sideline" href="pages-forgot-password.html">Forgot Password</a> 

                                    <a class="btn btn-primary sideline" href="pages-lock-screen.html">Lock Screen</a> 
                                    <a class="btn btn-primary sideline" href="pages-profile.html">User profile</a> 
                                    <a class="btn btn-primary sideline" href="pages-coming-soon.html">Coming soon</a> 

                                    <a class="btn btn-primary sideline" href="pages-under-maintenance.html">Under maintenance</a>
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary">Extras</a> 
                                <div class="horizontal-dropdown-menu horizontal-dropdown-menu-lg">
                                    <a class="btn btn-primary sideline" href="extras-invoice.html">Invoice</a> 
                                    <a class="btn btn-primary sideline" href="extras-zoom.html">Zoom</a> 

                                    <a class="btn btn-primary sideline" href="extras-search-results.html">Search Results</a> 

                                    <a class="btn btn-primary sideline" href="extras-pricing-tables.html">Pricing tables</a> 
                                    <a class="btn btn-primary sideline" href="extras-wow.html">Wow</a> 
                                    <a class="btn btn-primary sideline" href="extras-syntax-highlighting.html">Syntax highlighting</a> 

                                    <a class="btn btn-primary sideline" href="extras-calendar.html">Calendar</a> 
                                    <a class="btn btn-primary sideline" href="extras-crop.html">Image cropping</a> 
                                    <a class="btn btn-primary sideline" href="extras-mousetrap.html">Mousetrap</a> 

                                    <a class="btn btn-primary sideline" href="extras-typed.html">Typed.js</a> 
                                </div>
                            </li>
                            <li class="horizontal-navigation-dropdown wow fadeIn">
                                <a class="btn btn-primary" href="documentation.html">Docs</a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal-navigation horizontal-navigation-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="list-unstyled navigation">
                        <li class="horizontal-navigation-dropdown">
                          <a class="btn btn-primary" href="index-2.html">Dashboard</a> 
                      </li>
                      <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary">Layouts</a> 
                        <div class="horizontal-dropdown-menu">
                            <a class="btn btn-primary sideline" data-click="set-layout" data-id="default-sidebar">Default sidebar</a> 
                            <a class="btn btn-primary sideline" data-click="set-layout" data-id="collapsed-sidebar">Collapsed sidebar</a> 
                            <a class="btn btn-primary sideline" data-click="set-layout" data-id="off-canvas">Off canvas</a> 
                            <a class="btn btn-primary sideline" data-click="set-layout" data-id="left-sidebar-over">Left sidebar over</a> 
                            <a class="btn btn-primary sideline" data-click="set-layout" data-id="left-sidebar-under">Left sidebar under</a> 
                            <a class="btn btn-primary sideline" data-click="set-layout" data-id="horizontal-navigation-1">Horizontal navigation 1</a> 
                            <a class="btn btn-primary sideline" data-click="set-layout" data-id="horizontal-navigation-2">Horizontal navigation 2</a> 
                            <a class="btn btn-primary sideline" data-click="set-layout" data-id="horizontal-navigation-3">Horizontal navigation 3</a> 

                            <a class="btn btn-primary sideline" data-click="set-layout" data-id="mega-menu">Mega menu</a>
                        </div>
                    </li>
                    <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary" href="widgets-all-widgets.html">Widgets</a> 
                    </li>
                    <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary">UI</a> 
                        <div class="horizontal-dropdown-menu horizontal-dropdown-menu-lg">
                            <a class="btn btn-primary sideline" href="ui-elements-timers-and-counters.html">Timers and counters</a> 
                            <a class="btn btn-primary sideline" href="ui-elements-images.html">Images</a> 
                            <a class="btn btn-primary sideline" href="ui-elements-overlays.html">Overlays</a> 

                            <a class="btn btn-primary sideline" href="ui-elements-lists.html">Lists</a> 
                            <a class="btn btn-primary sideline" href="ui-elements-typography.html">Typography</a> 

                            <a class="btn btn-primary sideline" href="ui-elements-buttons.html">Buttons</a> 
                            <a class="btn btn-primary sideline" href="ui-elements-labels.html">Labels</a> 
                            <a class="btn btn-primary sideline" href="ui-elements-progress-bars.html">Progress Bars</a> 

                            <a class="btn btn-primary sideline" href="ui-elements-carousel.html">Carousel</a>

                            <a class="btn btn-primary sideline" href="ui-elements-tabs.html">Tabs</a> 
                            <a class="btn btn-primary sideline" href="ui-elements-grid.html">Grid</a> 

                            <a class="btn btn-primary sideline" href="ui-elements-alerts-and-notifications.html">Alerts &amp; notifications</a> 
                            <a class="btn btn-primary sideline" href="ui-elements-animations.html">Animations</a> 
                            <a class="btn btn-primary sideline" href="ui-elements-breadcrumbs.html">Breadcrumbs</a> 
                            <a class="btn btn-primary sideline" href="ui-elements-google-maps.html">Google Maps</a> 
                            <a class="btn btn-primary sideline" href="ui-elements-vector-maps.html">Vector Maps</a> 

                            <a class="btn btn-primary sideline" href="ui-elements-cards.html">Cards</a> 
                            <a class="btn btn-primary sideline" href="ui-elements-dropdowns.html">Dropdowns</a> 

                            <a class="btn btn-primary sideline" href="ui-elements-drag-and-drop.html">Drag and drop</a>
                            <a class="btn btn-primary sideline" href="ui-elements-other-elements.html">Other elements</a>
                        </div>
                    </li>
                    <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary">Utilities</a> 
                        <div class="horizontal-dropdown-menu">
                            <a class="btn btn-primary sideline" href="utilities-color-utilities.html">Color utilities</a> 
                            <a class="btn btn-primary sideline" href="utilities-border-utilities.html">Border utilities</a> 
                            <a class="btn btn-primary sideline" href="utilities-height-utilities.html">Height utilities</a> 

                            <a class="btn btn-primary sideline" href="utilities-margin-utilities.html">Margin Utilities</a> 
                            <a class="btn btn-primary sideline" href="utilities-other-utilities.html">Other utilities</a> 
                            <a class="btn btn-primary sideline" href="utilities-padding-utilities.html">Padding utilities</a> 

                            <a class="btn btn-primary sideline" href="utilities-position-utilities.html">Position utilities</a>

                            <a class="btn btn-primary sideline" href="utilities-text-utilities.html">Text utilities</a> 
                            <a class="btn btn-primary sideline" href="utilities-width-utilities.html">Width utilities</a> 
                        </div>
                    </li>
                    <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary">Icons</a> 
                        <div class="horizontal-dropdown-menu">
                            <a class="btn btn-primary sideline" href="icons-font-awesome.html">Font Awesome</a> 
                            <a class="btn btn-primary sideline" href="icons-ionicons.html">Ionicons</a> 
                            <a class="btn btn-primary sideline" href="icons-emoji.html">Emoji</a> 

                            <a class="btn btn-primary sideline" href="icons-flags.html">Flags</a> 
                            <a class="btn btn-primary sideline" href="icons-material-design-icons.html">Material Design Icons</a> 
                            <a class="btn btn-primary sideline" href="icons-weather-icons.html">Weather Icons</a> 
                        </div>
                    </li>
                    <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary">Forms</a> 
                        <div class="horizontal-dropdown-menu horizontal-dropdown-menu-lg">
                            <a class="btn btn-primary sideline" href="forms-basic.html">Basic forms</a> 
                            <a class="btn btn-primary sideline" href="forms-sample.html">Sample forms</a> 

                            <a class="btn btn-primary sideline" href="forms-validation.html">Form Validation</a> 
                            <a class="btn btn-primary sideline" href="forms-file-uploads.html">File Uploads</a> 
                            <a class="btn btn-primary sideline" href="forms-text-editor.html">Text editor</a> 
                            <a class="btn btn-primary sideline" href="forms-pickers.html">Pickers</a> 

                            <a class="btn btn-primary sideline" href="forms-nouislider.html">NoUiSlider</a> 

                        </div>
                    </li>
                    <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary">Tables</a> 
                        <div class="horizontal-dropdown-menu">
                            <a class="btn btn-primary sideline" href="tables-static.html">Static Tables</a> 
                            <a class="btn btn-primary sideline" href="tables-datatable.html">Datatable</a> 
                            <a class="btn btn-primary sideline" href="tables-sortable.html">Sortable</a> 

                        </div>
                    </li>
                    <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary">e-Commerce</a> 
                        <div class="horizontal-dropdown-menu">
                            <a class="btn btn-primary sideline" href="e-commerce-dashboard.html">Dashboard</a> 
                            <a class="btn btn-primary sideline" href="e-commerce-orders.html">Orders</a> 
                            <a class="btn btn-primary sideline" href="e-commerce-order.html">Order</a> 

                            <a class="btn btn-primary sideline" href="e-commerce-products.html">Products</a> 
                            <a class="btn btn-primary sideline" href="e-commerce-product.html">Product</a> 
                            <a class="btn btn-primary sideline" href="e-commerce-customers.html">Customers</a> 
                        </div>
                    </li>
                    <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary">Email</a> 
                        <div class="horizontal-dropdown-menu">
                            <a class="btn btn-primary sideline" href="email-inbox.html">Inbox</a> 
                            <a class="btn btn-primary sideline" href="email-view.html">View email</a> 

                            <a class="btn btn-primary sideline" href="email-compose.html">Compose email</a>
                        </div>
                    </li>
                    <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary">Charts</a> 
                        <div class="horizontal-dropdown-menu">
                            <a class="btn btn-primary sideline" href="charts-nvd3.html">NVD3</a> 
                            <a class="btn btn-primary sideline" href="charts-chartist.html">Chartist</a> 

                            <a class="btn btn-primary sideline" href="charts-chart-js.html">Chart.js</a> 
                            <a class="btn btn-primary sideline" href="charts-easy-pie-chart.html">Easy Pie Chart</a> 
                            <a class="btn btn-primary sideline" href="charts-gauge.html">Gauge</a> 
                        </div>
                    </li>
                    <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary">Pages</a> 
                        <div class="horizontal-dropdown-menu">
                            <a class="btn btn-primary sideline" href="pages-error-page.html">Error page</a> 
                            <a class="btn btn-primary sideline" href="pages-empty-page.html">Empty Page</a> 
                            <a class="btn btn-primary sideline" href="pages-login.html">Login</a> 

                            <a class="btn btn-primary sideline" href="pages-register.html">Register</a> 
                            <a class="btn btn-primary sideline" href="pages-forgot-password.html">Forgot Password</a> 
                            <a class="btn btn-primary sideline" href="pages-lock-screen.html">Lock Screen</a> 
                            <a class="btn btn-primary sideline" href="pages-profile.html">User profile</a> 

                            <a class="btn btn-primary sideline" href="pages-coming-soon.html">Coming soon</a> 
                            <a class="btn btn-primary sideline" href="pages-under-maintenance.html">Under maintenance</a> 
                        </div>
                    </li>
                    <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary">Extras</a> 
                        <div class="horizontal-dropdown-menu horizontal-dropdown-menu-lg">
                            <a class="btn btn-primary sideline" href="extras-invoice.html">Invoice</a> 
                            <a class="btn btn-primary sideline" href="extras-zoom.html">Zoom</a> 

                            <a class="btn btn-primary sideline" href="extras-search-results.html">Search Results</a> 

                            <a class="btn btn-primary sideline" href="extras-pricing-tables.html">Pricing tables</a> 
                            <a class="btn btn-primary sideline" href="extras-wow.html">Wow</a> 
                            <a class="btn btn-primary sideline" href="extras-syntax-highlighting.html">Syntax highlighting</a> 

                            <a class="btn btn-primary sideline" href="extras-calendar.html">Calendar</a> 
                            <a class="btn btn-primary sideline" href="extras-crop.html">Image cropping</a> 
                            <a class="btn btn-primary sideline" href="extras-mousetrap.html">Mousetrap</a> 

                            <a class="btn btn-primary sideline" href="extras-typed.html">Typed.js</a> 
                        </div>
                    </li>
                    <li class="horizontal-navigation-dropdown">
                        <a class="btn btn-primary" href="documentation.html">Docs</a> 
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
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
                            <img class="img-circle img-fluid" src="assets/faces/m1.png">
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
                        <div class="profile-title">Lucas smith</div>
                        <div class="profile-subtitle">lucas.smith@gmail.com</div>
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
                                        <i class="zmdi zmdi-favorite-outline md-icon pull-left"></i> 
                                        <span class="title">Favorites</span> 
                                    </a>
                                </li>
                                <li>
                                    <a class="sideline">
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
                                    <a class="sideline" href="index-2.html">
                                        <i class="zmdi zmdi-view-dashboard md-icon pull-left"></i> 
                                        <span class="title">Dashboard</span> 
                                    </a>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" data-id="layouts" data-click="toggle-section">
                                        <i class="pull-right fa fa-caret-down icon-layouts"></i> 
                                        <span class="pull-right label label-info label-rounded">9</span> 
                                        <i class="zmdi zmdi-collection-image-o md-icon pull-left"></i> 
                                        <span class="title">Layouts</span> 
                                    </a>
                                    <ul class="list-unstyled section-layouts l2">
                                        <li>
                                            <a class="sideline" data-id="default-sidebar" data-click="set-layout">
                                                <span class="title"> Default sidebar </span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" data-id="collapsed-sidebar" data-click="set-layout">
                                                <span class="title"> Collapsed sidebar </span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" data-id="off-canvas" data-click="set-layout">
                                                <span class="title"> Off canvas </span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" data-id="left-sidebar-over" data-click="set-layout">
                                                <span class="title"> Left sidebar over </span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" data-id="left-sidebar-under" data-click="set-layout">
                                                <span class="title"> Left sidebar under </span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" data-id="horizontal-navigation-1" data-click="set-layout">
                                                <span class="title"> Horizontal navigation 1 </span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" data-id="horizontal-navigation-2" data-click="set-layout">
                                                <span class="title"> Horizontal navigation 2 </span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" data-id="horizontal-navigation-3" data-click="set-layout">
                                                <span class="title"> Horizontal navigation 3 </span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" data-id="mega-menu" data-click="set-layout">
                                                <span class="title"> Mega menu </span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" href="widgets-all-widgets.html">
                                        <i class="zmdi zmdi-star-circle md-icon pull-left"></i> 
                                        <span class="title">Widgets</span> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-section">
                            <div class="section-title hidden">Theme Components</div>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" data-id="ui" data-click="toggle-section">
                                        <i class="pull-right fa fa-caret-down icon-ui"></i> 
                                        <span class="pull-right label label-danger label-rounded">21</span> 
                                        <i class="zmdi zmdi-labels md-icon pull-left"></i> 
                                        <span class="title">UI</span> 
                                    </a>
                                    <ul class="list-unstyled section-ui l2">
                                        <li>
                                            <a class="sideline" href="ui-elements-timers-and-counters.html">
                                                <span class="title">Timers and counters</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-images.html">
                                                <span class="title">Images</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-overlays.html">
                                                <span class="title">Overlays</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-lists.html">
                                                <span class="title">Lists</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-typography.html">
                                                <span class="title">Typography</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-buttons.html">
                                                <span class="title">Buttons</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-labels.html">
                                                <span class="title">Labels</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-progress-bars.html">
                                                <span class="title">Progress Bars</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-carousel.html">
                                                <span class="title">Carousel</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-tabs.html">
                                                <span class="title">Tabs</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-grid.html">
                                                <span class="title">Grid</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-alerts-and-notifications.html">
                                                <span class="title">Alerts &amp; notifications</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-animations.html">
                                                <span class="title">Animations</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-breadcrumbs.html">
                                                <span class="title">Breadcrumbs</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-google-maps.html">
                                                <span class="title">Google Maps</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-vector-maps.html">
                                                <span class="title">Vector Maps</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-cards.html">
                                                <span class="title">Cards</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-dropdowns.html">
                                                <span class="title">Dropdowns</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-drag-and-drop.html">
                                                <span class="title">Drag and drop</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="ui-elements-other-elements.html">
                                                <span>Other elements</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" data-id="utilities" data-click="toggle-section">
                                        <i class="pull-right fa fa-caret-down icon-utilities"></i> 
                                        <i class="zmdi zmdi-settings md-icon pull-left"></i> 
                                        <span class="title">Utilities</span> 
                                    </a>
                                    <ul class="list-unstyled section-utilities l2">
                                        <li>
                                            <a class="sideline" href="utilities-color-utilities.html">
                                                <span class="title">Color utilities</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="utilities-border-utilities.html">
                                                <span class="title">Border utilities</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="utilities-height-utilities.html">
                                                <span class="title">Height utilities</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="utilities-margin-utilities.html">
                                                <span class="title">Margin Utilities</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="utilities-other-utilities.html">
                                                <span class="title">Other utilities</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="utilities-padding-utilities.html">
                                                <span class="title">Padding utilities</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="utilities-position-utilities.html">
                                                <span class="title">Position utilities</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="utilities-text-utilities.html">
                                                <span class="title">Text utilities</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="utilities-width-utilities.html">
                                                <span class="title">Width utilities</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" data-id="icons" data-click="toggle-section">
                                        <i class="pull-right fa fa-caret-down icon-icons"></i> 
                                        <i class="zmdi zmdi-flash md-icon pull-left"></i> 
                                        <span class="title">Icons</span> 
                                    </a>
                                    <ul class="list-unstyled section-icons l2">
                                        <li>
                                            <a class="sideline" href="icons-font-awesome.html">
                                                <span class="title">Font Awesome</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="icons-ionicons.html">
                                                <span class="title">Ionicons</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="icons-emoji.html">
                                                <span class="title">Emoji</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="icons-flags.html">
                                                <span class="title">Flags</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="icons-material-design-icons.html">
                                                <span class="title">Material Design Icons</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="icons-weather-icons.html">
                                                <span class="title">Weather Icons</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" data-id="forms" data-click="toggle-section">
                                        <i class="pull-right fa fa-caret-down icon-forms"></i> 
                                        <span class="pull-right label label-success label-pill">New</span> 
                                        <i class="zmdi zmdi-folder-outline md-icon pull-left"></i> 
                                        <span class="title">Forms</span> 
                                    </a>
                                    <ul class="list-unstyled section-forms l2">
                                        <li>
                                            <a class="sideline" href="forms-basic.html">
                                                <span class="title">Basic forms</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="forms-sample.html">
                                                <span class="title">Sample forms</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="forms-validation.html">
                                                <span class="title">Form Validation</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="forms-file-uploads.html">
                                                <span class="title">File Uploads</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="forms-text-editor.html">
                                                <span class="title">Text editor</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="forms-pickers.html">
                                                <span class="title">Pickers</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="forms-nouislider.html">
                                                <span class="title">NoUiSlider</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" data-id="tables" data-click="toggle-section">
                                        <i class="pull-right fa fa-caret-down icon-tables"></i> 
                                        <i class="zmdi zmdi-format-list-numbered md-icon pull-left"></i> 
                                        <span class="title">Tables</span> 
                                    </a>
                                    <ul class="list-unstyled section-tables l2">
                                        <li>
                                            <a class="sideline" href="tables-static.html">
                                                <span class="title">Static Tables</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="tables-datatable.html">
                                                <span class="title">Datatable</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="tables-sortable.html">
                                                <span class="title">Sortable</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" data-id="e-commerce" data-click="toggle-section">
                                        <i class="pull-right fa fa-caret-down icon-e-commerce"></i> 
                                        <i class="zmdi zmdi-shopping-cart md-icon pull-left"></i> 
                                        <span class="title">e-Commerce</span> 
                                    </a>
                                    <ul class="list-unstyled section-e-commerce l2">
                                        <li>
                                            <a class="sideline" href="e-commerce-dashboard.html">
                                                <span class="title">Dashboard</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="e-commerce-orders.html">
                                                <span class="title">Orders</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="e-commerce-order.html">
                                                <span class="title">Order</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="e-commerce-products.html">
                                                <span class="title">Products</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="e-commerce-product.html">
                                                <span class="title">Product</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="e-commerce-customers.html">
                                                <span class="title">Customers</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" data-id="email" data-click="toggle-section">
                                        <i class="pull-right fa fa-caret-down icon-email"></i> 
                                        <i class="zmdi zmdi-email-open md-icon pull-left"></i> 
                                        <span class="title">Email</span> 
                                    </a>
                                    <ul class="list-unstyled section-email l2">
                                        <li>
                                            <a class="sideline" href="email-inbox.html">
                                                <span class="title">Inbox</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="email-view.html">
                                                <span class="title">View email</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="email-compose.html">
                                                <span class="title">Compose email</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" data-id="charts" data-click="toggle-section">
                                        <i class="pull-right fa fa-caret-down icon-charts"></i> 
                                        <span class="pull-right label label-warning label-pill">info</span> 
                                        <i class="zmdi zmdi-chart md-icon pull-left"></i> 
                                        <span class="title">Charts</span> 
                                    </a>
                                    <ul class="list-unstyled section-charts l2">
                                        <li>
                                            <a class="sideline" href="charts-nvd3.html">
                                                <span class="title">NVD3</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="charts-chartist.html">
                                                <span class="title">Chartist</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="charts-chart-js.html">
                                                <span class="title">Chart.js</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="charts-easy-pie-chart.html">
                                                <span class="title">Easy Pie Chart</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="charts-jquery-knob.html">
                                                <span class="title">jQuery Knob</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="charts-gauge.html">
                                                <span class="title">Gauges</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" data-id="pages" data-click="toggle-section">
                                        <i class="pull-right fa fa-caret-down icon-pages"></i> 
                                        <i class="zmdi zmdi-file-text md-icon pull-left"></i> 
                                        <span class="title">Pages</span> 
                                    </a>
                                    <ul class="list-unstyled section-pages l2">
                                        <li>
                                            <a class="sideline" href="pages-error-page.html">
                                                <span class="title">Error page</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="pages-empty-page.html">
                                                <span class="title">Empty Page</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="pages-login.html">
                                                <span class="title">Login</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="pages-register.html">
                                                <span class="title">Register</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="pages-forgot-password.html">
                                                <span class="title">Forgot Password</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="pages-lock-screen.html">
                                                <span class="title">Lock Screen</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="pages-profile.html">
                                                <span class="title">User profile</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="pages-coming-soon.html">
                                                <span class="title">Coming soon</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="pages-under-maintenance.html">
                                                <span class="title">Under maintenance</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" data-id="extras" data-click="toggle-section">
                                        <i class="pull-right fa fa-caret-down icon-extras"></i> 
                                        <i class="zmdi zmdi-lamp md-icon pull-left"></i> 
                                        <span class="title">Extras</span> 
                                    </a>
                                    <ul class="list-unstyled section-extras l2">
                                        <li>
                                            <a class="sideline" href="extras-invoice.html">
                                                <span class="title">Invoice</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="extras-zoom.html">
                                                <span class="title">Zoom</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="extras-search-results.html">
                                                <span class="title">Search Results</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="extras-pricing-tables.html">
                                                <span class="title">Pricing tables</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="extras-wow.html">
                                                <span class="title">Wow</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="extras-syntax-highlighting.html">
                                                <span class="title">Syntax highlighting</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="extras-calendar.html">
                                                <span class="title">Calendar</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="extras-crop.html">
                                                <span class="title">Image cropping</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="extras-mousetrap.html">
                                                <span class="title">Mousetrap</span> 
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sideline" href="extras-typed.html">
                                                <span class="title">Typed.js</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-section">
                            <div class="section-title hidden">Documentation</div>
                            <ul class="l1 list-unstyled section-content">
                                <li>
                                    <a class="sideline" data-id="docs" data-click="toggle-section" href="documentation.html">
                                        <i class="zmdi zmdi-info-outline md-icon pull-left"></i> 
                                        <span class="title">Docs</span> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-section">
                            <div class="section-title hidden">Menu</div>
                            <ul class="l1 list-unstyled section-content multi-level-menu">
                                <li>
                                    <a class="sideline" data-id="multi-level-one" data-click="toggle-section">
                                        <i class="pull-right fa fa-caret-down icon-multi-level-one"></i> 
                                        <i class="zmdi zmdi-filter-list md-icon pull-left"></i> 
                                        <span class="title">Multi level menu</span> 
                                    </a>
                                    <ul class="l2 list-unstyled section-multi-level-one">
                                        <li>
                                            <a class="sideline">
                                                <span>Level 1 - 1</span> 
                                            </a>
                                        </li>
                                        <li>
                                           <a class="sideline" data-id="multi-level-two" data-click="toggle-section">
                                            <i class="pull-right fa fa-caret-down icon-multi-level-two"></i> 
                                            <span>Level 1 - 2</span> 
                                        </a>
                                        <ul class="l3 list-unstyled section-multi-level-two">
                                            <li>
                                                <a class="sideline">
                                                    <span>Level 2 - 1</span> 
                                                </a>
                                            </li>
                                            <li>
                                             <a class="sideline" data-id="multi-level-three" data-click="toggle-section">
                                                <i class="pull-right fa fa-caret-down icon-multi-level-three"></i> 
                                                <span>Level 2 - 2</span> 
                                            </a>
                                            <ul class="l4 list-unstyled section-multi-level-three">
                                                <li>
                                                    <a>
                                                        <span>Level 3 - 1</span> 
                                                    </a>
                                                </li>
                                                <li>
                                                   <a class="sideline" data-id="multi-level-four" data-click="toggle-section">
                                                    <i class="pull-right fa fa-caret-down icon-multi-level-four"></i> 
                                                    <span>Level 3 - 2</span> 
                                                </a>
                                                <ul class="l5 list-unstyled section-multi-level-four">
                                                    <li>
                                                        <a>
                                                            <span>Level 4 - 1</span> 
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="sideline">
                                                            <span>Level 4 - 2</span> 
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
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
