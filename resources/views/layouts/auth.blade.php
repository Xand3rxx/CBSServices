<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | {{ config('app.name', 'C.B & S Cleaning Service Limited') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.ico') }}">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="C.B & S Cleaning Service Limited main business focus is in janitorial, façade cleaning, fumigation, post-construction cleaning, floor treatment (marble, granite, terrazzo, vitrified tiles and wooden floors) and facilities management.">
    <meta name="keywords" content="Home-cleaning, Fumigation, Cleaning-services, Facility-management" />
    <meta name="email" content="info@cbs-services.com.ng" />
    <meta name="website" content="http://www.cbs-services.com.ng" />

    <!-- vendor css -->
    <link href="{{ asset('assets/dashboard/assets/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/assets/css/dashforge.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/assets/css/dashforge.auth.css') }}">
</head>

<body class="app app-login p-0">
    @include('layouts.partials._messages')
    <style>
        .app-auth-wrapper .app-logo .logo-icon {
            width: 175px !important;
            height: 60px;
        }
    </style>
    <header class="navbar navbar-header navbar-header-fixed">
        {{-- <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a> --}}
        <div class="navbar-brand">
            <a href="#" class="df-logo text-center"><img src="{{ asset('assets/images/logo.png') }}" height="65" alt="C.B & S Cleaning Services Logo"></a>
        </div><!-- navbar-brand -->
    </header><!-- navbar -->

    @yield('content')

    <footer class="footer">
    <div>
        <span>&copy; {{ date('Y') }} C.B & S Cleaning Services. All rights reserved.</span>
    </div>
    <div>
        <nav class="nav">
        </nav>
    </div>
    </footer>

    <script src="{{ asset('assets/dashboard/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/assets/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/assets/js/dashforge.js') }}"></script>
    <!-- append theme customizer -->
    <script src="{{ asset('assets/dashboard/assets/js/dashforge.settings.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
    <script>
        function displayMessage(message, type)
        {
            const Toast = swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 8000,
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

