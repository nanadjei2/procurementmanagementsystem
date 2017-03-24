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
    <div class="alert text-center alert-info animated fadeIn" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span>  <span class="sr-only">Close</span> 
            </button>  Please select your <strong>one(1) major</strong> activity from the checkboxes below !
     </div>
	
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Agricultural/Farm Equiptment</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Agro Chemicals</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Automobile/Vehicles Parts</label>
					</div>
					<div class="checkbox">
  						  <label><inp class="select-1"ut type="checkbox" value="">Building/Construction Materials and Equiptment</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Clothing/Sewing Equipment</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Detergents/Disinfectants/Sanitary/Cleaning Materials</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Drawing Materials</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Electronical Materials & Fittings</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Essential Medicines</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Furniture and Fittings</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">General Office Equipment(Photocopies A.C, Fridges etc)</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Geographical Information System</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Hospital Consumables</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Hospital/Medical Equpment</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Information Communication Technology &</label>
					</div>
				</div><!-- col-md-6 col-xs-12 -->
				<div class="col-md-6 col-xs-12">
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Laboratory Chemicals & Workshop Equipment</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Landry Materials/Equipments</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Machine Parts</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Mattresses and Pillows</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Measuring Instruments</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Office Consumables</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Road and Culvert Materials</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Safety Materials (Fire Extinguishers, Boots, Smoke Detectors etc)</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Security Devices/Detectors</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Sewerage Equipment and Materials</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Stationery</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Storage Equipment</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Tiles and Tiling Materials</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Uniform and Protective Clothing</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Software and Licenses</label>
					</div>
					<div class="checkbox">
  						<label><input class="select-1" type="checkbox" value="">Cleaning and Sanitary Materials</label>
					</div>
				</div>
			</div>
	</div>

	<div id="major-works-boxes" style="margin-left: 225px; margin-top: 40px;">
	    <div class="alert text-center alert-info animated fadeIn" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span>  <span class="sr-only">Close</span> 
	            </button>  Please select <strong>one(1) major</strong> activity from the checkboxes below !
	     </div>
	     <div class="row">
	     	<div class="col-md-6 col-xs-12">
	     		<div class="checkbox">
	  				<label><input class="select-1" type="checkbox" value="">Civil Works</label>
				</div>
				<div class="checkbox">
	  				<label><input class="select-1" type="checkbox" value="">Maintenance of Infrastructural Facilities and Other Price Quotation Contracts</label>
				</div>
				<div class="checkbox">
	  				<label><input class="select-1" type="checkbox" value="">Construction/Maintenance of Roads</label>
				</div>
	     	</div>
	     	<div class="col-md-6 col-xs-12">
	     		<div class="checkbox">
	  				<label><input class="select-1" type="checkbox" value="">Construction/Maintenace of Bridges</label>
				</div>
				<div class="checkbox">
	  				<label><input class="select-1" type="checkbox" value="">Horticultural Works and Lawning</label>
				</div>
				<div class="checkbox">
	  				<label><input class="select-1" type="checkbox" value="">Drilling of Boreholes</label>
				</div>
				<div class="checkbox">
	  				<label><input type="checkbox" value="">Pavement of Walkways</label>
				</div>
	     	</div>
	     </div>
     </div>

	     <div id="major-services-boxes" style="margin-left: 225px; margin-top: 40px;">
		     <div class="alert text-center alert-info animated fadeIn" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span>  <span class="sr-only">Close</span> 
	            </button>  Please select your <strong>one(1) major</strong> activity from the checkboxes below !
	     	</div>
	     	<div class="col-md-12">
		     	<div class="checkbox">
		  				<label><input class="select-1" type="checkbox" value="">Consultancy Services in ICT Software Development and Training</label>
				</div>
				<div class="checkbox">
		  				<label><input class="select-1" type="checkbox" value="">Consultancy Services in Civil, Structural, Mechanical and Electrical Engineering</label>
				</div>
				<div class="checkbox">
		  				<label><input class="select-1" type="checkbox" value="">Maintenace of Vehicles, Workshops, Air Conditioners, Photocopies Intercom</label>
				</div>
				<div class="checkbox">
		  				<label><input class="select-1" type="checkbox" value="">Hydrological Services</label>
				</div>
				<div class="checkbox">
		  				<label><input class="select-1" type="checkbox" value="">Catering Services</label>
				</div>
				<div class="checkbox">
		  				<label><input class="select-1" type="checkbox" value="">Cleaning Services</label>
				</div>
				<div class="checkbox">
		  				<label><input class="select-1" type="checkbox" value="">Welding and Fabrication</label>
				</div>
	     	</div>
	     </div>

	@section("company-activites")
		<script type="text/javascript">
			$(document).ready(function() {
				$('#major-goods-boxes').hide();
				$('#major-works-boxes').hide();
				$('#major-services-boxes').hide();
				$('#major-activity-select').change(function() {
					if($(this).val() === 'goods') {
						$('#next-step').hide();
						$('#major-goods-boxes').show('slow');
						$('#major-works-boxes').hide();
						$('#major-services-boxes').hide();

					} else if($(this).val() === 'works') {
						$('#next-step').hide();
						$('#major-works-boxes').show('slow');
						$('#major-goods-boxes').hide();
						$('#major-services-boxes').hide();
					} else {
						if ($(this).val() === 'services') {
							$('#next-step').hide();
							$('#major-services-boxes').show('slow');
							$('#major-goods-boxes').hide();
							$('#major-works-boxes').hide();
						};
					}
				});


				$(".select-1").change(function() {
		          $(".select-1").prop('checked', false);
		            $(this).prop('checked', true);
	            });
			});
		</script>
	@endsection

@endsection