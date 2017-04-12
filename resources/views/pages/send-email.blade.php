@extends('admin-dashboard-master')
@section('title')
PMS | Compose Email
@endsection
@section('content')        

    <div class="row m-b-40">
        <div class="col-xs-12 main" id="main">
        <div class="row email-inbox">

      <div class="text-center">@include('common.notifications')</div>
 {{--
    <div class="col-xs-12 col-lg-3">

        <div class="email-sidebar">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search inbox">
                    <div class="input-group-addon"><i class="fa fa-search"></i> 
                    </div>
                </div>
            </form> <a class="btn btn-block btn-warning" href="email-compose.html">Compose Mail</a> 
            <h4>Folders</h4> 
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="email-inbox.html"> <i class="sidebar-icon fa fa-inbox warning"></i> Inbox <span class="label label-warning label-rounded pull-right">20</span> 
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="email-compose.html"> <i class="sidebar-icon fa fa-envelope-o false"></i> Send Mail</a>
                </li>
                <li class="list-group-item">
                    <a href="email-inbox.html"> <i class="sidebar-icon fa fa-certificate success"></i> Important <span class="label label-success label-rounded pull-right">5</span> 
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="email-inbox.html"> <i class="sidebar-icon fa fa-file-text-o danger"></i> Drafts <span class="label label-danger label-rounded pull-right">3</span> 
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="email-inbox.html"> <i class="sidebar-icon fa fa-trash-o false"></i> Trash</a>
                </li>
            </ul>
            <h4>Categories</h4> 
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="email-inbox.html"> <i class="sidebar-icon fa fa-circle warning"></i>Work</a>
                </li>
                <li class="list-group-item">
                    <a href="email-inbox.html"> <i class="sidebar-icon fa fa-circle danger"></i>Documents</a>
                </li>
                <li class="list-group-item">
                    <a href="email-inbox.html"> <i class="sidebar-icon fa fa-circle success"></i>Social</a>
                </li>
                <li class="list-group-item">
                    <a href="email-inbox.html"> <i class="sidebar-icon fa fa-circle info"></i>Advertising</a>
                </li>
                <li class="list-group-item">
                    <a href="email-inbox.html"> <i class="sidebar-icon fa fa-circle primary"></i>Clients</a>
                </li>
            </ul>
        </div> 
    </div>--}}
    <div class="col-xs-12 col-lg-11">
        <div class="inbox-header">
            <div class="pull-right">
                <a href="{{ route('view-all-bidders') }}" class="btn btn-warning btn-sm"></i> Go Back</a>
                <a class="btn btn-warning btn-sm discard"><i class="fa fa-times"></i> Discard</a>
            </div>
            <h3>
                Compose email 
            </h3>
        </div>
        <div class="email-compose">
            <form action="{{ route('send-email') }}" method="POST" class="form-horizontal" novalidate>
                {{ csrf_field() }}
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">To:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ $RegisterMember->email }}" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Subject:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control email-forms" value="" name="subject">
                    </div>
                </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Content:</label>
                      <div class="col-sm-10">
                          <!-- <div id="email-compose-editor"></div> -->
                          <textarea class="form-control email-forms" rows="8" cols="8" name="message" placeholder="Write something..."></textarea>
                      </div>
                    </div>
            </div>
        <div class="text-right form-group">
            <!--<a href="" class="btn btn-warning" title="Send"><i class="fa fa-reply"></i> Send</a>-->
            <button class="btn btn-warning" title="Send" type="submit"><i class="fa fa-reply"></i> Send</button>
            <a class="btn btn-warning discard" title="Discard"><i class="fa fa-times"></i> Discard</a>
            <a href="{{ route('view-all-bidders') }}" class="btn btn-warning" title="Draft"> Go Back</a>
            
            </form>
        </div>
    </div>
</div>

        <div class="footer">
    <div class="row">
        <div class="col-xs-12">
            <a href="http://www.batchthemes.com/" target="_blank"></a><a href="http://www.themeforest.com/" target="_blank"></a>
        </div>
    </div>
</div>
            </div>
    </div>  
</div>
@endsection

@section('summernote')
  <script type="text/javascript">
   $(document).ready(function() {
        // $('#email-compose-editor').summernote({
        //     height: 300,                 // set editor height
        //     minHeight: null,             // set minimum height of editor
        //     maxHeight: null,             // set maximum height of editor
        //     focus: true                  // set focus to editable area after initializing summernote
        // });
        $('.discard').click(function() {
             $('.email-forms').val("");
        });
    });
  </script>

@endsection