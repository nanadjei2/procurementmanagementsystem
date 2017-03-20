@extends("master")
@section("title")
    PMS | Login
@endsection

@section("content")
    <section class="login">
        <div class="container">
            <div class="col-md-4 col-md-offset-4 col-xs-12">
                <div class="login-form">
                 

                <div class="text-center form-heading">
                    <div class="text-center">@include('common.notifications')</div>
                    <h3>Please Login</h3></div>
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