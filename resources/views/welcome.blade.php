<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="../assets/css/responsive.css" rel="stylesheet"/>
</head>
<body>
<div class="hero_area">
    @include('layout.partials.header')
    <!-- slider section -->
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
                                                @if(auth()->check())
                                                    @if(!auth()->user()->hasCompteCourant() || !auth()->user()->hasCompteEpargne())
                                                        <a href="{{ route('createCompte') }}">Créer Compte</a>
                                                    @endif
                                                @endif
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
                                                @if(auth()->check())
                                                    @if(!auth()->user()->hasCompteCourant() || !auth()->user()->hasCompteEpargne())
                                                        <a href="{{ route('createCompte') }}">Créer Compte</a>
                                                    @endif
                                                @endif
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
                                                @if(auth()->check())
                                                    @if(!auth()->user()->hasCompteCourant() || !auth()->user()->hasCompteEpargne())
                                                        <a href="{{ route('createCompte') }}">Créer Compte</a>
                                                    @endif
                                                @endif
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
                                                @if(auth()->check())
                                                    @if(!auth()->user()->hasCompteCourant() || !auth()->user()->hasCompteEpargne())
                                                        <a href="{{ route('createCompte') }}">Créer Compte</a>
                                                    @endif
                                                @endif
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
                                                @if(auth()->check())
                                                    @if(!auth()->user()->hasCompteCourant() || !auth()->user()->hasCompteEpargne())
                                                        <a href="{{ route('createCompte') }}">Créer Compte</a>
                                                    @endif
                                                @endif
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
    <!-- end slider section -->




</div>

@include('layout.partials.footer')
<script type="text/javascript" src="../assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- owl carousel script
  -->
<script type="text/javascript">
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 0,
        navText: [],
        center: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    });


</script>
</body>
</html>
