<html lang="en" dir="ltr" data-nav-layout="vertical" loader="disable">

<head><!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>noa - Bootstrap 5 Premium Admin &amp; Dashboard Template</title>
    {{-- Jquery --}}
    <script src="{{ asset('noa-assets/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Favicon -->
    <link rel="icon" href={{ asset('noa-assets/assets/images/brand-logos/favicon.ico') }} type="image/x-icon">
    <!-- Choices JS -->
    <script src={{ asset('noa-assets/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}></script>
    <!-- Main Theme Js -->
    <script src={{ asset('noa-assets/assets/js/main.js') }}></script>
    <!-- Bootstrap Css -->
    <link id="style" href={{ asset('noa-assets/assets/libs/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <!-- Style Css -->
    <link href={{ asset('noa-assets/assets/css/styles.min.css') }} rel="stylesheet">
    <!-- Icons Css -->
    <link href={{ asset('noa-assets/assets/css/icons.css') }} rel="stylesheet">
    <!-- Node Waves Css -->
    <link href={{ asset('noa-assets/assets/libs/node-waves/waves.min.css') }} rel="stylesheet">
    <!-- Simplebar Css -->
    <link href={{ asset('noa-assets/assets/libs/simplebar/simplebar.min.css') }} rel="stylesheet">
    <!-- Color Picker Css -->
    <link rel="stylesheet" href={{ asset('noa-assets/assets/libs/flatpickr/flatpickr.min.css') }}>

    <link rel="stylesheet" href={{ asset('noa-assets/assets/libs/@simonwep/pickr/themes/nano.min.css') }}>
    <!-- Choices Css -->
    <link rel="stylesheet" href={{ asset('noa-assets/assets/libs/choices.js/public/assets/styles/choices.min.css') }}>
</head>

<body>
    <!-- End Switcher -->
    <!-- Loader -->
    <div id="loader" class="d-none"> <img src="noa-assets/assets/images/media/loader.svg" alt=""> </div>
    <!-- Loader -->
    <div class="page">
        <!-- app-header -->
        @include('template.header')
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        @include('template.sidebar')
        <!-- End::app-sidebar -->
        <div class="main-content app-content">
            <div class="container-fluid">

                @yield('content')
            </div>
        </div>
    </div>
    <!-- Popper JS -->
    <script src={{ asset('noa-assets/assets/libs/@popperjs/core/umd/popper.min.js') }}></script>
    <!-- Bootstrap JS -->
    <script src={{ asset('noa-assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <!-- Defaultmenu JS -->
    <script src={{ asset('noa-assets/assets/js/defaultmenu.min.js') }}></script>
    <!-- Node Waves JS-->
    <script src={{ asset('noa-assets/assets/libs/node-waves/waves.min.js') }}></script>
    <!-- Sticky JS -->
    <script src={{ asset('noa-assets/assets/js/sticky.js') }}></script>
    <!-- Simplebar JS -->
    <script src={{ asset('noa-assets/assets/libs/simplebar/simplebar.min.js') }}></script>
    <script src={{ asset('noa-assets/assets/js/simplebar.js') }}></script>
    <!-- Custom JS -->
    <script src={{ asset('noa-assets/assets/js/custom.js') }}></script>

    <script src="{{asset('helper/formatRupiah.js')}}"></script>

    @stack('scripts')
</body>
