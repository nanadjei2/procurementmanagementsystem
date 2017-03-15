@extends("master")
@section("title")
    PMS | Login
@endsection

@section("content")
    <section class="login">
        <div class="container">
            <div class="col-md-4 col-md-offset-4 col-xs-12">
                <div class="login-form">
                <div class="text-center form-heading"><h3>Please Login</h3></div>
                    <div class="form-group">
                        <label for="username"> Username:</label>
                        <input id="username" class="form-control" type="text" placeholder="Enter username" required/>
                    </div>
                    <div class="form-group">
                        <label for="pwd"> Password:</label>
                        <input id="pwd" class="form-control" type="text" placeholder="Enter password" required/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="form-group">
                        <label for="">Dont have an account? <a href="{{ route('signup')}}" title="">Sign up</a></label>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 