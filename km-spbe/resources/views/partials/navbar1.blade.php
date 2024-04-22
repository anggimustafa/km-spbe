<nav class="fixed-top navbar-transparent">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar site-navbar-target p-2 mt-1" role="banner">

        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-evenly position-relative">

                <div class="col-1 d-none d-xl-block">
                    <div class="site-logo ms-5">
                        <img src="/img/akcaya2.png" alt="" width="40px">
                    </div>
                </div>

                <div class="col-4 text-light">
                    <span style="font-size: 15px"><strong>SPBE</strong></span><br>
                    <span>Manajemen Pengetahuan </span>
                </div>

                <div class="col-7 text-right">
                    <span class="d-inline-block d-lg-none"><a href="#"
                            class="text-primary site-menu-toggle js-menu-toggle py-5"><span
                                class="icon-menu h3 text-white"></span></a></span>


                    <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li class="active"><a href="#" class="nav-link py-2">Beranda</a></li>
                            <li><a href="#" class="nav-link  py-2">Artikel</a></li>
                            <li><a href="#" class="nav-link  py-2">Kategori Pengetahuan</a></li>
                            <li><a href="#" class="nav-link  py-2">Tentang</a></li>
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
</nav>
