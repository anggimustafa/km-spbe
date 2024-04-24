    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <h1 class="fs-5">Manajemen Pengetahuan</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Serach Start ***** -->
                        <div class="search-input">
                            <div id="search" action="#">
                                <input type="text" placeholder="SPBE" id='searchText' name="searchKeyword"
                                    onkeypress="handle" readonly style="cursor: default;" />
                            </div>
                        </div>
                        <!-- ***** Serach Start ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="/artikel" class="active">Artikel</a></li>
                            <li class="scroll-to-section"><a href="/#kategori" class="active">Kategori</a></li>
                            <li class="scroll-to-section"><a href="/#about" class="active">Tentang</a></li>
                            <li class="scroll-to-section">
                                <div class="main-button">
                                    @if (Route::has('login'))
                                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                            @auth
                                                <a href="{{ url('/dashboard') }}" class="text-warning">Dashboard</a>
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
