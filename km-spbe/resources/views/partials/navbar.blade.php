<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/cssNavbar/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/cssNavbar/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/cssNavbar/css/style.css">

    <title>Website Menu #2</title>
</head>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar site-navbar-target" role="banner">

        <div class="container-fluid">
            <div class="row align-items-center position-relative">

                <div class="col-1">
                    <div class="site-logo ms-5">
                        <img src="/img/akcaya2.png" alt="" width="50px">
                    </div>
                </div>

                <div class="col-2 d-none d-xl-block text-light">
                    <span style="font-size: 25px"><strong>SPBE</strong></span><br>
                    <span>Manajemen Pengetahuan </span>
                </div>

                <div class="col-9  text-right">
                    <span class="d-inline-block d-lg-none"><a href="#"
                            class="text-primary site-menu-toggle js-menu-toggle py-5"><span
                                class="icon-menu h3 text-white"></span></a></span>


                    <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li class="active"><a href="#" class="nav-link">Beranda</a></li>
                            <li><a href="#" class="nav-link">Artikel</a></li>
                            <li><a href="#" class="nav-link">Kategori Pengetahuan</a></li>
                            <li><a href="#" class="nav-link">Tentang</a></li>
                            <li><a href="#" class="nav-link">Kontak</a></li>
                            <li>
                                <div class="px-5 d-flex justify-content-between">
                                    @if (Route::has('login'))
                                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                            @auth
                                                <a href="{{ url('/dashboard') }}" class="btn btn-secondary">Dashboard</a>
                                                {{-- @else
                                                <a href="{{ route('login') }}" class="btn btn-outline-danger">Log
                                                    in</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="btn btn-info">Register</a>
                                                @endif --}}
                                            @endauth
                                        </div>
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>

    <div class="hero"></div>

    <script src="js/jsNavbar/js/jquery-3.3.1.min.js"></script>
    <script src="js/jsNavbar/js/popper.min.js"></script>
    <script src="js/jsNavbar/js/bootstrap.min.js"></script>
    <script src="js/jsNavbar/js/jquery.sticky.js"></script>
    <script src="js/jsNavbar/js/main.js"></script>
</body>

</html>
