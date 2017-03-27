@extends("user-dashboard-master")

@section("title")
PMS | Supplier-Registration
@endsection


@section('content')


<div class="container-fluid">




<div style="margin-top: 100px; margin-bottom: 30px;">
	<h4 style="text-align: center;">SUPPLIER/CONTRACTOR REGISTRATION</h4>

</div>

	<div class="row">

		<div class="col-md-4 col-md-offset-2">
	
		     	<div class="text-center">@include('common.notifications')</div>

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
				
				<!-- Radio Major Activites -->
				<div class="form-group">
				<label>Choose Major activity: </label>
						<label class="radio-inline" for="goods">
							<input id="goods" type="radio" name="majoractivitycategory" value="Goods"> Goods
						</label>
						<label class="radio-inline" for="works">
							<input id="works" type="radio" name="majoractivitycategory" value="Works"> Works
						</label>
						<label  class="radio-inline" for="services">
							<input id="services" type="radio" name="majoractivitycategory" value="Services"> Services
						</label>
				</div>
				<!-- Radio Buttons Ends -->
				
				<div id="major-goods-select" class="form-group">
					<select name="companymajoractivity" class="form-control">
						<option title="Please You Can't Select This">Select A Major Compamy Activity...</option>
						<option value="Agricultural/Farm Equiptment">Agricultural/Farm Equiptment</option>
						<option value="">Agro Chemicals</option>		
						<option value="">Automobile/Vehicles Parts</option>
						<option value="">Building/Construction Materials and Equiptment</option>
						<option value="">Clothing/Sewing Equipment</option>		
						<option value="">Detergents/Disinfectants/Sanitary/Cleaning Materials</option>		
						<option value="">Drawing Materials</option>		
						<option value="">Electronical Materials & Fittings</option>		
						<option value="">Essential Medicines</option>		
						<option value="">Furniture and Fittings</option>		
						<option value="">General Office Equipment(Photocopies A.C, Fridges etc)</option>		
						<option value="">Geographical Information System</option>		
						<option value="">Hospital Consumables</option>		
						<option value="">Hospital/Medical Equpment</option>		
						<option value="">Information Communication Technology</option>		
						<option value="">Laboratory Chemicals & Workshop Equipment</option>		
						<option value="">Landry Materials/Equipments</option>		
						<option value="">Machine Parts</option>		
						<option value="">Mattresses and Pillows</option>		
						<option value="">Measuring Instruments</option>		
						<option value="">Office Consumables</option>		
						<option value="">Road and Culvert Materials</option>
						<option value="">Safety Materials (Fire Extinguishers, Boots, Smoke Detectors etc)</option>
						<option value="">Security Devices/Detectors</option>
						<option value="">Sewerage Equipment and Materials</option>
						<option value="">Stationery</option>
						<option value="">Storage Equipment</option>
						<option value="">Tiles and Tiling Materials</option>
						<option value="">Uniform and Protective Clothing</option>
						<option value="">Software and Licenses</option>
						<option value="">Cleaning and Sanitary Materials</option>
						<option value="Consultancy Services in ICT Software Development and Training">Consultancy Services in ICT Software Development and Training</option>
					<option value="">Consultancy Services in Civil, Structural, Mechanical and Electrical Engineering</option>		
						<option value="">Maintenace of Vehicles, Workshops, Air Conditioners, Photocopies Intercom</option>	
						<option value="">Hydrological Services</option>
						<option value="">Catering Services</option>
						<option value="">Cleaning Services</option>
						<option value="">Welding and Fabrication</option>
						<option value="Construction/Maintenace of Bridges">Construction/Maintenace of Bridges</option>
						<option value="">Construction/Maintenance of Roads</option>		
						<option value="">Civil Works</option>
						<option value="">Drilling of Boreholes</option>
						<option value="">Horticultural Works and Lawning</option>
						<option value="">Maintenance of Infrastructural Facilities & Other Price Quotation Contracts</option>
						<option value="">Pavement of Walkways</option>	
					</select>

				</div>	



			

			
{{--


			 <div class="text-center" class="form-group">
					<select id="major-service-select" name="companymajoractivity" class="form-control">
						<option title="Please You Can't Select This">Select Service Activity...</option>
						<option value="Consultancy Services in ICT Software Development and Training">Consultancy Services in ICT Software Development and Training</option>
					<option value="">Consultancy Services in Civil, Structural, Mechanical and Electrical Engineering</option>		
						<option value="">Maintenace of Vehicles, Workshops, Air Conditioners, Photocopies Intercom</option>	
						<option value="">Hydrological Services</option>
						<option value="">Catering Services</option>
						<option value="">Cleaning Services</option>
						<option value="">Welding and Fabrication</option>	
					</select>
			</div>	


			<div class="text-center" class="form-group">
					<select id="major-works-select" name="companymajoractivity" class="form-control">
						<option title="Please You Can't Select This">Select Work Activity...</option>
						<option value="Construction/Maintenace of Bridges">Construction/Maintenace of Bridges</option>
						<option value="">Construction/Maintenance of Roads</option>		
						<option value="">Civil Works</option>
						<option value="">Drilling of Boreholes</option>
						<option value="">Horticultural Works and Lawning</option>
						<option value="">Maintenance of Infrastructural Facilities & Other Price Quotation Contracts</option>
						<option value="">Pavement of Walkways</option>		
					</select>
			</div> --}}
		</div> <!-- col-md-4 col-md-offset-2 -->
		
	</div><!--row-->

	<div style="margin: 50px 90px -30px 260px">
		<div class="alert alert-info alert-dismissable text-center" role="alert">
			<button class="close" type="button" aria-lable="close" data-dismiss="alert"></button>
			Please, you can select either one(1) or two(1) minor activities from below. If you do not have any, you can leave it blank
		</div>
	</div>









<!-- MINOR ACTIVITIES BEGINS FROM HERE -->


	<section style="margin-top: 100px; margin-bottom: 30px;">
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<!-- Radio Major Activites -->
				<div class="form-group">
				<label>1st Minor activity: </label>
						<label class="radio-inline" for="minor-goods">
							<input id="minor-goods" value="Goods" type="radio" name="minoractivity1category"> Goods
						</label>
						<label class="radio-inline" for="minor-works">
							<input id="minor-works" value="Works" type="radio" name="minoractivity1category"> Works
						</label>
						<label  class="radio-inline" for="minor-services">
							<input id="minor-services" value="Services" type="radio" name="minoractivity1category"> Services
						</label>
				</div>
				<!-- Radio Buttons Ends -->
				
				<div id="minor-goods-select" class="form-group">
					<select name="minoractivity1" class="form-control">
						<option title="Please You Can't Select This">Select A Minor Activity...</option>
						<option value="Agricultural/Farm Equiptment">Agricultural/Farm Equiptment</option>
						<option value="">Agro Chemicals</option>		
						<option value="">Automobile/Vehicles Parts</option>
						<option value="">Building/Construction Materials and Equiptment</option>
						<option value="">Clothing/Sewing Equipment</option>		
						<option value="">Detergents/Disinfectants/Sanitary/Cleaning Materials</option>		
						<option value="">Drawing Materials</option>		
						<option value="">Electronical Materials & Fittings</option>		
						<option value="">Essential Medicines</option>		
						<option value="">Furniture and Fittings</option>		
						<option value="">General Office Equipment(Photocopies A.C, Fridges etc)</option>		
						<option value="">Geographical Information System</option>		
						<option value="">Hospital Consumables</option>		
						<option value="">Hospital/Medical Equpment</option>		
						<option value="">Information Communication Technology</option>		
						<option value="">Laboratory Chemicals & Workshop Equipment</option>		
						<option value="">Landry Materials/Equipments</option>		
						<option value="">Machine Parts</option>		
						<option value="">Mattresses and Pillows</option>		
						<option value="">Measuring Instruments</option>		
						<option value="">Office Consumables</option>		
						<option value="">Road and Culvert Materials</option>
						<option value="">Safety Materials (Fire Extinguishers, Boots, Smoke Detectors etc)</option>
						<option value="">Security Devices/Detectors</option>
						<option value="">Sewerage Equipment and Materials</option>
						<option value="">Stationery</option>
						<option value="">Storage Equipment</option>
						<option value="">Tiles and Tiling Materials</option>
						<option value="">Uniform and Protective Clothing</option>
						<option value="">Software and Licenses</option>
						<option value="">Cleaning and Sanitary Materials</option>
						<option value="Consultancy Services in ICT Software Development and Training">Consultancy Services in ICT Software Development and Training</option>
					<option value="">Consultancy Services in Civil, Structural, Mechanical and Electrical Engineering</option>		
						<option value="">Maintenace of Vehicles, Workshops, Air Conditioners, Photocopies Intercom</option>	
						<option value="">Hydrological Services</option>
						<option value="">Catering Services</option>
						<option value="">Cleaning Services</option>
						<option value="">Welding and Fabrication</option>
						<option value="Construction/Maintenace of Bridges">Construction/Maintenace of Bridges</option>
						<option value="">Construction/Maintenance of Roads</option>		
						<option value="">Civil Works</option>
						<option value="">Drilling of Boreholes</option>
						<option value="">Horticultural Works and Lawning</option>
						<option value="">Maintenance of Infrastructural Facilities & Other Price Quotation Contracts</option>
						<option value="">Pavement of Walkways</option>	
					</select>

				</div>	


{{-- 
			<div id="minor-works-select" class="text-center" class="form-group">
					<select name="minoractivity1" class="form-control">
						<option title="Please You Can't Select This">Select Work Activity...</option>
						<option value="">Construction/Maintenace of Bridges</option>
						<option value="">Construction/Maintenance of Roads</option>		
						<option value="">Civil Works</option>
						<option value="">Drilling of Boreholes</option>
						<option value="">Horticultural Works and Lawning</option>
						<option value="">Maintenance of Infrastructural Facilities & Other Price Quotation Contracts</option>
						<option value="">Pavement of Walkways</option>		
					</select>
			</div>

			



				<div class="text-center" class="form-group">
					<select id="minor-service-select" name="minoractivity1" class="form-control">
						<option title="Please You Can't Select This">Select Service Activity...</option>
						<option value="">Consultancy Services in ICT Software Development and Training</option>
						<option value="">Consultancy Services in Civil, Structural, Mechanical and Electrical Engineering</option>		
						<option value="">Maintenace of Vehicles, Workshops, Air Conditioners, Photocopies Intercom</option>	
						<option value="">Hydrological Services</option>
						<option value="">Catering Services</option>
						<option value="">Cleaning Services</option>
						<option value="">Welding and Fabrication</option>	
					</select>
				</div>	 --}}
			</div><!-- col-md-4 col-md-offset-2 -->



<!-- MINOR ACTIVITIES 2 BEGINS FROM HERE -->

<div class="col-md-4 col-md-offset-1">
				<!-- Radio minor Activites -->
				<div class="form-group">
				<label>2nd Minor activity: </label>
						<label class="radio-inline" for="minor-goods-2">
							<input id="minor-goods-2" type="radio" value="Goods" name="minoractivity2category"> Goods
						</label>
						<label class="radio-inline" for="minor-works-2">
							<input id="minor-works-2" type="radio" value="Works" name="minoractivity2category"> Works
						</label>
						<label  class="radio-inline" for="minor-services-2">
							<input id="minor-services-2" value="Services" type="radio" name="minoractivity2category"> Services
						</label>
				</div>
				<!-- Radio Buttons Ends -->
				
				<div id="minor-goods-select-2" class="form-group">
					<select name="minoractivity2" class="form-control">
						<option title="Please You Can't Select This">Select Goods Activity...</option>
						<option value="Agricultural/Farm Equiptment">Agricultural/Farm Equiptment</option>
						<option value="">Agro Chemicals</option>		
						<option value="">Automobile/Vehicles Parts</option>
						<option value="">Building/Construction Materials and Equiptment</option>
						<option value="">Clothing/Sewing Equipment</option>		
						<option value="">Detergents/Disinfectants/Sanitary/Cleaning Materials</option>		
						<option value="">Drawing Materials</option>		
						<option value="">Electronical Materials & Fittings</option>		
						<option value="">Essential Medicines</option>		
						<option value="">Furniture and Fittings</option>		
						<option value="">General Office Equipment(Photocopies A.C, Fridges etc)</option>		
						<option value="">Geographical Information System</option>		
						<option value="">Hospital Consumables</option>		
						<option value="">Hospital/Medical Equpment</option>		
						<option value="">Information Communication Technology</option>		
						<option value="">Laboratory Chemicals & Workshop Equipment</option>		
						<option value="">Landry Materials/Equipments</option>		
						<option value="">Machine Parts</option>		
						<option value="">Mattresses and Pillows</option>		
						<option value="">Measuring Instruments</option>		
						<option value="">Office Consumables</option>		
						<option value="">Road and Culvert Materials</option>
						<option value="">Safety Materials (Fire Extinguishers, Boots, Smoke Detectors etc)</option>
						<option value="">Security Devices/Detectors</option>
						<option value="">Sewerage Equipment and Materials</option>
						<option value="">Stationery</option>
						<option value="">Storage Equipment</option>
						<option value="">Tiles and Tiling Materials</option>
						<option value="">Uniform and Protective Clothing</option>
						<option value="">Software and Licenses</option>
						<option value="">Cleaning and Sanitary Materials</option>
						<option value="Consultancy Services in ICT Software Development and Training">Consultancy Services in ICT Software Development and Training</option>
					<option value="">Consultancy Services in Civil, Structural, Mechanical and Electrical Engineering</option>		
						<option value="">Maintenace of Vehicles, Workshops, Air Conditioners, Photocopies Intercom</option>	
						<option value="">Hydrological Services</option>
						<option value="">Catering Services</option>
						<option value="">Cleaning Services</option>
						<option value="">Welding and Fabrication</option>
						<option value="Construction/Maintenace of Bridges">Construction/Maintenace of Bridges</option>
						<option value="">Construction/Maintenance of Roads</option>		
						<option value="">Civil Works</option>
						<option value="">Drilling of Boreholes</option>
						<option value="">Horticultural Works and Lawning</option>
						<option value="">Maintenance of Infrastructural Facilities & Other Price Quotation Contracts</option>
						<option value="">Pavement of Walkways</option>	
					</select>

				</div>	



			{{-- <div id="minor-works-select-2" class="text-center" class="form-group">
					<select name="jobtitile" class="form-control">
						<option title="Please You Can't Select This">Select Work Activity...</option>
						<option value="">Construction/Maintenace of Bridges</option>
						<option value="">Construction/Maintenance of Roads</option>		
						<option value="">Civil Works</option>
						<option value="">Drilling of Boreholes</option>
						<option value="">Horticultural Works and Lawning</option>
						<option value="">Maintenance of Infrastructural Facilities & Other Price Quotation Contracts</option>
						<option value="">Pavement of Walkways</option>		
					</select>
			</div>

			



				<div class="text-center" class="form-group">
					<select id="minor-service-select-2" name="jobtitile" class="form-control">
						<option title="Please You Can't Select This">Select Service Activity...</option>
						<option value="">Consultancy Services in ICT Software Development and Training</option>
						<option value="">Consultancy Services in Civil, Structural, Mechanical and Electrical Engineering</option>		
						<option value="">Maintenace of Vehicles, Workshops, Air Conditioners, Photocopies Intercom</option>	
						<option value="">Hydrological Services</option>
						<option value="">Catering Services</option>
						<option value="">Cleaning Services</option>
						<option value="">Welding and Fabrication</option>	
					</select>
				</div>	 --}}
			</div><!-- col-md-4 col-md-offset-2 -->

<!-- >>>>MINOR ACTIVITy 2 ENDS HERE -->
		</div><!-- row -->
	</section>

<!-- >>>>MINOR ACTIVITIES ENDS HERE -->





	<div class="form-group">
		<div class="text-center">
			<button class="btn btn-primary" type="submit"><i class="fa fa-save fa-fw"></i> SUBMIT</button>
			<button class="btn btn-danger" type="submit"><i class="fa fa-times fa-fw"></i> CANCEL</button>
		</div>
	</div>

	@section("company-activites")
		<script type="text/javascript">
			$(document).ready(function() {
				$('#major-goods-select').hide();
				$('#major-works-select').hide();
				$('#major-service-select').hide();

				$('#goods').click(function() {
					$('#major-goods-select').show('slow');
					$('#major-works-select').hide();
					$('#major-service-select').hide();
				});

				$('#works').click(function() {
					$('#major-works-select').hide();
					$('#major-goods-select').show('slow');
					$('#major-service-select').hide();
				});

				$('#services').click(function() {
					$('#major-service-select').hide();
					$('#major-goods-select').show('slow');
					$('#major-works-select').hide();
				});

			});

				// Minor Scripts Begins From Here

				$('#minor-goods-select').hide();
				$('#minor-works-select').hide();
				$('#minor-service-select').hide();

				$('#minor-goods').click(function() {
					$('#minor-goods-select').show('slow');
					$('#minor-works-select').hide();
					$('#minor-service-select').hide();
				});

				$('#minor-works').click(function() {
					$('#minor-works-select').hide();
					$('#minor-goods-select').show('slow');
					$('#minor-service-select').hide();
				});

				$('#minor-services').click(function() {
					$('#minor-service-select').hide();
					$('#minor-goods-select').show('slow');
					$('#minor-works-select').hide();
				});

				// Minor Activity 2 script begins from here
			
				$('#minor-goods-select-2').hide();
				$('#minor-works-select-2').hide();
				$('#minor-service-select-2').hide();

				$('#minor-goods-2').click(function() {
					$('#minor-goods-select-2').show('slow');
					$('#minor-works-select-2').hide();
					$('#minor-service-select-2').hide();
				});

				$('#minor-works-2').click(function() {
					$('#minor-works-select-2').hide();
					$('#minor-goods-select-2').show('slow');
					$('#minor-service-select-2').hide();
				});

				$('#minor-services-2').click(function() {
					$('#minor-service-select-2').hide();
					$('#minor-goods-select-2').show('slow');
					$('#minor-works-select-2').hide();
				});









				$(".select-1").change(function() {
		          $(".select-1").prop('checked', false);
		            $(this).prop('checked', true);
	            });

			

		</script>
	@endsection

@endsection