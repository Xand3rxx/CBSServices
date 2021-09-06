@extends('layouts.auth')
@section('title', 'Registration')
@section('content')

<div class="content content-fixed content-auth">
    <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p">
        <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
            <div class="pd-t-20 wd-100p">
            <h4 class="tx-color-01 mg-b-5">Create New Account</h4>
            <p class="tx-color-03 tx-16 mg-b-40">It's free to signup and only takes a minute.</p>
            <form class="auth-form auth-signup-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter your Full name" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email address">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between mg-b-5">
                    <label class="mg-b-0-f">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
                    <small style="font-size: 10px;" class="form-text text-muted">Password must be 8 characters at least.</small>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="d-flex justify-content-between mg-b-5">
                    <label class="mg-b-0-f">Confirm Password</label>
                    </div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password" required autocomplete="new-password">
                </div>

                <div class="form-group tx-12">
                    By clicking <strong>Create an account</strong> below, you agree to our terms of service and privacy statement.
                </div><!-- form-group -->

                <button type="submit" class="btn btn-brand-02 btn-block">Create Account</button>
            </form>
            <div class="divider-text">or</div>
            <div class="tx-13 mg-t-20 tx-center">Already have an account? <a href="{{ route('login') }}">Sign In</a></div>
            </div>
        </div><!-- sign-wrapper -->
        <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
            <div class="mx-lg-wd-500 mx-xl-wd-550">
            <!-- <img src="assets/img/ibn-client-help.jpeg" class="img-fluid" alt=""> -->
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
            <div class="pos-absolute b-0 r-0 tx-12"></div>
        </div><!-- media-body -->
        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->

@endsection
