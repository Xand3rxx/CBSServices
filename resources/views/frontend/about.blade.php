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
                        CB & S Cleaning Service Limited main business focus is in janitorial, façade cleaning, fumigation, post-construction cleaning, floor treatment (marble, granite, terrazzo, vitrified tiles and wooden floors) and facilities management. We operate in different parts of Nigeria. Our operations are tested, and we leverage on our extensive years of experience.
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
                                Our operations are tested, and we leverage on our extensive years of experience. We guarantee quality and you can expect us to be attentive to very small details and to be sensitive to your needs.
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
                                The cleaning company, rednering exceptional service that exceeds customer expectations.
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

<!-- Team -->
<section class="padding ptb-xs-4">
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
</section>
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
                        <img src="{{ asset('assets/images/client/logo.jpg') }}" alt="">
                    </li>
                    <li class="partner-logo border-b">
                        <img src="{{ asset('assets/images/client/logo-1.jpg') }}" alt="">
                    </li>
                    <li class="partner-logo border-b">
                        <img src="{{ asset('assets/images/client/aiico.jpg') }}" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
