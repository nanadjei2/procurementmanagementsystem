@extends('master')

@section("title")
    PMS | Admin-Dashboard
@endsection

@section("content")
    <section class="admin-dashboard">
        <div class="container">
            @include('common.notifications')
            <h2>You are On the Admin Dashboard Page</h2>
        </div>
    </section>
@endsection