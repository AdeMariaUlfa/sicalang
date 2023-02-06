<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bacce4d741.js" crossorigin="anonymous"></script>
    <title>SICALANG</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/templatemo-seo-dream.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/owl.css') }}">
    <style>
        /* Popup container - can be anything you want */
        .popup {
            position: relative;
            display: inline-block;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* The actual popup */
        .popup .popuptext {
            visibility: hidden;
            width: 160px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: -150%;
            left: 50%;
            margin-left: -80px;
        }

        /* Popup arrow */
        .popup .popuptext::after {
            content: "";
            position: absolute;
            buttom: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        /* Toggle this class - hide and show the popup */
        .popup .show {
            visibility: visible;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
        }

        /* Add animation (fade in the popup) */
        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .pagination {
            padding-top: 20px;
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ddd;
        }

        .pagination a.active {
            background-color: aquamarine;
            color: white;
            border: 1px solid aquamarine;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }

        .pagination a:first-child {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .pagination a:last-child {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/dashboard" class="logo">
                           <img src="{{ asset('template/assets/images/logo.png') }}" style="width:60%;" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            @isset($jumlah)
                            <div class="main-blue-button"><a href="/dashboard" style="cursor: pointer; margin-left:10px;"><i class="fa fa-arrow-left"></i> BACK</a></div>
                            @else
                            <div class="main-blue-button"><a onclick="window.history.go(-1); return false;" style="cursor: pointer; margin-left:10px;"><i class="fa fa-arrow-left"></i> BACK</a></div>
                            @endif
                        </ul>
                        <!-- <ul class="nav">
                            <div class="main-blue-button popup"><a onclick="myFunction()" style="margin-left:10px;"><i class="fa fa-user-circle-o"></i> DOSEN</a>
                                <span class="popuptext" id="myPopup">Bayu Kurniawan, S.Pd, M.Pd</span>
                            </div>
                        </ul>
                        <ul class="nav">
                            <div class="main-blue-button popup"><a onclick="myFunction1()"><i class="fa fa-user-circle-o"></i> MAHASISWA</a>
                                <span class="popuptext" id="myPopup1">Mia Andria Ningsih</span>
                            </div>
                        </ul> -->
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div id="features" class="features section" >

        @yield('content')
    </div>





    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        <img src="{{ asset('images/um.webp') }}" style="width:30px; height: 30px;">
                        Copyright © 2023. All Rights Reserved.
                        <img src="{{ asset('images/um2.svg') }}" style="width:150px;">
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('template/assets/js/animation.js') }}"></script>
    <script src="{{ asset('template/assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('template/assets/js/custom.js') }}"></script>
    <script>
        // When the user clicks on div, open the popup
        function myFunction() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }

        function myFunction1() {
            var popup = document.getElementById("myPopup1");
            popup.classList.toggle("show");
        }
    </script>
</body>

</html>