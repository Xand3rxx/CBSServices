@extends('layouts.dashboard')
@section('title', 'Bookings')
@section('content')

<div class="content-body">
    <div class="container pd-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="{{ route('cbs-dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Service Bookings</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row row-xs">
        <div class="col-lg-12 col-xl-12 mg-t-10">
            <div class="card mg-b-10">
                <div class="card-header pd-t-20 d-sm-flex align-items-start justify-content-between bd-b-0 pd-b-0">
                    <div>
                        <h6 class="mg-b-5">Service Bookings</h6>
                        <p class="tx-13 tx-color-03 mg-b-0">This table displays a list of all <strong> Service Bookings</strong> as of {{ date('M, d Y') }}</p>
                    </div>
                </div><!-- card-header -->
                @include('dashboard.includes.bookings-table')
            </div>
        </div>
     </div>
    </div>
</div>
@endsection
