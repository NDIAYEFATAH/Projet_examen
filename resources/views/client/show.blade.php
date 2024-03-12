<!doctype html>
<html lang="en">
<head>
@include('layout.partials.header')
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
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        ::selection {
            background: transparent;
        }


        .body {
            /*background: linear-gradient(to left, #45094b, #c83cd4);*/
            color: #eda7f3;
            font-family: arial;
            perspective: 600px;
            width: 100%;
            height: 100%;
        }

        #credit-card {
            margin-top: 250px;
            box-shadow: 6px 6px 10px #72b1d9;
            animation: falling 0.6s linear;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            overflow: hidden;
            transition: transform 0.3s linear;
            cursor: pointer;
        }

        @keyframes falling {
            0% {
                left: 50%;
                top: 0;
                transform: translate(-50%, -50%);
            }

            50% {
                left: 50%;
                top: 50%;
            }

            70% {
                left: 50%;
                top: 30%;
            }

            100% {
                left: 50%;
                top: 50%;
            }
        }

        #credit-card:hover {
            transform: translate(-50%, -50%) rotateY(20deg);
        }

        #credit-card, #front {
            width: 500px;
            height: 350px;
            border-radius: 15px;
        }

        #front {
            background: linear-gradient(to left, #72b1d9, #81a4ec);
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        #front::after {
            content: "";
            display: block;
            width: 50px;
            height: 100%;
            background: #ffffff5d;
            position: absolute;
            left: -90px;
            top: 0;
            transition: left 0.4s linear;
            filter: blur(30px);
        }

        #front:hover::after {
            left: 490px;
        }

        #bank-name {
            width: 100%;
            padding: 20px 20px;
            color: #ffffff;
            font-size: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        #security-chip {
            width: 100%;
            padding: 0 20px;
        }

        #security-chip div:nth-child(1) {
            width: 60px;
            height: 50px;
            background: radial-gradient(circle, #e7c098, #be9266);
            border-radius: 6px;
            position: relative;
            overflow: hidden;
        }

        #security-chip div > div {
            width: 50px;
            height: 40px;
            border: 1px solid #5c5c5c;
            background: initial;
            position: absolute;
            box-shadow: 0 0 2px #57412c;
        }

        #security-chip div:nth-child(1) div:nth-child(1) {
            border-radius: 0 0 20px 0;
            left: -17px;
            top: -35px;
        }

        #security-chip div:nth-child(1) div:nth-child(2) {
            border-radius: 0 0 20px 0;
            left: -40px;
            top: -10px;
        }

        #security-chip div:nth-child(1) div:nth-child(3) {
            border-radius: 20px 0 0 0;
            left: 40px;
            top: 10px;
        }

        #security-chip div:nth-child(1) div:nth-child(4) {
            border-radius: 20px 0 0 0;
            left: 17px;
            top: 35px;
        }

        #card-number {
            width: 100%;
            font-size: 22px;
            padding: 5px 5px 5px 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 0 0 10px #000000;
        }

        #card-number span:not(.unfilled) {
            padding-right: 24px;
        }

        #shelf-life {
            width: 100%;
            font-size: 150px;
            text-shadow: 0 0 10px #000000;
        }

        #shelf-life h3 {
            padding: 10px 20px 20px 20px;
        }

        #shelf-life span:nth-child(1) {
            padding-right: 10px;
        }

        #bearer-name {
            width: 80%;
            padding-left: 20px;
            text-transform: uppercase;
            float: left;
            text-shadow: 0 0 10px #000000;
        }

        #mastercard {
            width: 70px;
            height: 30px;
            position: relative;
            float: left;
        }

        #mastercard div {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            position: relative;
        }

        #mastercard div:nth-child(1) {
            background: #ff0015b9;
            left: 10px;
            top: 0;
            z-index: 1;
        }

        #mastercard div:nth-child(2) {
            background: #ff9d00d3;
            left: 30px;
            top: -30px;
        }
    </style>
</head>
<body>
<div class="hero_area" style="margin-bottom: 120px">

    <!-- slider section -->
    <section class=" slider_section position-relative">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div id="credit-card">
                <div id="front">
                    <div id="bank-name">
                        <h1>{{ $carte->banque }}</h1>
                    </div>
                    <div id="security-chip">
                        <div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div id="card-number">
                        <span>{{ $carte->compte_id }}</span>
                    </div>
                    <div id="shelf-life">
                        <h3><span> Date Exp:</span> <span>{{ $carte->dateExpiration }}</span></h3>
                    </div>
                    <div id="bearer-name">
                        <h3>CVV: <span>{{ $carte->cvv }}</span></h3>
                    </div>
                    <div id="mastercard">
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->
</div>
<script type="text/javascript" src="../assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- owl carousel script -->
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