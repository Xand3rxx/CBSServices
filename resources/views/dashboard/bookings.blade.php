@extends('layouts.dashboard')
@section('title', 'Bookings')
@section('content')
<div class="container-xl ">

    <h1 class="app-page-title">Service Bookings</h1>
    <hr class="mb-4">

    @include('dashboard.includes.bookings-table')

</div><!--//container-fluid-->
@endsection
