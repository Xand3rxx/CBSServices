<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="C.B & S Cleaning Service Limited main business focus is in janitorial, façade cleaning, fumigation, post-construction cleaning, floor treatment (marble, granite, terrazzo, vitrified tiles and wooden floors) and facilities management." />
    <meta name="keywords" content="Home-cleaning, Fumigation, Cleaning-services, Facility-management" />
    <meta name="email" content="info@cbs-services.com.ng" />
    <meta name="website" content="http://www.cbs-services.com.ng" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'C.B & S Cleaning Service Limited') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.ico') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css">
    <!--Main Slider-->
    <link href="{{ asset('assets/css/settings.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/layers.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/header.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/index.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/theme-color/default.css') }}" rel="stylesheet" type="text/css" id="theme-color" />
</head>
<body>

<style>
@media (min-width: 600px) and (max-width: 1200px) {
    .slot-holder, .rev_slider_wrapper, .tp-simpleresponsive, .tp-revslider-mainul, .tp-fullwidth-forcer, .rev_slider {
        width: 725px !important;
        height: 620px !important;
    }
}
@media (min-width: 320px) and (max-width: 480px) {
    .slot-holder, .rev_slider_wrapper, .tp-simpleresponsive, .tp-revslider-mainul, .tp-fullwidth-forcer, .rev_slider {
        width: 400px !important;
        height: 333px !important;
    }
}
</style>
    <!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>
	<!--loader-->

    @include('layouts.partials._frontend_header')

        @yield('content')

    @include('layouts.partials._frontend_footer')

    <!-- Site Wraper End -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/tether.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.easing.js') }}" type="text/javascript"></script>

		<!-- fancybox Js -->
		<script src="{{ asset('assets/js/jquery.mousewheel-3.0.6.pack.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="{{ asset('assets/js/owl.carousel.js') }}" type="text/javascript"></script>

		<!-- imagesloaded Js -->
		<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
		{{-- <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script> --}}
		<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/masonry.pkgd.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/jquery.appear.js') }}" type="text/javascript"></script>
		<script type="text/javascript" src="{{ asset('assets/js/jquery.revolution.js') }}"></script>

		<!-- revolution Js -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery.themepunch.tools.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/jquery.themepunch.revolution.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/extensions/revolution.extension.slideanims.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/extensions/revolution.extension.layeranimation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/extensions/revolution.extension.navigation.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/extensions/revolution.extension.parallax.min.js') }}"></script>
		<!-- custom Js -->
		<script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/js/custom1.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>

        <script>
            function displayMessage(message, type)
            {
                const Toast = swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 50000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });
                Toast.fire({
                    icon: type,
                    title: message
                });
            }
        </script>
        @stack('scripts')

</body>
</html>
