@extends('layouts.app')
@section('title', 'About Us')
@section('content')

<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="About"><span>About</span></h1>
      		<div class="page-breadcrumb">
                <a href="{{ route('index') }}">Home</a>/ <span>About</span>
            </div>
      	</div>
      </div>
    </div>
  </section>
<!-- Intro Section -->

<!-- About Section -->
<section class="padding ptb-xs-40">
    <div class="container">
        <div class="row pb-60 pb-xs-40">
            <div class="col-md-8 offset-md-2">
                <div class="sec_hedding text-center">
                    <h2>Our Company</h2>
                    <span class="b-border"></span>
                    <p>
                        C.B & S Cleaning Service Limited main business focus is in janitorial, façade cleaning, fumigation, post-construction cleaning, floor treatment (marble, granite, terrazzo, vitrified tiles and wooden floors) and facilities management.
                    </p>
                </div>
            </div>
        </div>
        <hr class="divider">

        <div id="about-section" class="padding pt-xs-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-8">
                        <div class="block-title v-line">
                            <h2>What Makes Us Special</h2>
                        </div>
                        <div class="text-content">
                            <p>
                                We operate in different parts of Nigeria. Our operations are tested, and we leverage on our extensive years of experience. We guarantee quality and you can expect us to be attentive to very small details and to be sensitive to your needs.
                            </p>
                        </div>
                        <div class="post-content">
                            <div class="post-img">
                                <img class="img-responsive" src="{{ ('assets/images/housemaid-hands-cleans-table-with-cleaning-spray-TPD9F7S-768x513.jpg') }}" alt="Photo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="dark-bg our-vision light-color padding-40">
                            <div class="block-title">
                                <h2><span>Our</span> VISION</h2>
                            </div>
                            <p>
                                To be the cleaning company, rendering exceptional service that exceeds customer expectations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="solution_box about_new">
                    <i class="fa fa-bookmark color_orenge" aria-hidden="true"></i>
                    <h4>Our Mission</h4>
                    <p>
                        Rendering innovative service that increases customer satisfaction.
                    </p>

                </div>
            </div>

            <div class="col-lg-4 mt-sm-30 mt-xs-30">
                <div class="solution_box about_new">
                    <i class="fa fa-certificate color_orenge" aria-hidden="true"></i>
                    <h4>Core Values</h4>
                    <p>
                        Integrity, excellent customer service.
                    </p>

                </div>
            </div>

            <div class="col-lg-4 mt-sm-30 mt-xs-30">
                <div class="solution_box about_new">
                    <i class="fa fa-check-square-o color_orenge" aria-hidden="true"></i>
                    <h4>Assurance</h4>
                    <p>
                        The Company realizes the key to our success and total customer satisfaction is consistency.
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- About Section End-->

<div id="mission-section" class="ptb ptb-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="about-block clearfix">
                    <div class="fl width-25per box-shadow mt-15 mb-xs-15">
                        <img class="img-responsive" src="{{ asset('assets/images/about-1.jpg') }}" alt="Photo">
                    </div>
                    <div class="text-box pt-45 pb-15 pl-70 pl-xs-0 width-75per fl">
                        <div class="box-title">
                            <h3>We Are On Mission</h3>
                        </div>
                        <div class="text-content">
                            <p>
                                Our services include providing cleaning services to offices, homes, schools, etc at moderate prices, with the utmost care.
                                We guarantee the quality, and you can expect us to be attentive to very small details and to be sensitive to your needs. We redefined cleaning service into something far better than traditional cleaning services.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="about-block mb-40  clearfix">
                    <div class="fr width-25per box-shadow-l mt-15 mb-xs-15">
                        <img class="img-responsive" src="{{ asset('assets/images/about-2.jpg') }}" alt="Photo">
                    </div>
                    <div class="text-box text-right text-xs-left pt-45 pr-70 pr-xs-0 width-75per fl">
                        <div class="box-title">
                            <h3>Our Commitment</h3>
                        </div>
                        <div class="text-content">
                            <p>
                                All our service personnel are bonded, with guarantors known by us. You can be sure that your place is both kept clean and safe.
                                We are true to our claim, and we deeply value customer satisfaction in all our housekeeping services.
                                C.B & S Cleaning Services Limited does not just do the job, we do it right and do it with excellence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team -->
{{-- <section class="padding ptb-xs-4">
    <div class="container">
        <div class="row text-center mb-40 mb-xs-30">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                <div class="section-title_home">
                    <h2>Our Team</h2>
                    <span class="b-line"></span>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team_box img-scale">
                    <div class="team_picher">
                        <figure>
                            <img src="{{ asset('assets/images/team/default-female-avatar.png') }}" alt="Joy Ohkloho">
                        </figure>
                    </div>
                    <div class="team_detail">
                        <h3>Joy Ohkloho</h3>
                        <span>Office Cleaner</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-xs-30">
                <div class="team_box img-scale">
                    <div class="team_picher">
                        <figure>
                            <img src="{{ asset('assets/images/team/default-female-avatar.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="team_detail">
                        <h3>Jessica Adesola</h3>
                        <span>Window Cleaner</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-sm-30 mt-xs-30">
                <div class="team_box img-scale">
                    <div class="team_picher">
                        <figure>
                            <img src="{{ asset('assets/images/team/default-female-avatar.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="team_detail">
                        <h3>Sarah Ifeanyichukwu</h3>
                        <span>Office Cleaner</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-sm-30 mt-xs-30">
                <div class="team_box img-scale">
                    <div class="team_picher">
                        <figure>
                            <img src="{{ asset('assets/images/team/default-female-avatar.png') }}" alt="">
                        </figure>
                    </div>
                    <div class="team_detail">
                        <h3>Mackenzie Harvey</h3>
                        <span>Window Cleaner</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section> --}}
<!-- Team_End -->

<!-- Partner Section -->
<div id="partner-section" class="ptb ptb-xs-60 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="block-title v-line mb-35 ">
                    <h2><span>Our</span> Clients</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <ul class="logo-group">
                    <li class="partner-logo border-b">
                        <img src="{{ asset('assets/images/client/sas-limited.jpeg') }}" alt="SAS Consultants Limited">
                    </li>
                    <li class="partner-logo border-b">
                        <img src="{{ asset('assets/images/client/consolidated.png') }}" alt="Consolidated Hallmark Insurance Limited
                        ">
                    </li>
                    <li class="partner-logo border-b">
                        <img src="{{ asset('assets/images/client/sterling.jpeg') }}" alt="Sterling Bank PLC">
                    </li>
                    <li class="partner-logo border-r">
                        <img src="{{ asset('assets/images/client/polar.jpeg') }}" alt="Polar Afpro Limited">
                    </li>
                    <li class="partner-logo border-b">
                        <img src="{{ asset('assets/images/client/audeo.png') }}" alt="Audeo Energy Limited">
                    </li>
                    <li class="partner-logo border-b">
                        <img src="{{ asset('assets/images/client/petrobras.png') }}" alt="Petroleo Brasileiro Nigeria Limited">
                    </li>
                    <li class="partner-logo border-r">
                        <img src="{{ asset('assets/images/client/aiico.png') }}" alt="AIICO Multishield Limited">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
