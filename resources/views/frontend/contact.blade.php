@extends('layouts.app')
@section('title', 'Contact Us')
@include('layouts.partials._messages')
@section('content')

<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Contact Us"><span>Contact Us</span></h1>
      		<div class="page-breadcrumb">
                <a href="{{ route('index') }}">Home</a>/ <span>Contact Us</span>
            </div>
      	</div>
      </div>
    </div>
  </section>
<!-- Intro Section -->

<!-- Contact Section -->
<section class="padding ptb-xs-40">
    <div class="container">

        <div class="row">

            <div class="col-lg-8">

                <div class="headeing pb-30">
                    <h2>Get in Touch</h2>
                    <span class="b-line l-left line-h"></span>
                </div>
                <!-- Contact FORM -->
                <form class="contact-form " id="contact">
                   @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-field">
                                <input class="input-sm form-full @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="Your Full Name" required>
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Email" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full @error('subject') is-invalid @enderror" id="subject" type="text" name="subject" placeholder="Subject" required>
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-field">
                                <textarea class="form-full @error('message') is-invalid @enderror" id="message" rows="7" name="message" placeholder="Your Message" required></textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 mt-30">
                            <button class="btn-text" type="button" id="submit" name="button">
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>
                <!-- END Contact FORM -->
            </div>

            <div class="col-lg-4 contact mt-sm-30 mt-xs-30">
                <div class="headeing pb-20">
                    <h2>Contact Info</h2>
                    <span class="b-line l-left line-h"></span>
                </div>
                <div class="contact-info">

                    <ul class="info">
                        <li>
                            <div class="icon ion-ios-location"></div>
                            <div class="content">
                                <p>
                                    14, Toyin Street,
                                </p>
                                <p>
                                    Ikeja, Lagos.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div class="icon ion-android-call"></div>
                            <div class="content">
                                <p>
                                    +234 809 641 5395
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon ion-ios-email"></div>
                            <div class="content">
                                <p>
                                    info@cbs-services.com.ng
                                </p>
                                <p>
                                    http://www.cbs-services.com.ng
                                </p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
    <!-- Map Section -->

</section>
<!-- Map -->
{{-- <section class="map-box">
    <div class="map">
        <div id="map"></div>
    </div>
</section> --}}

@endsection
