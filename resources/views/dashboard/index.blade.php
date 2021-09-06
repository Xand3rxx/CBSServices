@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')

<div class="content-body">
    <div class="container pd-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </nav>
          <h4 class="mg-b-0 tx-spacing--1">Welcome, {{ $name }}!</h4>
        </div>
    </div>

        <div class="row row-xs col-lg-12">
            <div class="col-sm-6 col-lg-6">
              <div class="card card-body">
                <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Service Bookings</h6>
                <div class="d-flex d-lg-block d-xl-flex align-items-end">
                <h5 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1"><a href="#"> {{ $services->count() }}</a></h5>
                </div>

              </div>
            </div>
            <div class="col-sm-6 col-lg-6">
              <div class="card card-body">
                <h6 class="tx-uppercase tx-11 tx-spacing-1 tx-color-02 tx-semibold mg-b-8">Users</h6>
                <div class="d-flex d-lg-block d-xl-flex align-items-end">
                  <h5 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1"><a href="">{{ $userCount }}</a></h5>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-xl-12 mg-t-10">
                <div class="card mg-b-10">
                    <div class="card-header pd-t-20 d-sm-flex align-items-start justify-content-between bd-b-0 pd-b-0">
                        <div>
                            <h6 class="mg-b-5">Service Bookings</h6>
                            <p class="tx-13 tx-color-03 mg-b-0">This table displays a list of your <strong>Most Recent Service Bookings</strong></p>
                        </div>
                    </div><!-- card-header -->
                    @include('dashboard.includes.bookings-table')
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
