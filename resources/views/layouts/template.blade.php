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
                            <h4>SICALANG<img src="{{ asset('template/assets/images/pagoda.png') }}" alt=""></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <div class="main-blue-button"><a onclick="window.history.go(-1); return false;" style="cursor: pointer;"><i class="fa fa-arrow-left"></i> BACK</a></div>
                        </ul>
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

    <div id="features" class="features section">
    
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
    
</script>
</body>

</html>