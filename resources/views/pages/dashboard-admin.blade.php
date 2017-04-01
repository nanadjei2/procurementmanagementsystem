@extends("user-dashboard-master")
@section("title")
    PMS | Dashboard
@endsection
@section("content")

    <section class="content">
        
        <div class="container">
            @include('common.sweet-notifications')
            <h2 style="font-weight: bold;">ADMINISTRATOR DASHBOARD</h2>
                <div class="dashboard-activities">
                        <div class="row m-b-40">

                            <a href="#" class="col-xs-12 col-lg-4 m-b-5">
                                <div class="text-widget-1">

                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="fa-stack fa-stack-2x pull-left">
                        <i class="fa fa-circle fa-stack-2x color-info"></i>
                        <i class="fa fa fa-user fa-stack-1x color-white"></i>
                        </span> 
                                        </div>
                                        <div class="col-xs-8 text-left">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="amount my-profile">DASHBOARD</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="col-xs-12 col-lg-4 m-b-5">
                                <div class="text-widget-1">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="fa-stack fa-stack-2x pull-left">
                        <i class="fa fa-circle fa-stack-2x color-success"></i>
                        <i class="fa fa fa-user-plus fa-stack-1x color-white"></i>
                        </span> 
                                        </div>
                                        <div class="col-xs-8 text-left">
                                            <div class="row">
                                                <div href="#" class="col-xs-12">
                                                    <div class="amount">MY PROFILE</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{route('admin-dashboard')}}" class="col-xs-12 col-lg-4 m-b-5">
                                <div class="text-widget-1">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="fa-stack fa-stack-2x pull-left">
                        <i class="fa fa-circle fa-stack-2x color-warning"></i>
                        <i class="fa fa fa-eye fa-stack-1x color-white"></i>
                        </span> 
                                        </div>
                                        <div class="col-xs-8 text-left">
                                            <div class="row">
                                                <div class="col-xs-12 vie">
                                                    <div class="amount view">ALL SYSTEM USERS</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>


                            <a href="{{route('view-all-bidders')}}" class="col-xs-12 col-lg-4 m-b-5">
                                <div class="text-widget-1">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="fa-stack fa-stack-2x pull-left">
                        <i class="fa fa-circle fa-stack-2x color-warning"></i>
                        <i class="fa fa fa-eye fa-stack-1x color-white"></i>
                        </span> 
                                        </div>
                                        <div class="col-xs-8 text-left">
                                            <div class="row">
                                                <div class="col-xs-12 vie">
                                                    <div class="amount view">VIEW ALL BIDDERS</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>


                            <a href="{{ route('logout') }}" class="col-xs-12 col-lg-4 m-b-5">
                                <div class="text-widget-1">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="fa-stack fa-stack-2x pull-left">
                        <i class="fa fa-circle fa-stack-2x color-danger"></i>
                        <i class="fa fa fa-sign-out fa-stack-1x color-white"></i>
                        </span> 
                                        </div>
                                        <div class="col-xs-8 text-left">
                                            <div class="row">
                                                <div class="col-xs-12 vie">
                                                    <div class="amount view">LOGOUT</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>



                      {{--   <div class="row m-b-40">
                            <a href="#" class="col-xs-12 col-lg-4 m-b-5">
                                <div class="text-widget-1">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="fa-stack fa-stack-2x pull-left">
                        <i class="fa fa-circle fa-stack-2x color-success"></i>
                        <i class="fa fa fa-pencil fa-stack-1x color-white"></i>
                        </span> 
                                        </div>
                                        <div class="col-xs-8 text-left">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="amount update">UPDATE INFO</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="col-xs-12 col-lg-4 m-b-5">
                                <div class="text-widget-1">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="fa-stack fa-stack-2x pull-left">
                        <i class="fa fa-circle fa-stack-2x color-primary"></i>
                        <i class="fa fa fa-btc fa-stack-1x color-white"></i>
                        </span> 
                                        </div>
                                        <div class="col-xs-8 text-left">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="amount something-else">MAKE ENQUIRY</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('logout') }}" class="col-xs-12 col-lg-4 m-b-5">
                                <div class="text-widget-1">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <span class="fa-stack fa-stack-2x pull-left">
                        <i class="fa fa-circle fa-stack-2x color-danger"></i>
                        <i class="fa fa fa-sign-out fa-stack-1x color-white"></i>
                        </span> 
                                        </div>
                                        <div class="col-xs-8 text-left">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="amount logout">LOGOUT</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                </div>

        </div><!--Container-->
    </section>
@endsection 