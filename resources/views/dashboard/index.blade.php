@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
<div class="container-xl ">

    <h1 class="app-page-title mb-3">Overview</h1>
    <hr class="mb-4">

    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
        <div class="inner">
            <div class="app-card-body">
                <h5 class="mb-3">Welcome, {{ $name }}!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div><!--//app-card-body-->
        </div><!--//inner-->
    </div>

    <div class="row g-4 mb-4">
        <div class="col-6 col-lg-6">
            <div class="app-card app-card-stat shadow-sm h-100 ">
                <div class="app-card-body p-3 p-lg-4 ">
                    <h4 class="stats-type mb-1 ">Service Bookings</h4>
                    <div class="stats-figure ">{{ $services->count() }}</div>
                </div><!--//app-card-body-->
                <a class="app-card-link-mask " href="# "></a>
            </div><!--//app-card-->
        </div><!--//col-->
        <div class="col-6 col-lg-6">
            <div class="app-card app-card-stat shadow-sm h-100 ">
                <div class="app-card-body p-3 p-lg-4 ">
                    <h4 class="stats-type mb-1 ">Users</h4>
                    <div class="stats-figure ">{{ $userCount }}</div>
                </div><!--//app-card-body-->
            </div><!--//app-card-->
        </div><!--//col-->
    </div><!--//row-->

    <h1 class="app-page-title mb-3">Recent Service Bookings</h1>
    <hr class="mb-4">

    @include('dashboard.includes.bookings-table')

</div><!--//container-fluid-->
@endsection
