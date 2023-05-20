<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    
    <link rel="stylesheet" href="{{ asset('assets/landing/fonts/icomoon/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/landing/fonts/flaticon/font/flaticon.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/tiny-slider.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/aos.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/glightbox.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/landing/css/style.css') }} ">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/landing/css/flatpickr.min.css') }} ">


    <title>Blogy &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>

<body>

    @include('landing.navbar')
    @yield('content')
    @include('landing.footer')


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/landing/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/landing/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/aos.js') }}"></script>
    <script src="{{ asset('assets/landing/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/navbar.js') }}"></script>
    <script src="{{ asset('assets/landing/js/counter.js') }}"></script>
    <script src="{{ asset('assets/landing/js/custom.js') }}"></script>


</body>

</html>
