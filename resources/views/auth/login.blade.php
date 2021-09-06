@extends('layouts.auth')
@section('title', 'Login')
@section('content')
<div class="content content-fixed content-auth">
    <div class="container">
      <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
        <div class="media-body align-items-center d-none d-lg-flex">
          <div class="mx-wd-600">
            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('assets/images/bg_88.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('assets/images/banner/slider2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('assets/images/banner/slider1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('assets/images/service/img_5.jpg') }}" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
          </div>
          <div class="pos-absolute b-0 l-0 tx-12 tx-center">

          </div>
        </div><!-- media-body -->
        <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
          <div class="wd-100p">
            <h3 class="tx-color-01 mg-b-5">Sign In</h3>
            <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please sign in to continue.</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                <label>Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="yourname@yourmail.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                    <label class="mg-b-0-f">Password</label>
                    <a href="" class="tx-13">Forgot password?</a>
                </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-brand-02 btn-block">Sign In</button>
                <div class="divider-text">or</div>
                <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="{{ route('register') }}">Create One
            </div>
            </form>
        </div><!-- sign-wrapper -->
      </div><!-- media -->
    </div><!-- container -->
  </div><!-- content -->
</div>

@endsection
