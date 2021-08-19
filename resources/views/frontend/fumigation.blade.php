@extends('layouts.app')
@section('title', 'Fumigation Service')
@include('layouts.partials._css')
@section('content')

<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Fumigation Service"><span>Fumigation Service</span></h1>
      		<div class="page-breadcrumb">
                <a href="{{ route('index') }}">Home</a>/ <a href="{{ route('page', 'services') }}">Services</a>/ <span>Fumigation Service</span>
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
                                <a class="active" href="#">Fumigation</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-xs-30 mt-sm-30">
                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('assets/images/service/img_5.jpg') }}" alt="Fumigation">
                    </figure>
                </div>
                <div class="text-box mt-40">
                    <div class="box-title mb-20">
                        <h2>Fumigation Service Details</h2>
                    </div>
                    <div class="text-content">
                        <p>
                            We prevent pest from coming in contact with your goods and equipments.
                        </p>

                    </div>

                    {{-- <div class="pricing-2 columns_padding_25 pricing-style2" id="pricing_table2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-xs-30">
                                    <div class="pricing_table shadow">
                                        <div class="package_title">
                                            <div class="package-price">
                                                <span class="currency-symbol">$</span><span class="price">3</span><span class="duration">/square meter</span>
                                            </div>

                                        </div>
                                        <ul class="price_feature">
                                            <li>
                                                1 Cleaner
                                            </li>
                                            <li>
                                                1-3 hours cleaning time
                                            </li>
                                            <li>
                                                7:00 am - 10:00pm visiting hours
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
