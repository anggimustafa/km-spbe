<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Manajemen Pengetahuan</title>

    {{-- Data Tabel --}}
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" rel="stylesheet">

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

    {{-- Template Dashboard --}}
    <link rel="shortcut icon" type="image/png" href="../../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../../assets/css/styles.min.css" />

    <link rel="stylesheet" href="../../assets/css/dash.css" />

    <link rel="stylesheet" href="../../assets/css/mine.css">

    {{-- Bootstrap CSS  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    {{-- Font Nunito --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/32e58e3754.js" crossorigin="anonymous"></script>

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            font-family: 'Nunito';
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="/img/spbeDash.png" width="300" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                                <span style="width: 30px">
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Artikel</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dashboard.create') }}" aria-expanded="false">
                                <span style="width: 30px">
                                    <i class="fa-regular fa-square-plus fa-xl"></i>
                                </span>
                                <span class="hide-menu">Create Post</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('dashboard/unverify/*') || request()->is('dashboard/edit/*') ? 'active' : '' }}"
                                href="{{ route('dashboard.unverify') }}" aria-expanded="false">
                                <span style="width: 30px">
                                    <i class="fa-solid fa-clock-rotate-left fa-xl"></i>
                                </span>
                                <span class="hide-menu">Unverify Post</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('dashboard/verified/*') ? 'active' : '' }}"
                                href="{{ route('dashboard.verified') }}" aria-expanded="false">
                                <span style="width: 30px">
                                    <i class="fa-solid fa-square-check fa-xl"></i>
                                </span>
                                <span class="hide-menu">Verified Post</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Forum</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ request()->is('dashboard/indiscussion/*') ? 'active' : '' }}"
                                href="{{ route('dashboard.indiscussion') }}" aria-expanded="false">
                                <span style="width: 30px">
                                    <i class="fa-regular fa-comments fa-xl"></i>
                                </span>
                                <span class="hide-menu">In Discussion</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Users</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('dataauthor') }}" aria-expanded="false">
                                <span style="width: 30px">
                                    <i class="fa-solid fa-users fa-xl"></i>
                                </span>
                                <span class="hide-menu">Data Auhtor</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('kelolarole') }}" aria-expanded="false">
                                <span style="width: 30px">
                                    <i class="fa-solid fa-user-gear fa-xl"></i>
                                </span>
                                <span class="hide-menu">Kelola Role</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">History</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('logusers') }}" aria-expanded="false">
                                <span style="width: 30px">
                                    <i class="fa-regular fa-address-book fa-xl"></i>
                                </span>
                                <span class="hide-menu">Log Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('logaktivitas') }}" aria-expanded="false">
                                <span style="width: 30px">
                                    <i class="fa-solid fa-timeline fa-xl"></i>
                                </span>
                                <span class="hide-menu">Log Aktivitas</span>
                            </a>
                        </li>
                    </ul>
                    <br><br><br><br><br><br>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                @include('layouts.navigation')
            </header>
            <!--  Header End -->
            <!-- Page Content -->
            <main class="col-lg-12 px-3">
                <br><br><br><br>
                @yield('container')
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-2.0.5/datatables.min.js"></script>
    <script>
        new DataTable('#example', {
            layout: {
                bottomEnd: {
                    paging: {
                        boundaryNumbers: false
                    }
                }
            }
        });
    </script>
    <script>
        new DataTable('#example-modal', {
            layout: {
                bottomEnd: {
                    paging: {
                        boundaryNumbers: false
                    }
                }
            }
        });
    </script>
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/sidebarmenu.js"></script>
    <script src="../../assets/js/app.min.js"></script>
    <script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../../assets/js/dashboard.js"></script>
    {{-- Script Pooper and JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>


{{-- Default Body Breeze --}}
{{-- <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body> --}}

</html>
