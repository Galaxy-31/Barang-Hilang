<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kehilangan Barang - @yield('title')</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('FP/css/all.css') }}">

    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="{{ asset('FP/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('FP/css/owl.theme.default.min.css') }}">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="{{ asset('FP/css/aos.css') }}">

    <!-- ------------ Custom Style ------------------------   -->
    <link rel="stylesheet" href="{{ asset('FP/css/Style.css') }}">

    <!-- -------------- Favicon -------------------------- -->
    <link rel="shortcut icon" href="{{ asset('FP/assets/icon.ico') }}">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        a {
            text-decoration: none;
            color: var(--text-gray);
        }
    </style>
</head>

<body>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    @include('layouts.navbar')

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>

    <!------------------------ Site Title ---------------------->

        @yield('content')

        <!------------x----------- Site Title ----------x----------->


    <!-- Jquery Library file -->
    <script src="{{ asset('FP/js/Jquery3.4.1.min.js') }}"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="{{ asset('FP/js/owl.carousel.min.js') }}"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="{{ asset('FP/js/aos.js') }}"></script>

    <!-- Custom Javascript file -->
    <script src="{{ asset('FP/js/main.js') }}"></script>

    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>