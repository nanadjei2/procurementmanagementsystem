 @if(Session::has('notify-success'))
    <div id="alert-success" style="border-radius: 0px; border-left-width: 7px; border-left-color: #3CB871 ; margin-top: 5%;" class="alert alert-success alert-dismissible" role="alert">
        <button id="close" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><i class="fa fa-check-circle fa-lg fa-fw"></i>Great </strong> {{ Session::get('notify-success') }}
    </div>

       <!--$.notify({{ Session::get('notify-success') }})-->
 

    @elseif(Session::has('icon-error'))

    
    {{ Session::get('icon-error') }}

    @endif
</div>