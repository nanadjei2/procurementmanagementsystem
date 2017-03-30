@extends('admin-dashboard-master')
	@section('title')
		PMS | All Registered Users
	@endsection
@section('content')        

<div class="col-xs-12 main" id="main">
				<div class="row m-b-40">
   
</div>

<div class="row m-b-40">
    <div class="col-xs-12 col-lg-4">
        <div class="row">
            <div class="col-xs-7">
                <div class="f-w-300">Timeline</div>
                <p>Last hour</p>
            </div>
        </div>
        <div class="timeline-widget-10">
            <div class="row">
                <div class="col-xs-12">
                    <div class="p-10 p-l-40 timeline timeline-info">
                        <div class="text">PRODUCTS AND GOODS</div>
                        <!-- div class="text-muted text-sm">10 minutes ago</div> -->
                    </div>
                    <div class="p-10 p-l-40 timeline timeline-success">
                        <div class="text">SERVICE PROVIDERS</div>
                        <!-- <div class="text-muted text-sm">15 minutes ago</div> -->
                    </div>
                    <div class="p-10 p-l-40 timeline timeline-info">
                        <div class="text">WORKS CONTRACTORS</div>
                        <!-- <div class="text-muted text-sm">18 minutes ago</div> -->
                    </div>
                    <div class="p-10 p-l-40 timeline timeline-danger">
                        <div class="text">ENQUARIES</div>
                        <!-- <div class="text-muted text-sm">22 minutes ago</div> -->
                    </div>
                    <div class="p-10 p-l-40 timeline timeline-success">
                        <div class="text">CONTACT US</div>
                        <!-- <div class="text-muted text-sm">30 minutes ago</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="col-xs-12 col-lg-4">
        <div class="row">
            <div class="col-xs-7">
                <div class="f-w-300">Forum members</div>
                <p>Online status</p>
            </div>
        </div>
        <div class="user-widget-8">
            <div class="row">
                <div class="col-xs-12 bs-media">
                    <div class="media">

                        <a class="media-left" href="index-2.html#">
                            <i class="fa fa-circle icon color-success"></i> 
                            <img class="media-object img-circle h-40 w-40" alt="/assets/faces/m1.png" src="assets/faces/m1.png">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"> Name Of Applicant </h5> 
                            <p>Name of Company</p>
                        </div>
                    </div>
                    <div class="media" style="possition: absolute;">

                        <a class="media-left" href="index-2.html#">
                            <i class="fa fa-circle icon color-info"></i> 
                            <img class="media-object img-circle h-40 w-40" alt="/assets/faces/w1.png" src="assets/faces/w1.png">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"> Janet Abshire </h5> 
                            <p>Lead Innovation Officer</p>
                        </div>
                    </div>
                    <div class="media">

                        <a class="media-left" href="index-2.html#">
                            <i class="fa fa-circle icon color-success"></i> 
                            <img class="media-object img-circle h-40 w-40" alt="/assets/faces/m2.png" src="assets/faces/m2.png">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"> Lucas Koch </h5> 
                            <p>Incomparable UX Editor</p>
                        </div>
                    </div>
                    <div class="media">

                        <a class="media-left" href="index-2.html#">
                            <i class="fa fa-circle icon color-warning"></i> 
                            <img class="media-object img-circle h-40 w-40" alt="/assets/faces/w2.png" src="assets/faces/w2.png">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"> Gladys Schuster </h5> 
                            <p>Primary Product Pioneer</p>
                        </div>
                    </div>
                    <div class="media">

                        <a class="media-left" href="index-2.html#">
                            <i class="fa fa-circle icon color-success"></i> 
                            <img class="media-object img-circle h-40 w-40" alt="/assets/faces/m3.png" src="assets/faces/m3.png">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"> George Clinton </h5> 
                            <p>World Class API Genius</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="col-xs-12 col-lg-8">
        <div class="row">
            <div class="col-xs-7">
                <div class="f-w-300">Browser stats</div>
                <p>This week</p>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="hidden">
                    <tr>
                        <th></th>
                        <th>Browser</th>
                        <th>Visits</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bidders">
                        <td>
                        	<div>
		                        <a class="media-left" href="index-2.html#">
		                            <img class="media-object img-circle h-40 w-40" alt="/assets/faces/m3.png" src="assets/faces/m3.png">
		                        </a>
                    		</div>
                        </td>
                        <td>
                        	<div class="row">
                        		<div class="col-md-6">
                        			<div class="media-body">
			                            <h5 class="media-heading"> Name of Applicant </h5> 
			                            <p>Company Name</p>
                       				</div>
                        		</div>
                        		<div class="col-md-6">
                        			<div class="media-body">
			                            <h5 class="major-activity"> Company Major Activity </h5> 
			                            <p>Major Activity Name</p>
                       				</div>
                        		</div>
                        	</div>
                       	</td>
                        <td>
                        <div class="dropdown pull-right"> 
        					<a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" role="dropdown" aria-haspopup="true" aria-expanded="false">
									open from right </a> 
                        	<ul class="dropdown-menu from-right"> 
	                        	<li><a class="dropdown-item">Dropdown menu item 1</a></li>  
	                        	<li><a class="dropdown-item">Dropdown menu item 2</a></li> 
	                        	<li><a class="dropdown-item">Dropdown menu item 3</a></li>  
	                        	<li><a class="dropdown-item">Dropdown menu item 4</a></li> 
	                        	<li><a class="dropdown-item">Dropdown menu item 5</a></li>  
	                        	<li><a class="dropdown-item">Dropdown menu item 6</a></li> 
            				</ul>
            			</div>
            				
                        </td>
                    </tr>
                   <!--  <tr>
                        <td>
                            <i class="fa fa-firefox"></i> 
                        </td>
                        <td>Firefox</td>
                        <td>223</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-internet-explorer"></i> 
                        </td>
                        <td>Internet Explorer 11</td>
                        <td>235</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-safari"></i> 
                        </td>
                        <td>Safari</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-internet-explorer"></i> 
                        </td>
                        <td>Internet Explorer 10</td>
                        <td>88</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-internet-explorer"></i> 
                        </td>
                        <td>Internet Explorer 9</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa fa-opera"></i> 
                        </td>
                        <td>Opera</td>
                        <td>20</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>


	@section('popover')
		 <script>
		 $(".menu").hide();
		$( ".cog, .admin-text" ).on( "click", function()
{
		$( ".menu" ).stop().fadeToggle( "fast" );
});
		 </script>
	@endsection

@endsection