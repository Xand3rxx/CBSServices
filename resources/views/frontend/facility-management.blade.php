@extends('layouts.app')
@section('title', 'Facility Management Service')
@include('layouts.partials._css')
@section('content')

<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Facility Management Service"><span>Facility Management Service</span></h1>
      		<div class="page-breadcrumb">
                <a href="{{ route('index') }}">Home</a>/ <a href="{{ route('page', 'services') }}">Services</a>/ <span>Facility Management Service</span>
            </div>
      	</div>
      </div>
    </div>
  </section>
<!-- Intro Section -->

<!-- Service Section -->
<div id="services-section" class="padding ptb-xs-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sx-12">
                <div class="single-sidebar-widget">
                    <div class="special-links">
                        <ul>
                            <li>
                                <a class="active" href="#">Facility Management</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-xs-30 mt-sm-30">
                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('assets/images/service/img_4.jpg') }}" alt="Facility Management">
                    </figure>
                </div>
                <div class="text-box mt-40">
                    <div class="box-title mb-20">
                        <h2>Facility Management Service Details</h2>
                    </div>
                    <div class="text-content">
                        <p>
                            We provide professional management and maintenance of clients building and equipment.
                        </p>

                    </div>

                    {{-- <div class="pricing-2 columns_padding_25 pricing-style2" id="pricing_table2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-xs-30">
                                    <div class="pricing_table shadow">
                                        <div class="package_title">
                                            <div class="package-price">
                                                <span class="currency-symbol">$</span><span class="price">65</span><span class="duration">/hour</span>
                                            </div>

                                        </div>
                                        <ul class="price_feature">
                                            <li>
                                                1-5 Cleaners
                                            </li>
                                            <li>
                                                1-4 hours cleaning time
                                            </li>
                                            <li>
                                                9:00 am - 7:00pm visiting hours
                                            </li>
                                        </ul>
                                        <div class="price_btn">
                                            <a href="{{ route('page', 'services') }}" class="btn xplus-btn pricing">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- table end -->
                            </div>
                            <!-- row end -->
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Section end -->



@endsection
