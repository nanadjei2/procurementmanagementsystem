@extends("user-dashboard-master")
@section("title")
    PMS | Dashboard
@endsection
@section("content")

    <section class="content">
        
        <div class="container">
            @include('common.sweet-notifications')
            




            <div class="row m-b-40">
    <a href="#" class="col-xs-12 col-lg-4 m-b-5">
        <div class="text-widget-1">
            <div class="row">
                <div class="col-xs-4">
                    <span class="fa-stack fa-stack-2x pull-left">
<i class="fa fa-circle fa-stack-2x color-info"></i>
<i class="fa fa fa-usd fa-stack-1x color-white"></i>
</span> 
                </div>
                <div class="col-xs-8 text-left">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="amount">MY PROFILE</div>
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
<i class="fa fa fa-btc fa-stack-1x color-white"></i>
</span> 
                </div>
                <div class="col-xs-8 text-left">
                    <div class="row">
                        <div href="#" class="col-xs-12">
                            <div class="amount">ADD SUPPLIER OR CONTRACTOR INFORMATION</div>
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
<i class="fa fa-circle fa-stack-2x color-warning"></i>
<i class="fa fa fa-eur fa-stack-1x color-white"></i>
</span> 
                </div>
                <div class="col-xs-8 text-left">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="amount">VIEW</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>



<div class="row m-b-40">
    <a href="#" class="col-xs-12 col-lg-4 m-b-5">
        <div class="text-widget-1">
            <div class="row">
                <div class="col-xs-4">
                    <span class="fa-stack fa-stack-2x pull-left">
<i class="fa fa-circle fa-stack-2x color-success"></i>
<i class="fa fa fa-usd fa-stack-1x color-white"></i>
</span> 
                </div>
                <div class="col-xs-8 text-left">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="amount">Update</div>
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
<i class="fa fa-circle fa-stack-2x color-danger"></i>
<i class="fa fa fa-btc fa-stack-1x color-white"></i>
</span> 
                </div>
                <div class="col-xs-8 text-left">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="amount">Revenue yesterday</div>
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
<i class="fa fa-circle fa-stack-2x color-warning"></i>
<i class="fa fa fa-eur fa-stack-1x color-white"></i>
</span> 
                </div>
                <div class="col-xs-8 text-left">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="amount">logout</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>





            </div>
        </div><!--Container-->
    </section>
@endsection 