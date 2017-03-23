@extends("user-dashboard-master")

@section("title")
PMS | Supplier-Registration
@endsection


@section('content')


<div class="container-fluid">




<div style="margin-top: 100px;margin-bottom: 30px;">
	<h4 style="text-align: center;">REGISTER NEW MEMBER</h4>
	<h4 style="margin-left: 130px;color: red"></h4>
</div>

	<div class="row">

		<div class="col-md-4 col-md-offset-2">
	
		     
			<form action="{{ route('post-register') }}" method="POST" enctype="multipart/form-data">

				{{csrf_field()}}

				<div class="form-group">
					<label>Job Title</label>
					<select name="jobtitile" class="form-control">

						<option value="Mr">Mr</option>
						<option value="Dr">Dr</option>		
						<option value="Professor">Professor</option>		
																		
					</select>

				</div>	

				<div class="form-group">
					<label>Name of Director</label>
					<input type="text" name="directorname" class="form-control" value="{{ old('directorname') }}">
				</div>

				<div class="form-group">
					<label>Postal Address</label>
					<textarea name="postaladdress" class="form-control" rows="">{{ old('postaladdress') }}</textarea>
				</div>

				<div class="form-group">
					<label>Business Address /  Location</label>
					<textarea name="businessaddress" class="form-control" rows="">{{ old('businessaddress')}}</textarea>
				</div>

				<div class="form-group">
					<label>Region</label>
					<select name="region" class="form-control">
						<option value="Ashanti">Ashanti</option>
						<option value="Brong-Ahafo">Brong-Ahafo</option>
						<option value="Central">Central</option>
						<option value="Eastern">Eastern</option>
						<option value="Greater-Accra">Greater-Accra</option>
						<option value="Northern">Northern</option>
						<option value="Upper-East">Upper-East</option>
						<option value="Upper-West">Upper-West</option>
						<option value="Western">Western</option>
						<option value="Volta">Volta</option>
					</select>

				</div>
		
									
				<div class="form-group">
					<label>Company Email</label>
					<input type="text" name="email" class="form-control" value="{{ old('email') }}">
				</div>

				

											
		</div>

			<div class="col-md-4 col-md-offset-1">
				
				<div class="form-group">
					<label>company Active Phone</label>
					<input type="text" name="activephone" class="form-control" value="{{ old('activephone') }}">
				</div>

				<div class="form-group">
					<label>Alternative Phone One </label>
					<input type="text" name="phonenumberone" class="form-control" value="{{ old('phonenumberone') }}">
				</div>

				<div class="form-group">
					<label>Alternative Phone Two</label>
					<input type="text" name="phonenumbertwo" class="form-control" value="{{ old('phonenumbertwo') }}">
				</div>
				
				<div class="form-group">
					<label>Bank Draft Number</label>
					<textarea name="bankdraftnumber" class="form-control">{{ old('bankdraftnumber')}}</textarea>
				</div>

				<div class="form-group">
					<label>Company Website</label>
					<textarea name="companywebsite" class="form-control">{{ old('companywebsite')}}</textarea>
				</div>
				
				
				<div class="form-group">
					<label>Company Major Activity</label>
					<select id="major-activity-select" name="jobtitile" class="form-control">
						<option value="">Select Major Activity...</option>
						<option value="goods">Goods</option>
						<option value="works">Works</option>		
						<option value="services">Services</option>		
					</select>

				</div>
				<div id="next-step">
					<div class="form-group">
						<label>Company Other Activities</label>
						<textarea name="companyotheractivities" class="form-control">{{ old('companyotheractivities')}}</textarea>
					</div>
			
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary btn-lg" style="width: 300px;">Register Member</button>
						<button type="reset" name="reset" class="btn btn-danger btn-lg">Reset</button>
					</div>
				</div>

			</form>	
		</div> <!-- col-md-4 col-md-offset-2 -->
		
	</div><!--row-->

	<div id="major-goods-boxes" style="margin-left: 225px; margin-top: 40px;">
    <div class="alert text-center alert-info-outline animated fadeIn" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span>  <span class="sr-only">Close</span> 
            </button>  Please select your major activity from the checkboxes below !
     </div>
	
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="checkbox">
  						<label><input type="checkbox" value="">Agricultural/Farm Equiptment</label>
					</div>
					<div class="checkbox">
  						<label><input type="checkbox" value="">Agro Chemicals</label>
					</div>
					<div class="checkbox">
  						<label><input type="checkbox" value="">Automobile/Vehicles Parts</label>
					</div>
					<div class="checkbox">
  						<label><input type="checkbox" value="">Building/Construction Materials and Equiptment</label>
					</div>
					<div class="checkbox">
  						<label><input type="checkbox" value="">Clothing/Sewing Equipment</label>
					</div>
					<div class="checkbox">
  						<label><input type="checkbox" value="">Detergents/Disinfectants/Sanitary/Cleaning Materials</label>
					</div>
					<div class="checkbox">
  						<label><input type="checkbox" value="">Drawing Materials</label>
					</div>
					<div class="checkbox">
  						<label><input type="checkbox" value="">Electronical Materials and Fittings</label>
					</div>
					<div class="checkbox">
  						<label><input type="checkbox" value="">Essential Medicines</label>
					</div>
					<div class="checkbox">
  						<label><input type="checkbox" value="">Furniture and Fittings</label>
					</div>
					<div class="checkbox">
  						<label><input type="checkbox" value="">General Office Equipment(Photocopies A.C, Fridges ets)</label>
					</div>
				</div><!-- col-md-6 col-xs-12 -->
			</div>
	</div>


	@section("company-activites")
		<script type="text/javascript">
			$(document).ready(function() {
				$('#major-goods-boxes').hide();
				$('#major-activity-select').change(function() {
					if($(this).val() === 'goods') {
						$('#next-step').hide();
						$('#major-goods-boxes').show('slow');
					}
				});
			});
		</script>
	@endsection

@endsection