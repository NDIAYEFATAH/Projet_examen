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
    <style>

        ::selection {
            background-color: rgba(0, 0, 0, 0);
        }

        .container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .card {
            background: radial-gradient(circle, white 0%, #d5d5d5 100%);
            width: 360px;
            height: 200px;
            border-radius: 20px;
            position: relative;
            box-shadow: 3px 3px 17px 0px rgba(0, 0, 0, 0.55);
        }

        .card .remove,
        .card .logo {
            position: absolute;
            display: inline-block;
            cursor: pointer;
        }

        .card .remove {
            top: 30px;
            right: 30px;
            opacity: 0.9;
            color: black;
        }

        .card .remove:hover {
            color: #f06b5d;
        }

        .card .logo {
            top: 20px;
            left: 30px;
            font-size: 16px;
            opacity: 1;
        }

        .card .number,
        .card .owner {
            display: block;
            position: absolute;
            left: 30px;
            cursor: default;
            color: black;
            opacity: 0.9;
            transition: color 0.7s ease-out;
        }

        .card .number {
            bottom: 60px;
            letter-spacing: 4px;
        }

        .card .owner {
            bottom: 30px;
            letter-spacing: 1px;
        }
        .wave-group {
            position: relative;
        }

        .wave-group .input {
            font-size: 16px;
            padding: 10px 10px 10px 5px;
            display: block;
            width: 200px;
            border: none;
            border-bottom: 1px solid #515151;
            background: transparent;
        }

        .wave-group .input:focus {
            outline: none;
        }

        .wave-group .label {
            color: #999;
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 5px;
            top: 10px;
            display: flex;
        }

        .wave-group .label-char {
            transition: 0.2s ease all;
            transition-delay: calc(var(--index) * 0.05s);
        }

        .wave-group .input:focus ~ label .label-char,
        .wave-group .input:valid ~ label .label-char {
            transform: translateY(-20px);
            font-size: 14px;
            color: #6e7fc1;
        }

        .wave-group .bar {
            position: relative;
            display: block;
            width: 300px;
        }

        .wave-group .bar:before,
        .wave-group .bar:after {
            content: "";
            height: 2px;
            width: 0;
            bottom: 1px;
            position: absolute;
            background: #0727a6;
            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        .wave-group .bar:before {
            left: 70%;
        }

        .wave-group .bar:after {
            right: 70%;
        }

        .wave-group .input:focus ~ .bar:before,
        .wave-group .input:focus ~ .bar:after {
            width: 70%;
        }
    </style>
</head>
<body>
<div class="hero_area" style="margin-bottom: 120px">
    @include('layout.partials.header')
    <!-- slider section -->
    <section class=" slider_section position-relative">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="container" style="display: flex;margin-top: 170px;margin-bottom: 90px">
                @foreach($compte as $c)
                    <div class="card" style="margin-right: 20px; margin-bottom: 10px;">

                        <span class="number">
                  <div class="wave-group" style="padding-top: 30px">
                      <span style="margin-top: 15px">{{ strtoupper('compte '.$c->type_compte) }}</span><br>
                    <span class="label-char" style="--index: 0">RIB: {{ $c->rib }}</span><br>

                    <span class="label-char1" style="--index: 1; margin-top: 10px">Solde Actuelle: {{ $c->solde }}</span>
                    <input required="" type="text" class="input" />
                    <span class="bar"></span>
                    <label class="label">
                      <br />
                    </label>
                  </div>
                </span>
                        <span class="owner">Thomas.F</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end slider section -->




</div>


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
