<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Permissions Policy -->
    <meta http-equiv="Permissions-Policy" content="unload=()">

    <!-- SEO Meta Tags -->
    @hasSection('seo')
        @yield('seo')
    @else
        <x-seo />
    @endif

    <!-- Favicon Icon -->


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-5.14.0.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/css/magnific-popup.min.css') }}" media="print" onload="this.media='all'">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.min.css') }}" media="print" onload="this.media='all'">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick/css/slick.min.css') }}" media="print" onload="this.media='all'">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Project Card Hover Styles -->
    <style>
        .project-card .project-home3-content.project-title-hover {
            opacity: 0 !important;
            pointer-events: none !important;
        }

        .project-card:hover .project-home3-content.project-title-hover {
            opacity: 1 !important;
            pointer-events: auto !important;
        }

        /* Responsive Typography */
        @media (max-width: 768px) {
            .section-title h1 {
                font-size: 1.75rem !important;
                line-height: 1.3 !important;
            }
            .section-title h2 {
                font-size: 1.5rem !important;
            }
            .hero3-content h4 {
                font-size: 1.25rem !important;
                line-height: 1.4 !important;
            }
        }
        @media (max-width: 480px) {
            .section-title h1 {
                font-size: 1.5rem !important;
                line-height: 1.3 !important;
            }
            .section-title h2 {
                font-size: 1.25rem !important;
            }
            .hero3-content h4 {
                font-size: 1.1rem !important;
            }
        }
    </style>

    @stack('styles')
</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

        <!-- Navbar -->
        @include('layouts.common.navbar')

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        @include('layouts.common.footer')

        <!-- Scroll Top Button -->
        <button class="scroll-top scroll-to-target" data-target="html" aria-label="Scroll to top"><span
                class="fas fa-angle-double-up"></span></button>
    </div>
    <!--End pagewrapper-->

    <!-- Jquery -->
    <script src="{{ asset('assets/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Popper -->
    <script src="{{ asset('assets/vendor/bootstrap/js/popper.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Appear Js -->
    <script src="{{ asset('assets/vendor/appear.min.js') }}"></script>
    <!-- Slick -->
    <script src="{{ asset('assets/vendor/slick/js/slick.min.js') }}" defer></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js') }}" defer></script>
    <!-- Image Loader -->
    <script src="{{ asset('assets/vendor/imagesloaded.pkgd.min.js') }}" defer></script>
    <!-- Isotope -->
    <script src="{{ asset('assets/vendor/isotope.pkgd.min.js') }}" defer></script>
    <!--  WOW Animation -->
    <script src="{{ asset('assets/vendor/wow.min.js') }}" defer></script>

    <!-- Custom script -->
    <script src="{{ asset('assets/js/script.js') }}" defer></script>

    @stack('scripts')
</body>

</html>
