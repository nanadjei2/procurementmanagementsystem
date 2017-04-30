@extends("welcome")

@section("title")
PMS | Password Reset
@endsection


@section('resetcontent')


<div class="container-fluid">

	<div class="row">
		<div class="text-center">@include('common.notifications')</div>

		<div class="col-md-4 col-md-offset-2">


			<form action="{{ route('password-to-email') }}" method="POST" enctype="multipart/form-data">

				{{csrf_field()}}

					
						<div class="form-group">
							<label>Enter Email</label>
							<input type="text" name="email" class="form-control" placeholder="Email address" value="">
						</div>
						<!-- <div class="form-group">
							<label>Repeat Password</label>
							<input type="text" name="password_confirmation" class="form-control" value="">
						</div>
						-->
						<div class="form-group">
								<button class="btn btn-primary" type="submit"><i class="fa fa-envelope fa-fw"></i> Send</button>
						</div> 	

			</form>
		</div> <!-- col-md-4 col-md-offset-2 -->

	</div><!--row-->




		

@endsection