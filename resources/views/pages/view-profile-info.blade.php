@extends('user-dashboard-master')
@section('title')
PMS | View-User-Info
@endsection

@section('content')
<div class="col-xs-12 main" id="main">
    <div class="row p-t-20 p-b-20">
        <div class=" col-xs-12 col-md-offset-2 col-mdm-8 col-lg-8 invoice" style="padding-top: 50px;">

            <div class="row">
                <div class="col-xs-12">
                    <div class="invoice-title p-20">
                        <h3 class="pull-left">Profile Info</h3>
                         <div class="clearfix"></div>
                </div>
                </div>
                </div>

            @if(Auth::check())
            <div class="row">
                <div class="col-xs-12 col-xl-6">


       <div>Firstname: <strong>{{ strtoupper($user->firstname) }}</strong></div><br>
       <div>Othername(s): <strong>{{ strtoupper($user->othernames) }}</strong></div><br>
       <div>Username: <strong>{{ strtoupper($user->username) }}</strong></div><br>
       <div>Email Address: <strong>{{ strtoupper($user->email) }}</strong></div><br>

       </div>		            
                

        </div>
            
        </div>

        <div class="row">
            <div class="col-xs-12 col-xl-6">
               
          </div>
        </div>
    </div>
</div>
@endif
<div class="footer">
    <div class="row">
        <div class="col-xs-6 col-md-offset-4">
            <a href="#" style="text-align: center;">@2017 - Procurement Management System</a>
        </div>
    </div>
</div>
</div>
@endsection