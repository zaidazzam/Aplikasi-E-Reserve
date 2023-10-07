<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} class="light-style layout-menu-fixed" dir="ltr"
    data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free"">

<head>
    <meta charset="utf-8" />
    <title>Kamojang.id</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite('resources/js/app.js', 'vendor/courier/build')

    <title>Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" /> --}}
    <link href="{{ asset('img/group12.svg') }}" rel="icon" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" /> --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet" /> --}}

    <!-- Icons. Uncomment required icon fonts -->
    <link href="{{ asset('assets/vendor/fonts/boxicons.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" /> --}}
    <!-- Core CSS -->
    <link href="{{ asset('assets/vendor/css/core.css') }}" rel="stylesheet" class="template-customizer-core-css">
    <link href="{{ asset('assets/vendor/css/theme-default.css') }}" rel="stylesheet"
        class="template-customizer-theme-css">
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" /> --}}
    {{-- <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" /> --}}

    <!-- Vendors CSS -->
    <link href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" /> --}}
    <link href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" /> --}}

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    {{-- <script src="../assets/vendor/js/helpers.js"></script> --}}

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    {{-- <script src="../assets/js/config.js"></script> --}}


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

        .icon {
            cursor: pointer;
            margin-right: 50px;
            line-height: 60px
        }

        .icon span {
            background: #f00;
            padding: 7px;
            border-radius: 50%;
            color: #fff;
            vertical-align: top;
            margin-left: -25px
        }

        .icon img {
            display: inline-block;
            width: 26px;
            margin-top: 4px
        }

        .icon:hover {
            opacity: .7
        }

        .logo {
            flex: 1;
            margin-left: 50px;
            color: #eee;
            font-size: 20px;
            font-family: monospace
        }

        .notifications {
            width: 300px;
            height: 0px;
            opacity: 0;
            position: absolute;
            top: 63px;
            right: 62px;
            border-radius: 5px 0px 5px 5px;
            background-color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
        }

        .notifications h2 {
            font-size: 14px;
            padding: 10px;
            border-bottom: 1px solid #eee;
            color: #999
        }

        .notifications h2 span {
            color: #f00
        }

        .notifications-item {
            display: flex;
            border-bottom: 1px solid #eee;
            padding: 6px 9px;
            margin-bottom: 0px;
            cursor: pointer
        }

        .notifications-item:hover {
            background-color: #eee
        }

        .notifications-item img {
            display: block;
            width: 50px;
            height: 50px;
            margin-right: 9px;
            border-radius: 50%;
            margin-top: 2px
        }

        .notifications-item .text h4 {
            color: #777;
            font-size: 16px;
            margin-top: 3px
        }

        .notifications-item .text p {
            color: #aaa;
            font-size: 12px
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('layouts.mitra.asidebar')
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('layouts.mitra.navbar')
                <!-- / Navbar -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Page Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="">
                            {{ $slot }}
                        </div>
                    </div>
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Tim
                                    E-Reserve</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    {{-- <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script> --}}
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    {{-- <script src="../assets/vendor/js/menu.js"></script> --}}
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    {{-- <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script> --}}

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- <script src="../assets/js/main.js"></script> --}}

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    {{-- <script src="../assets/js/dashboards-analytics.js"></script> --}}

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
        $(document).ready(function() {
            var down = false;
            $('#bell').click(function(e) {
                var color = $(this).text();
                if (down) {
                    $('#box').css('height', '0px');
                    $('#box').css('opacity', '0');
                    down = false;
                } else {
                    $('#box').css('height', 'auto');
                    $('#box').css('opacity', '1');
                    down = true;
                }
            });
        });
    </script>
</body>

</html>
