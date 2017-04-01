@extends('admin-dashboard-master')
@section('title')
PMS | All Registered Users
@endsection
@section('content')        

<div class="col-xs-12 main" id="main">
    <div class="row m-b-40">

    </div>

    <div class="row m-b-40">
        <div id="major-activity-nav" class="col-xs-12 col-md-offset-3 col-md-4">
            <div class="timeline-widget-10">
                <div class="row">
                    <div class="col-xs-12">
                       <div class="heading">
                        <div style="font-family: 'Roboto Slab', serif; margin-bottom: 20px;" class="f-w-300">Major Activites of Companies</div>
                    </div>
                    <div class="p-10 p-l-40 timeline timeline-info major-activities-goods">
                        <a class="text">PRODUCTS AND GOODS</a>
                        <!-- div class="text-muted text-sm">10 minutes ago</div> -->
                    </div>
                    <div class="p-10 p-l-40 timeline timeline-success major-activities-services">
                        <a class="text">SERVICE PROVIDERS</a>
                        <!-- <div class="text-muted text-sm">15 minutes ago</div> -->
                    </div>
                    <div class="p-10 p-l-40 timeline timeline-info major-activities-works">
                        <a class="text">WORKS CONTRACTORS</a>
                        <!-- <div class="text-muted text-sm">18 minutes ago</div> -->
                    </div>
                    <div class="p-10 p-l-40 timeline timeline-danger major-activities-display">
                        <a class="text">ENQUARIES</a>
                        <!-- <div class="text-muted text-sm">22 minutes ago</div> -->
                    </div>
                    <div class="p-10 p-l-40 timeline timeline-success major-activities-display">
                        <a class="text">CONTACT US</a>
                        <!-- <div class="text-muted text-sm">30 minutes ago</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
   




<!-- THE RESPECTIVE TABLES BEGINS FROM HERE -->







    <div id="goods-table-data" class="col-xs-12 col-md-8">
        <div class="row">
            <div class="heading">
              <div style="font-family: 'Roboto Slab', serif; margin-bottom: 20px; margin-left: 2%;" class="f-w-300">Applicants For The Respective Activities</div>
          </div>
      </div>


    @foreach($allmembers as $member)
      <div class="table-responsive">
        <table class="table table-hover table-striped">

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
                    <div class="col-md-8">
                        <div class="media-body">
                        <h5 class="media-heading"> {{ $member->job_title}} {{ $member->name_of_director }} </h5> 
                            <p>{{$member->company_name}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-body">
                            <h5 class="major-activity"> {{$member->major_activity_category}}</h5> 
                            <p>{{$member->company_major_activitygoods}}</p>
                        </div>
                    </div>
                </div>
                
            </td>
            <td>
                <!-- <div class="dropdown pull-right"> 
                   <a class="btn btn-danger" data-toggle="dropdown" role="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="fa fa-bars"></i> </a> 
                       <ul class="dropdown-menu from-right">  -->
                          <li class="list-unstyled"><a href="{{ route('send-email', $member->id) }}" class="dropdown-item"><i class="fa fa-envelope-o fa-fw"></i> Send Mail</a></li> 
                        <!-- </ul>
                  </div> -->

              </td>
          </tr>
                  
                </tbody>
            </table> 
        </div>  
        @endforeach
        
    </div>












    <div id="services-table-data" class="col-xs-12 col-md-8">
        <div class="row">
            <div class="heading">
              <div style="font-family: 'Roboto Slab', serif; margin-bottom: 20px; margin-left: 2%;" class="f-w-300">Applicants For The Respective Activities</div>
          </div>
      </div>
      @foreach($allservices as $service)
        <div class="table-responsive">
        <table class="table table-hover table-striped">

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
                    <div class="col-md-8">
                        <div class="media-body">
                        <h5 class="media-heading"> {{ $service->job_title}} {{ $service->name_of_director }} </h5> 
                            <p>{{$service->company_name}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-body">
                            <h5 class="major-activity"> {{$service->major_activity_category}}</h5> 
                            <p>{{$service->company_major_activitygoods}}</p>
                        </div>
                    </div>
                </div>
                
            </td>
            <td>
                <!-- <div class="dropdown pull-right"> 
                   <a class="btn btn-danger" data-toggle="dropdown" role="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="fa fa-bars"></i> </a> 
                       <ul class="dropdown-menu from-right">  -->
                          <li class="list-unstyled"><a href="{{ route('send-email', $service->id) }}" class="dropdown-item"><i class="fa fa-envelope-o fa-fw"></i> Send Mail</a></li>  
                        <!-- </ul>
                  </div> -->

              </td>
          </tr>
                  
                </tbody>
            </table>
           
        </div>  <!--Table responsive -->
         @endforeach
         </div>















         <div id="works-table-data" class="col-xs-12 col-md-8">
        <div class="row">
            <div class="heading">
              <div style="font-family: 'Roboto Slab', serif; margin-bottom: 20px; margin-left: 2%;" class="f-w-300">Applicants For The Respective Activities</div>
          </div>
      </div>
      @foreach($allworks as $work)
        <div class="table-responsive">
        <table class="table table-hover table-striped">

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
                    <div class="col-md-8">
                        <div class="media-body">
                        <h5 class="media-heading"> {{ $work->job_title}} {{ $work->name_of_director }} </h5> 
                            <p>{{ $work->company_name }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-body">
                            <h5 class="major-activity"> {{ $work->major_activity_category }}</h5> 
                            <p>{{ $work->company_major_activitygoods }}</p>
                        </div>
                    </div>
                </div>
                
            </td>
            <td>
                <!-- <div class="dropdown pull-right"> 
                   <a class="btn btn-danger" data-toggle="dropdown" role="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="fa fa-bars"></i> </a> 
                       <ul class="dropdown-menu from-right">  -->
                          <li class="list-unstyled"><a href="{{ route('send-email', $work->id) }}" class="dropdown-item"><i class="fa fa-envelope-o fa-fw"></i> Send Mail</a></li>  
                        <!-- </ul> 
                  </div>-->

              </td>
          </tr>
                  
                </tbody>
            </table>
           
        </div> 
         @endforeach
         </div>
</div>


@section('major-goods-display')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#goods-table-data').hide();
      $("#services-table-data").hide();
      $('#works-table-data').hide();

			$('#major-activity-nav').addClass('col-md-offset-3');

			$('.major-activities-goods').click(function() {
				  $("#major-activity-nav").removeClass('col-md-offset-3');
				  $("#goods-table-data").show('10000');
          $('#services-table-data').hide();
          $("#works-table-data").hide('10000');
			});


//  Scripts for services


      $('#service-table-data').hide();
        $('#major-activity-nav').addClass('col-md-offset-3');

           $('.major-activities-services').click(function() {
                $('#major-activity-nav').removeClass('col-md-offset-3');
                $("#services-table-data").show('10000');
                $('#goods-table-data').hide('10000');
                $("#works-table-data").hide('10000');
            });

// Script for morks

           $('.major-activities-works').click(function() {
                $('#major-activity-nav').removeClass('col-md-offset-3');
                $("#works-table-data").show('10000');
                $('#goods-table-data').hide('10000');
                $("#services-table-data").hide('10000');
            });

    });

      

	</script>
@endsection