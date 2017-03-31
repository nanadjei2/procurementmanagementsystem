@extends('user-dashboard-master')
@section('title')
	PMS | View-User-Info
@endsection

@section('content')
		          <div class="col-xs-12 main" id="main">
				<div class="row p-t-20 p-b-20">
    <div class=" col-xs-12 col-md-offset-2 col-mdm-8 col-lg-8 invoice">

        <div class="row">
            <div class="col-xs-12">
                <div class="invoice-title p-20">
                    <h3 class="pull-left">Profile Info</h3>
                    <h3 class="pull-right">User Id #{{ $user->id }}</h3>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
@if(Auth::check())
        <div class="row">
            <div class="col-xs-12 col-xl-6">
                <address class="p-20">
		            <h4>Basic Info:</h4>
		            <br>
		            <br>
					<strong>{{ $user->firstname }} {{ $user->othernames }}</strong>
		            <br>
		           	 <!-- $user->Address -->
       			 </address>
            </div>
            <div class="col-xs-12 col-xl-6 text-right">
                <address class="p-20">
		            <h4 class="text-bold">Shipped To:</h4>
		            <br>
		            <br>
					<strong>Lucas Koch</strong>
		            <br>
					1600 Amphitheatre Parkway
		            <br>
					Mountain View, CA 94043
        		</address>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-xl-6">
                <address class="p-20">
		            <h4>Payment Method:</h4>
		            <br>
		            <br>
		            Visa ending **** 2439 
		            <br>
		            lucas.smith@gmail.com
        	</address>
            </div>
            <div class="col-xs-12 col-xl-6 text-right">
                <address class="p-20">
		            <h4 class="text-bold">Order Date:</h4>
		            <br>
		            <br>
		            06/08/2015 
		            <br>
		            <br>
        		</address>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <h4 class="m-20">Order summary</h4>
                <div class="table-responsive p-20">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td><strong>Item</strong> 
                                </td>
                                <td class="text-center"><strong>Price</strong> 
                                </td>
                                <td class="text-center"><strong>Quantity</strong> 
                                </td>
                                <td class="text-right"><strong>Totals</strong> 
                                </td>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>11-inch MacBook Air</td>
                                <td class="text-center">$899</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$899</td>
                            </tr>

                            <tr>
                                <td>Apple Watch 38mm Silver Aluminum Case with White Sport Band</td>
                                <td class="text-center">$349</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$349</td>
                            </tr>

                            <tr>
                                <td>27-inch iMac with Retina 5K display</td>
                                <td class="text-center">$2,299</td>
                                <td class="text-center">1</td>
                                <td class="text-right">$2,299</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-center"><strong>Subtotal</strong> 
                                </td>
                                <td class="text-right">$3,547</td>
                            </tr>
                            <tr>
                                <td class="no-border-top"></td>
                                <td class="no-border-top"></td>
                                <td class="no-border-top text-center"><strong>Shipping</strong> 
                                </td>
                                <td class="no-border-top text-right">$15</td>
                            </tr>
                            <tr>
                                <td class="no-border-top"></td>
                                <td class="no-border-top"></td>
                                <td class="no-border-top text-center"><strong>Total</strong> 
                                </td>
                                <td class="no-border-top text-right">$3,562</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
				<div class="footer">
    <div class="row">
        <div class="col-xs-12">
            <a href="http://www.batchthemes.com/" target="_blank">© 2016. Batch Themes Ltd. </a><a href="http://www.themeforest.com/" target="_blank">Buy Marino</a>
        </div>
    </div>
</div>
            </div>
@endsection