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

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/dashboard/plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/dashboard/css/portal.css') }}">

</head>

<body class="app app-login p-0">
    @include('layouts.partials._messages')
    <style>
        .app-auth-wrapper .app-logo .logo-icon {
            width: 175px !important;
            height: 60px;
        }
    </style>
    @yield('content')

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

