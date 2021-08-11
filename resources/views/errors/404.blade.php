@extends('layouts.app')
@section('title', 'About Us')
@section('content')

<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="404"><span>404</span></h1>
      		<div class="page-breadcrumb">
                <a href="{{ route('index') }}">Home</a>/ <span>404</span>
            </div>
      	</div>
      </div>
    </div>
  </section>
<!-- Intro Section -->

<div class="page-404 padding ptb-xs-40">
    <div class="container">
      <!--Footer Info -->
      <div class="row text-center">
        <div class="col-lg-6 offset-lg-3"> <strong class="big-font">4<i class="ion-android-sad"></i>4</strong>
          <h2>Page Not Found..</h2>
          <a href="{{ route('index') }}" class="btn-text mt-15">Back to home page</a> </div>
      </div>
    </div>
  </div>

@endsection
