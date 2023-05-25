<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite('resources/js/app.js')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/beranda/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/beranda/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/beranda/css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('assets/beranda/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/beranda/css/styles.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/bootstrap-libs/css/bootstrap.min.css')}}"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body data-spy="scroll" data-target=".fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- <a class="navbar-brand logo-image" href="index.html"><img src="{{asset('assets/beranda/images/logo.svg')}}" alt="alternative"></a> -->
            <span class="logo-class">FOODSTEIN</span>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars text-black"></span>
                <span class="navbar-toggler-awesome fas fa-times text-black"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll text-black" href="#header">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll text-black" href="#features">FEATURES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll text-black" href="#details">DETAILS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll text-black" href="#pricing">PRICING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll text-black" href="#pricing">LOG IN</a>
                    </li>
                </ul>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->

    <!-- Header -->
    <header id="header" class="header">
        <!-- <div class="header-content">
            <div class="container text-center">
                <div class="backdrops">
                    <h1>FOODSTEIN</h1>
                </div>
            </div>
        </div> -->
        <div class="hero-image">
            <div class="hero-text">
                <h1 class="title-hero">FOODS-TEIN</h1>
                <span class="caption-hero">Kumpulan resep masakan dengan kandungan protein yang dapat di monitoring</span>
                <!-- <div class="bg-dark menu-frame">
                    <div class="col-12 bg-dark text-white">
                        a
                    </div>
                </div> -->
            </div>
        </div>
    </header>

    <!-- end of header -->
    <!-- end of navigation -->


</body>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap-libs/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/beranda/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/beranda/js/popper.min.js')}}"></script>
<script src="{{asset('assets/beranda/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/beranda/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/beranda/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/beranda/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/beranda/js/validator.min.js')}}"></script>
<script src="{{asset('assets/beranda/js/scripts.js')}}"></script>

</html>