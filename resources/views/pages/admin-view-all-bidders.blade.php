@extends('admin-dashboard')
	@section('title')
		PMS | All Registered Users
	@endsection
@section('content')
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
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="rtab-left">
                        <h5>Today</h5> 
                        <div class="timeline-widget-10">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="p-10 p-l-40 timeline timeline-info">
                                        <div class="text">Someone commented on your post</div>
                                        <div class="text-muted text-sm">10 minutes ago</div>
                                    </div>
                                    <div class="p-10 p-l-40 timeline timeline-success">
                                        <div class="text">Made a sale in Themeforest</div>
                                        <div class="text-muted text-sm">15 minutes ago</div>
                                    </div>
                                    <div class="p-10 p-l-40 timeline timeline-info">
                                        <div class="text">A friend posted something on instagram</div>
                                        <div class="text-muted text-sm">18 minutes ago</div>
                                    </div>
                                    <div class="p-10 p-l-40 timeline timeline-danger">
                                        <div class="text">Fixed github issue</div>
                                        <div class="text-muted text-sm">22 minutes ago</div>
                                    </div>
                                    <div class="p-10 p-l-40 timeline timeline-success">
                                        <div class="text">Finished important task</div>
                                        <div class="text-muted text-sm">30 minutes ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>Stream</h5> 
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="list-group activities">
                                    <li class="list-group-item">
                                        <span class="text-xs pull-right">4 minutes ago</span> 
                                        <span class="label label-success">charge</span> 
                                        <div class="clearfix"></div>
                                        <span class="capitalize">Michael Smith</span> 
                                        <span class="text-bold">upgraded to</span> the $50 plan</li>
                                    <li class="list-group-item">
                                        <span class="text-xs pull-right">34 minutes ago</span> 
                                        <span class="label label-primary">charge</span> 
                                        <div class="clearfix"></div>
                                        <span class="capitalize">Jane Perez</span> 
                                        <span class="text-bold">canceled</span> the $25 plan</li>
                                    <li class="list-group-item">
                                        <span class="text-xs pull-right">an hour ago</span> 
                                        <span class="label label-primary">upgrade</span> 
                                        <div class="clearfix"></div>
                                        <span class="capitalize">George Clinton from Facebook</span> 
                                        <span class="text-bold">upgraded to</span> the $25 plan</li>
                                    <li class="list-group-item">
                                        <span class="text-xs pull-right">2 hours ago</span> 
                                        <span class="label label-warning">cancelled</span> 
                                        <div class="clearfix"></div>
                                        <span class="capitalize">Someone from Google</span> 
                                        <span class="text-bold">canceled</span> the $25 plan</li>
                                    <li class="list-group-item">
                                        <span class="text-xs pull-right">2 hours ago</span> 
                                        <span class="label label-success">upgrade</span> 
                                        <div class="clearfix"></div>
                                        <span class="capitalize">Lucas Smith</span> 
                                        <span class="text-bold">upgraded to</span> the $25 plan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="rtab-center">
                        <h5>Online</h5> 
                        <div class="user-widget-8">
                            <div class="row">
                                <div class="col-xs-12 bs-media">
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-success"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/m1.png" alt="/assets/faces/m1.png" src="assets/faces/m1.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Lucas smith </h5> 
                                            <p>Vital Database Dude</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-info"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/w1.png" alt="/assets/faces/w1.png" src="assets/faces/w1.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Janet Abshire </h5> 
                                            <p>Lead Innovation Officer</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-success"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/m2.png" alt="/assets/faces/m2.png" src="assets/faces/m2.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Lucas Koch </h5> 
                                            <p>Incomparable UX Editor</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-warning"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/w2.png" alt="/assets/faces/w2.png" src="assets/faces/w2.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Gladys Schuster </h5> 
                                            <p>Primary Product Pioneer</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-success"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/m3.png" alt="/assets/faces/m3.png" src="assets/faces/m3.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> George Clinton </h5> 
                                            <p>World Class API Genius</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>Offline</h5> 
                        <div class="user-widget-8">
                            <div class="row">
                                <div class="col-xs-12 bs-media">
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-danger"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/w10.png" alt="/assets/faces/w10.png" src="assets/faces/w10.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Kirsten Perez </h5> 
                                            <p>Project Management Researcher</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-danger"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/m10.png" alt="/assets/faces/m10.png" src="assets/faces/m10.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Jerome Lynch </h5> 
                                            <p>Android Engineer</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-success"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/w9.png" alt="/assets/faces/w9.png" src="assets/faces/w9.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Hannah Cook </h5> 
                                            <p>Wise Email Captain</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-warning"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/m9.png" alt="/assets/faces/m9.png" src="assets/faces/m9.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Melvin Hicks </h5> 
                                            <p>Primary PHP Monkey</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-danger"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/w8.png" alt="/assets/faces/w8.png" src="assets/faces/w8.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Jackie Perkins </h5> 
                                            <p>Executive PR Evangelist</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-info"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/m8.png" alt="/assets/faces/m8.png" src="assets/faces/m8.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Michael Jenkins </h5> 
                                            <p>Ruby On Rails Developer</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-success"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/w7.png" alt="/assets/faces/w7.png" src="assets/faces/w7.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Monica White </h5> 
                                            <p>iOS Strategist</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-danger"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/m7.png" alt="/assets/faces/m7.png" src="assets/faces/m7.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Eric Simpson </h5> 
                                            <p>Innovation Pioneer</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-warning"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/w6.png" alt="/assets/faces/w6.png" src="assets/faces/w6.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> Clorinda Murphy </h5> 
                                            <p>Social Media Writer</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="index-2.html#">
                                            <i class="fa fa-circle icon color-primary"></i> 
                                            <img class="media-object img-circle h-40 w-40" ng-src="/assets/faces/m6.png" alt="/assets/faces/m6.png" src="assets/faces/m6.png">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading"> James Smith </h5> 
                                            <p>Project Management Champ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="rtab-right">
                        <h5>Sales</h5> 
                        <div class="m-b-10">
                            <div class="text-widget-1">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <span class="fa-stack fa-stack-2x pull-left">
<i class="fa fa-circle fa-stack-2x color-warning"></i>
<i class="fa fa fa-usd fa-stack-1x color-white"></i>
</span> 
                                    </div>
                                    <div class="col-xs-8 text-left">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="title">Today</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="numbers">
                                                    <div ng-if="increment">
                                                        <span class="amount" count-to-currency="1123.99" value="0" duration="2">$1,123</span> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-b-10">
                            <div class="text-widget-1">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <span class="fa-stack fa-stack-2x pull-left">
<i class="fa fa-circle fa-stack-2x color-success"></i>
<i class="fa fa fa-eur fa-stack-1x color-white"></i>
</span> 
                                    </div>
                                    <div class="col-xs-8 text-left">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="title">Yesterday</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="numbers">
                                                    <div ng-if="increment">
                                                        <span class="amount" count-to-currency="1844" value="0" duration="2">$1,844</span> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-b-10">
                            <div class="text-widget-1">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <span class="fa-stack fa-stack-2x pull-left">
<i class="fa fa-circle fa-stack-2x color-danger"></i>
<i class="fa fa fa-btc fa-stack-1x color-white"></i>
</span> 
                                    </div>
                                    <div class="col-xs-8 text-left">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="title">This week</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="numbers">
                                                    <div ng-if="increment">
                                                        <span class="amount" count-to-currency="7485" value="0" duration="2">$7,485</span> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>Twitter</h5> 
                        <div class="m-b-10">
                            <div class="icon-widget-3 bg-twitter">
                                <div class="row icon">
                                    <div class="col-xs-12 text-center">
                                        <i class="color-white"></i> 
                                    </div>
                                </div>
                                <div class="row icons">
                                    <div class="col-xs-12 col-md-4 col-lg-4 text-center">
                                        <div class="amount">
                                            <i class="fa fa-twitter color-white"></i> 
                                            <span class="color-white">90</span> 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4 col-lg-4 text-center">
                                        <div class="amount">
                                            <i class="fa fa-comment-o color-white"></i> 
                                            <span class="color-white">22</span> 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4 col-lg-4 text-center">
                                        <div class="amount">
                                            <i class="fa fa-star-o color-white"></i> 
                                            <span class="color-white">33</span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>Facebook</h5> 
                        <div class="m-b-10">
                            <div class="icon-widget-3 bg-facebook">
                                <div class="row icon">
                                    <div class="col-xs-12 text-center">
                                        <i class=" color-white"></i> 
                                    </div>
                                </div>
                                <div class="row icons">
                                    <div class="col-xs-12 col-md-4 col-lg-4 text-center">
                                        <div class="amount">
                                            <i class="fa fa-thumbs-o-up color-white"></i> 
                                            <span class="color-white">45</span> 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4 col-lg-4 text-center">
                                        <div class="amount">
                                            <i class="fa fa-comment-o color-white"></i> 
                                            <span class="color-white">51</span> 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4 col-lg-4 text-center">
                                        <div class="amount">
                                            <i class="fa fa-star-o color-white"></i> 
                                            <span class="color-white">13</span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>Google</h5> 
                        <div class="m-b-10">
                            <div class="icon-widget-3 bg-google">
                                <div class="row icon">
                                    <div class="col-xs-12 text-center">
                                        <i class=" color-white"></i> 
                                    </div>
                                </div>
                                <div class="row icons">
                                    <div class="col-xs-12 col-md-4 col-lg-4 text-center">
                                        <div class="amount">
                                            <i class="fa fa-heart-o color-white"></i> 
                                            <span class="color-white">8</span> 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4 col-lg-4 text-center">
                                        <div class="amount">
                                            <i class="fa fa-comment-o color-white"></i> 
                                            <span class="color-white">13</span> 
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4 col-lg-4 text-center">
                                        <div class="amount">
                                            <i class="fa fa-star-o color-white"></i> 
                                            <span class="color-white">44</span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>Poll results</h5> 
                        <div class="m-b-10 p-20">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>
                                        <span class="pull-right">24%</span> 
                                        <span>Spain</span> 
                                    </p>
                                    <progress class="progress-sm progress progress-warning" value="24" max="100">24%</progress>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>
                                        <span class="pull-right">52%</span> 
                                        <span>USA</span> 
                                    </p>
                                    <progress class="progress-sm progress progress-danger" value="52" max="100">52%</progress>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>
                                        <span class="pull-right">68%</span> 
                                        <span>Australia</span> 
                                    </p>
                                    <progress class="progress-sm progress progress-info" value="68" max="100">68%</progress>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p>
                                        <span class="pull-right">45%</span> 
                                        <span>Sweden</span> 
                                    </p>
                                    <progress class="progress-sm progress progress-success" value="45" max="100">45%</progress>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection