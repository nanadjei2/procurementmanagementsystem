<div class="notification text-center">
    @if(Session::has('icon-success'))
        <div class="row m-b-20">
            <div class="col-xs-12">
                <button data-type="success" class="btn btn-toast btn-success">{{ Session::get('icon-success') }}</button>
                <!--<button data-type="warning" class="btn btn-toast btn-warning">Show toast</button>
                <button data-type="danger" class="btn btn-toast btn-danger">Show toast</button>
                <button data-type="info" class="btn btn-toast btn-info">Show toast</button>
            </div>-->
        </div>

    

    @elseif(Session::has('icon-error'))

    
    {{ Session::get('icon-error') }}

    @endif
</div>