<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/honey/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/vendors/animate-css/animate.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('/honey/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/css/responsive.css')}}">
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{url('/')}}"><img src="{{asset('/honey/img/logo.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item klik" id="home"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                            <li class="nav-item klik" id="mempelai"><a class="nav-link" href="{{url('/mempelai')}}">Mempelai </a></li>
                            <li class="nav-item klik" id="acara"><a class="nav-link" href="{{url('/acara')}}">Acara</a></li>
                            <li class="nav-item klik" id="galeri"><a class="nav-link" href="{{url('/galeri')}}">Galeri</a></li>
                            <li class="nav-item klik" id="lokasi"><a class="nav-link" href="{{url('/lokasi')}}">Lokasi</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    @yield('container')

    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="footer_inner p_50">
            <img src="{{asset('/honey/img/footer-logo.png')}}" alt="">
            <ul class="list f_menu">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/mempelai')}}">Mempelai</a></li>
                <li><a href="{{url('/acara')}}">Acara</a></li>
                <li><a href="{{url('/galeri')}}">Galeri</a></li>
                <li><a href="{{url('/lokasi')}}">Lokasi</a></li>
                <li><a href="{{url('/ucapan')}}">Ucapan</a></li>
            </ul>
            <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </footer>
    <!--================End Footer Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('/honey/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('/honey/js/popper.js')}}"></script>
    <script src="{{asset('/honey/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/honey/js/stellar.js')}}"></script>
    <script src="{{asset('/honey/vendors/lightbox/simpleLightbox.min.js')}}"></script>
    <script src="{{asset('/honey/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('/honey/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('/honey/vendors/isotope/isotope-min.js')}}"></script>
    <script src="{{asset('/honey/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/honey/vendors/flipclock/timer.js')}}"></script>
    <script src="{{asset('/honey/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('/honey/js/mail-script.js')}}"></script>
    <script src="{{asset('/honey/js/theme.js')}}"></script>
    @yield('scripts')
    <script>
        (function() {
            $('.klik').click(function() {
                var menu = $(this).attr('id');
                if (menu == 'home') {
                    $('.badan').load('index.blade.php');
                } else if (menu == 'mempelai') {
                    $('.badan').load('mempelai.blade.php');
                } else if (menu == 'acara') {
                    $('.badan').load('acara.blade.php');
                } else if (menu == 'galeri') {
                    $('.badan').load('galeri.blade.php');
                } else if (menu == 'lokasi') {
                    $('.badan').load('lokasi.blade.php');
                }
            });

            $('.badan').load('index.blade.php');
        }())
    </script>
</body>

</html>