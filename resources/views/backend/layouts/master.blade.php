<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Admin Dashboard | Medicare Diagnostic Lab')</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Medicare Diagnostic Lab Admin Dashboard">
    <meta name="keywords" content="Medicare, Dashboard, Admin Template, Bootstrap 5">
    <meta name="author" content="Your Name">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('backend_assets/images/logo.png') }}" type="image/x-icon">
    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
    <!-- [Tabler Icons] -->
    <link rel="stylesheet" href="{{ asset('backend_assets/fonts/tabler-icons.min.css') }}">
    <!-- [Feather Icons] -->
    <link rel="stylesheet" href="{{ asset('backend_assets/fonts/feather.css') }}">
    <!-- [Font Awesome Icons] -->
    <link rel="stylesheet" href="{{ asset('backend_assets/fonts/fontawesome.css') }}">
    <!-- [Material Icons] -->
    <link rel="stylesheet" href="{{ asset('backend_assets/fonts/material.css') }}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('backend_assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('backend_assets/css/style-preset.css') }}">
</head>
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->

<!-- Include Sidebar -->
@include('backend.partials.sidebar')

<!-- Include Navbar -->
@include('backend.partials.navbar')

<!-- [ Main Content ] start -->
@yield('content')
<!-- [ Main Content ] end -->

<!-- Include Footer -->
@include('backend.partials.footer')

<!-- [Page Specific JS] start -->
<script src="{{ asset('backend_assets/js/plugins/apexcharts.min.js') }}"></script>
<script src="{{ asset('backend_assets/js/pages/dashboard-default.js') }}"></script>
<!-- [Page Specific JS] end -->
<!-- Required Js -->
<script src="{{ asset('backend_assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('backend_assets/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('backend_assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend_assets/js/fonts/custom-font.js') }}"></script>
<script src="{{ asset('backend_assets/js/pcoded.js') }}"></script>
<script src="{{ asset('backend_assets/js/plugins/feather.min.js') }}"></script>

<script>layout_change('light');</script>
<script>change_box_container('false');</script>
<script>layout_rtl_change('false');</script>
<script>preset_change("preset-1");</script>
<script>font_change("Public-Sans");</script>
<!-- [ Main Content ] start -->
@yield('script')
@yield('style')
</body>
</html>
