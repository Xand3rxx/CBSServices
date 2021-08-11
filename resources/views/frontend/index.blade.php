@extends('layouts.app')
@section('title', 'Home')
@include('layouts.partials._messages')
@include('layouts.partials._css')
@section('content')

    <!--  Main Banner Start Here-->
    {{-- <div class="main-banner banner_up">
        <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
            <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
            <div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-129"  >
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/images/banner/slider1.jpg') }}"  alt=""  class="rev-slidebg" >
                        <!-- LAYERS -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Newspaper-Title tp-resizeme "
                        id="slide-129-layer-1"
                        data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
                        data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
                        data-fontsize="['50','50','50','30']"
                        data-lineheight="['55','55','55','35']"
                        data-width="['700','700','700','720']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on" >
                            <div class="banner-text">
                                <span class="sub-text">we are here to help you</span>
                                <h2>The best cleaning company in the country</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever.
                                </p>
                                <a class="btn-text" href="#"> Read More</a>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-130" data-title="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/images/banner/slider2.jpg') }}"  alt=""   class="rev-slidebg">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Newspaper-Title   tp-resizeme "
                        id="slide-130-layer-1"
                        data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
                        data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
                        data-fontsize="['50','50','50','30']"
                        data-lineheight="['55','55','55','35']"
                        data-width="['700','700','700','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                            <div class="banner-text">
                                <span class="sub-text">we are here to help you</span>
                                <h2>Professional Cleaning Services Provider</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever.
                                </p>
                                <a class="btn-text" href="#"> Read More</a>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-131">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/images/banner/slider3.jpg') }}"  alt=""   class="rev-slidebg " >
                        <!-- LAYERS -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Newspaper-Title   tp-resizeme "
                        id="slide-131-layer-1"
                        data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
                        data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
                        data-fontsize="['50','50','50','30']"
                        data-lineheight="['55','55','55','35']"
                        data-width="['700','700','700','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                            <div class="banner-text">
                                <span class="sub-text">we are here to help you</span>
                                <h2>We Are Cleaning Manager Always at Your Service.</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever.
                                </p>
                                <a class="btn-text" href="#"> Read More</a>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </div> --}}
		<!--  Main Banner End Here-->

		<!-- About -->
		<section class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-30">
					<div class="col-md-4 d-flex align-items-center">
						<div class="section_tit">
							<h2>What We Offer</h2>
							<span class="b-line l-left sm-l-center"></span>
						</div>
					</div>

					<div class="col-md-8 mt-xs-30 text-center text-md-left">
						<p>
							We help our clients go through the strenuous process of selecting adequate professional personnel that will be in charge of tidying up the organization and proper management of facilities in the building.
						</p>
                        <p>Our cleaning services are thorough, consistent, and customized. If you would like to request a special service, change your cleaning schedule, or skip an area in your home, just let us know! We are happy to fulfill every request in order to exceed your expectations.</p>
                        <p><a class="btn-text" href="{{ route('page', 'services') }}"> GET IN TOUCH WITH US</a></p>
					</div>
				</div>

				<div class="row mt-30 mt-xs-0">
					<div class="col-lg-3 col-md-6">
						<div class="clean_top mb-xs-30 feature-box">
							<div class="content">
								<img src="{{ asset('assets/images/cleaning-lady.svg') }}" alt="" height="50" width="50" />
								<h3>Operating Area</h3>
								<p>
									We operate in different parts of Nigeria. Distance is not a barrier for us!
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="clean_top mb-xs-30 feature-box">
							<div class="content">
								<img src="{{ ('assets/images/cleaner.svg') }}" alt="" height="50" width="50" />
								<h3>Commercial Service</h3>
								<p>
									Contact The Cleaning Authority, and we’ll do the cleaning for you!
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mt-sm-30">
						<div class="clean_top mb-xs-30 feature-box">
							<div class="content">
								<img src="{{ ('assets/images/clean.svg') }}" alt="" height="50" width="50" />
								<h3>Home Service</h3>
								<p>
									Invest in your free time with our services. Get started with an in-home estimate!
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mt-sm-30">
						<div class="clean_top mb-xs-30 feature-box">
							<div class="content">
								<img src="{{ ('assets/images/clean-1.svg') }}" alt="" height="50" width="50" />
								<h3>Special Service</h3>
								<p>
									We perform ongoing inspections to ensure every clean is up to our standards.
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- About -->

		<!-- Service_Section -->
		<section class="padding ptb-xs-40 gray-bg service_sec">
			<div class="container">
				<div class="row text-center mb-xs-30">
					<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
						<div class="section-title_home">
							<h2>How We Work</h2>
							<span class="b-line"></span>
							<p><i>Enjoy your time off...</i></p>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-md-12">
						<div class="service_slider_home next_btn_style">
							<div class="service_box">
								<figure>
									<img src="{{ asset('assets/images/service/img_2.jpg') }}" alt="" />
								</figure>
								<h3><a href="#">The Meeting</a></h3>
								<p>
									Accept our terms & price. We’ll then deploy an experienced team of cleaners.
								</p>
							</div>

                            <div class="service_box">
								<figure>
									<img src="{{ asset('assets/images/service/img_3.jpg') }}" alt="" />
								</figure>
								<h3><a href="#">The Cleaning</a></h3>
								<p>
									We are glad to see you as our client and always try to exceed your expectations.
								</p>
							</div>


                            <div class="service_box">
								<figure>
									<img src="{{ asset('assets/images/service/img_1.jpg') }}" alt="Call us" />
								</figure>
								<h3><a href="#">Give us a Call</a></h3>
								<p>
									You can also fill in our inquiry form, and we will call you back.
								</p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section>
		<!-- Service_Section_End -->

        @include('layouts.partials._save_time')

        @include('layouts.partials._services')

@endsection
