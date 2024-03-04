<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
            <div class="hero_area">
                @include('layouts.navigation')

                <section class=" slider_section position-relative">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="box">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="detail-box">
                                                    <div>
                                                        <h1>
                                                            Digital Currency
                                                        </h1>
                                                        <h2>
                                                            The Future of Trading.
                                                        </h2>
                                                        <div class="">
                                                            <a href="">
                                                                Creer Compte
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="img-box">
                                                    <img src="../assets/images/slider-img.png" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="box">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="detail-box">
                                                    <div>
                                                        <h1>
                                                            Digital Currency
                                                        </h1>
                                                        <h2>
                                                            The Future of Trading.
                                                        </h2>
                                                        <div class="">
                                                            <a href="">
                                                                Get Started
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="img-box">
                                                    <img src="../assets/images/slider-img.png" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="box">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="detail-box">
                                                    <div>
                                                        <h1>
                                                            Digital Currency
                                                        </h1>
                                                        <h2>
                                                            The Future of Trading.
                                                        </h2>
                                                        <div class="">
                                                            <a href="">
                                                                Get Started
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="img-box">
                                                    <img src="../assets/images/slider-img.png" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="box">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="detail-box">
                                                    <div>
                                                        <h1>
                                                            Digital Currency
                                                        </h1>
                                                        <h2>
                                                            The Future of Trading.
                                                        </h2>
                                                        <div class="">
                                                            <a href="">
                                                                Get Started
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="img-box">
                                                    <img src="../assets/images/slider-img.png" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="box">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="detail-box">
                                                    <div>
                                                        <h1>
                                                            Digital Currency
                                                        </h1>
                                                        <h2>
                                                            The Future of Trading.
                                                        </h2>
                                                        <div class="">
                                                            <a href="">
                                                                Get Started
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="img-box">
                                                    <img src="../assets/images/slider-img.png" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            @include('layout.partials.footer')

    </body>
</html>
