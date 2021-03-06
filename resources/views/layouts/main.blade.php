<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page Title -->
    <title>{{ $title }}</title>
    <!-- Denys Kitchen Logo -->
    <link rel="shorcut icon" href="{{ asset('/images/logo_denys.jpg') }}">

    <!-- CSS -->

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Kit Fontawesome 5.15.2 -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/fontawesome-5.15.2/css/all.min.css') }}">
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/font.css') }}">
    <!-- Preloader -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/preloader.css') }}">
    <!-- Custom Navbar -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/navbar.css') }}">
    <!-- Footer -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/footer.css') }}">
    <!-- Jquery UI -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/jquery/jquery-ui.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/animate/animate.css') }}">

    <!-- Custom CSS -->
    @yield('custom-css')
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <lottie-player src="{{ asset('images/loading.json') }}" speed="1"  loop autoplay class="lottie-gif col-lg-2 col-sm-4 col-6"></lottie-player>
    </div>

    @include('partials.navbar')

    @yield('content')

    @include('sweetalert::alert')
    <!-- Javascript -->
    
    <!-- Lottie -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- Jquery 4 -->
    <script src="{{ asset('js/cms/base/jquery/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Sweetalert -->
    <script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
    <!-- Preloader -->
    <script>
        $(window).on('load', function() {
            // Animate loader off screen
            width = $(window).width();
            $("#preloader").fadeOut("slow");
        });
    </script>

    @include('partials.footer')

    <!-- Custom JS -->
    @yield('custom-js')


</body>
</html>