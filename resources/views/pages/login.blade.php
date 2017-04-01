@extends("master")
@section("title")
    PMS | Login
@endsection

@section("content")
    <section class="login">
        <div class="container">
            <div class="col-md-4 col-md-offset-4 col-xs-12" style="margin-top: 20px;">
             <div id="projecticon" style="margin-left: 60px;">
                <img src="{{ asset('images/eprocurement.jpg')}}" alt="" style="width: 200px;height: 200px;">
                  <div style="width:30px;margin-left: -400px;padding-left: 0px;padding-right: 0px;">@include('common.notifications')</div>

             </div>
                <div class="login-form">

               <div class="text-center form-heading">
   
                    <div>
                    <h3>Please Login</h3>
                    </div>
                </div>
                <form class="form-horizontal" action="{{ route('post-login') }}" method="POST" role="form">
                    <div class="form-group">
                        <label for="username"> Username:</label>
                        <input id="username" class="form-control" type="text" name="username" placeholder="Enter username" value="{{ old('username') }}" required/>
                    </div>
                    <div class="form-group">
                        <label for="pwd"> Password:</label>
                        <input id="pwd" class="form-control" type="password" name="password" placeholder="Enter password" required/>
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}"/>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Login</button>
                    </div>
                    <div class="form-group">
                        <label for="">Dont have an account? <a href="{{ route('signup')}}" title="">Sign up</a></label>
                     </div>
                </form>
                </div>
            </div>
        </div>
    </section>
@endsection 