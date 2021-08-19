<!-- HEADER -->
<style>
    .top-nav-logo {
        width: 75% !important;
    }

    @media (min-width: 650px) and (max-width: 1200px) {
        .top-nav-logo {
            width: 25% !important;
        }
    }

    @media (min-width: 320px) and (max-width: 480px) {
        .top-nav-logo {
            width: 40% !important;
        }
    }
</style>
<header>
    <div class="top-part__block">
        <div class="search__box-block">
            <div class="container">
                <input type="text" id="search" class="input-sm form-full" placeholder="Search Now">
                <a href="#!" class="search__close-btn"> <i class="fa fa-times" aria-hidden="true"></i> </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <p>
                        Welcome to our corporate buisness
                    </p>
                </div>
                {{-- <div class="col-sm-5">
                    <div class="social-link__block text-right">
                        <a href="#" class="facebook"> <i class="fa fa-facebook"></i> </a>
                        <a href="#" class="twitter"> <i class="fa fa-twitter"></i> </a>
                        <a href="#" class="google-plus"> <i class="fa fa-google-plus"></i> </a>
                        <a href="#" class="linkedin"> <i class="fa fa-linkedin"></i> </a>

                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="middel-part__block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 logo col-md-12 d-flex align-items-center">

                    <a href="{{ route('index') }}"> <img src="{{ asset('assets/images/logo.png') }}" class="top-nav-logo" alt="Logo"> </a>

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle hidden-lg-up" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="top-info__block text-right">
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    14, Toyin Street,
                                    <span> Ikeja, Lagos</span>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>
                                    Call Us
                                    <span> +234 817 341 1535 <br> +234 809 641 5395 </span>
                                </p>
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p>
                                    Mail Us
                                    <span> <a href="mailto:info@cbs-services.com.ng">info@cbs-services.com.ng</a> </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_nav stricky-header__top navbar-toggleable-md">

        <nav class="navbar navbar-default navbar-sticky bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->

                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav mobile-menu d-flex justify-content-between">
                        <li>
                            <a href="{{ route('index') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'about') }}">About us</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'services') }}">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'contact') }}">Contact us</a>
                        </li>
                    </ul>
                </div>
                <!--navbar-collapse -->
            </div>
        </nav>
    </div>
</header>

<!-- END HEADER -->
