<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<title>@yield('title') | {{ config('app.name', 'C.B & S Cleaning Service Limited') }}</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="C.B & S Cleaning Service Limited main business focus is in janitorial, façade cleaning, fumigation, post-construction cleaning, floor treatment (marble, granite, terrazzo, vitrified tiles and wooden floors) and facilities management." ">
    <meta name="keywords " content="Home-cleaning, Fumigation, Cleaning-services, Facility-management " />
    <meta name="email " content="info@cbs-services.com.ng " />
    <meta name="website " content="http://www.cbs-services.com.ng " />
    <!-- CSRF Token -->
    <meta name="csrf-token " content="{{ csrf_token() }} ">

    <link rel="shortcut icon " type="image/x-icon " href="{{ asset( 'assets/images/logo.ico') }}">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset( 'assets/dashboard/plugins/fontawesome/js/all.min.js') }} "></script>

    <!-- App CSS -->
    <link id="theme-style " rel="stylesheet" href="{{ asset('assets/dashboard/css/portal.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/datatables/dataTables.bs4.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/dashboard/datatables/dataTables.bs4-custom.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
</head>

<body class="app ">
    <style>
        .logo-icon {
            width: 155px !important;
            height: 60px;
        }

        div.dt-buttons {
            margin-top: 1em;
            margin-left: 1.5em;
        }

        button.dt-button,
        div.dt-button,
        a.dt-button,
        input.dt-button {
            font-size: inherit !important;
            color: #fff !important;
            background-color: #DAA106 !important;
            background: linear-gradient(to bottom, rgb(218 161 6) 0%, rgb(218 161 6) 100%);
            border-color: #DAA106 !important;
            display: inline-block !important;
            font-weight: 400 !important;
            text-align: center !important;
            vertical-align: middle !important;
            user-select: none !important;
            background-color: transparent !important;
            border: 1px solid transparent !important;
            padding: 0.46875rem 0.9375rem !important;
            font-size: 0.875rem !important;
            line-height: 1.5 !important;
            border-radius: 0.25rem !important;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out !important;
            line-height: 1.5 i !important;
            text-decoration: none;
            outline: none;
            text-overflow: ellipsis;
        }

        button.dt-button:hover,
        div.dt-button:hover,
        a.dt-button:hover,
        input.dt-button:hover {
            color: #fff !important;
            background-color: #FEB20D !important;
            background: linear-gradient(to bottom, rgb(233 125 31) 0%, rgb(233 125 31) 100%);
            border-color: #DAA106 !important;
        }

        div.dataTables_wrapper div.dataTables_info {
            margin-left: 8px !important;
            color: #DAA106;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #DAA106;
            border-color: #DAA106;
        }
    </style>
    @include('layouts.partials._dashboard_header')

    <div class="app-wrapper ">
	    <div class="app-content pt-3 p-md-3 p-lg-4 ">
            @yield('content')
        </div><!--//app-content-->

        <footer class="app-footer ">
            <div class="container text-center py-3 ">
                <small class="copyright ">© {{ date('Y') }} C.B & S Cleaning Services. All rights reserved.</small>
            </div>
        </footer><!--//app-footer-->
    </div><!--//app-wrapper-->

    <!-- Javascript -->
    <script src="{{ asset( 'assets/dashboard/js/jquery.min.js') }}"></script>
    <script src="{{ asset( 'assets/dashboard/plugins/popper.min.js') }} "></script>
    <script src="{{ asset( 'assets/dashboard/plugins/bootstrap/js/bootstrap.min.js') }} "></script>

    <!-- Page Specific JS -->
    <script src="{{ asset('assets/dashboard/js/app.js') }} "></script>
    <script src="{{ asset('assets/dashboard/datatables/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets/js/sweetalert2.min.js') }} "></script>
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
    <script>
        $(function(){
            // Basic DataTable
            $('#basicExample, #demoRequests #paymentExample').DataTable({
                "iDisplayLength": 10,
                "language": {
                    "searchPlaceholder": 'Search...',
                    "sSearch": '',
                    "lengthMenu": '_MENU_ items/page',
                    // "lengthMenu": "Display _MENU_ records per page",
                    "zeroRecords": "No matching records found",
                    // "info": "Showing page _PAGE_ of _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                },
                "dom": 'Bfrtip',
                "buttons": [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                "processing": true,
                // "scrollY":        "200px",
                // "scrollCollapse": true,
            });
        });
    </script>

    @stack('scripts')

</body>
</html>

