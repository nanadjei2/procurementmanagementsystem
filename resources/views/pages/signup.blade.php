@extends("master")
@section("title")
    PMS | signup
@endsection

@section("content")
    <section>
        <div class="container">
            <div class="col-md-5 col-md-offset-3 col-xs-12">
                <div class="login-form">
                <div class="text-center form-heading"><h3>Please Sign-Up</h3></div>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username"> Username</label>
                        <input id="username" class="form-control" type="text" placeholder="Enter username" required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" class="form-control" placeholder="Enter Email Address" required />
                    </div>
                    <div class="form-group">
                        <label for="pwd"> Password</label>
                        <input id="pwd" class="form-control" type="password" placeholder="Enter password" required/>
                    </div>
                    <div class="form-group">
                        <label for="confirmpwd">Confirm Password</label>
                        <input id="confirmpwd" class="form-control" type="password" placeholder="Confirm password" required/>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle-o fa-fw" aria-hidden="true"></i> Sign Up</button>
                    </div>
                    <div class="form-group">
                        <label for="">Already have an account? <a href="{{ route('login')}}" title="">Log in</a></label>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection 