@extends("master")
@section("title")
PMS | signup
@endsection

@section("content")
<section>
    <div class="container">
        <div class="col-md-5 col-md-offset-3 col-xs-12">
            

            <div class="login-form">
            {{-- error display --}}

            <div class="errors">

                @if(count($errors)>0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>


                @endif

            </div>
                <div class="text-center">@include('common.notifications')</div>
                <div class="text-center form-heading"><h3>Please Sign-Up</h3></div>
                <form action="{{ route('post-signup')}}" method="POST">

                  {{csrf_field()}}

                  <div class="form-group">
                    <label for="username"> Username</label>
                    <input id="username" name="username" class="form-control" type="text" placeholder="Enter username" required="required" value="{{old('username')}}" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" name="email" class="form-control" placeholder="Enter Email Address" required value="{{old('email')}}" />
                </div>
                <div class="form-group">
                    <label for="password"> Password</label>
                    <input name="password" id="password" class="form-control" type="password" placeholder="Enter password" required/>
                </div>
                <div class="form-group">
                    <label for="confirmpassword">Confirm Password</label>
                    <input id="confirmpassword" name="confirmpassword" class="form-control" type="password" placeholder="Confirm password" required/>
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