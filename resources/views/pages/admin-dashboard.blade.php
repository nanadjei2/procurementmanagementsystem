@extends("admin-dashboard-master")
@section("title")
    PMS | Admin-Dashboard
@endsection

@section("content")
    <section class="login">
        <div class="container">
            <div class="text-center">@include('common.notifications')</div>

            <h2>You Are On The Dashboard Page</h2>
        </div><!--Container-->
    </section>
@endsection 