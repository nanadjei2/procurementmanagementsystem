@extends('layouts.app')
    @section('title')
        PMS | Password Reset
    @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                   @yield('resetcontent')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
