@extends('layouts.auth')
@section('title', 'Registration')
@section('content')
<div class="row g-0 app-auth-wrapper">
    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
        <div class="d-flex flex-column align-content-end">
            <div class="app-auth-body mx-auto">
                <div class="app-auth-branding mb-4"><a class="app-logo" href="#"><img class="logo-icon me-2" src="{{ asset('assets/images/logo.png') }}" alt="logo"></a></div>
                <h2 class="auth-heading text-center mb-4">Sign up to Portal</h2>

                <div class="auth-form-container text-start mx-auto">
                    <form class="auth-form auth-signup-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="email mb-3">
                            <label class="sr-only" for="name">Your Name</label>
                            <input type="text" class="form-control signup-name @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full name" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="email mb-3">
                            <label class="sr-only" for="email">Your Email</label>
                            <input id="email" type="email" class="form-control signup-email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="password mb-3">
                            <label class="sr-only" for="signup-password">Password</label>
                            <input id="password" type="password" class="form-control signup-password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Create a password">
                            <small style="font-size: 10px;" class="form-text text-muted">Password must be 8 characters at least.</small>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="password mb-3">
                            <label class="sr-only" for="password_confirmation">Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm new password" required autocomplete="new-password">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
                        </div>
                    </form><!--//auth-form-->

                    <div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="login.html" >Log in</a></div>
                </div><!--//auth-form-container-->



            </div><!--//auth-body-->

            <footer class="app-auth-footer">
                <div class="container text-center py-3">
                <small class="copyright">© {{ date('Y') }} C.B & S Cleaning Services. All rights reserved.</small>

                </div>
            </footer><!--//app-auth-footer-->
        </div><!--//flex-column-->
    </div><!--//auth-main-col-->
    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
        <div class="auth-background-holder">
        </div>
        <div class="auth-background-mask"></div>
        <div class="auth-background-overlay p-3 p-lg-5">
            <div class="d-flex flex-column align-content-end h-100">
                <div class="h-100"></div>
                <div class="overlay-content p-3 p-lg-4 rounded">
                    <h5 class="mb-3 overlay-title">Create New Account</h5>
                    <div>It's free to signup and only takes a minute.</div>
                </div>
            </div>
        </div><!--//auth-background-overlay-->
    </div><!--//auth-background-col-->

</div><!--//row-->

@endsection
