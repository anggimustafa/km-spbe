@extends('layouts.main')

@section('body')
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                <h2>Selamat datang di Manajemen Pengetahuan SPBE.</h2>
                                <p>Mari selami dan temukan pengetahuan yang tak terbatas di dunia Manajemen
                                    Pengetahuan
                                    SPBE, tempat di mana setiap pencarian adalah petualangan baru!</p>
                                <div class="search-input mt-3">
                                    <form id="search-carousel" action="#">
                                        <input type="text" placeholder="Type Something" id='searchText'
                                            name="searchKeyword" onkeypress="handle" />
                                        <button type="submit" class="fa-solid fa-magnifying-glass"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="item item-2">
                            <div class="header-text">
                                <span class="category"></span>
                                <h2>Identifikasi Pengetahuan</h2>
                                <p>Temukan beragam pengetahuan seputar Tata Kelola, Manajemen, Layanan, Infrastruktur,
                                    Aplikasi, Keamanan, dan Audit dalam entitas SPBE melalui artikel-artikel kami.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Tata Kelola SPBE</a>
                                        <a href="#">Manajemen SPBE</a>
                                        <a href="#">Layanan SPBE</a>
                                        <a href="#">Infrastruktur SPBE</a>
                                        <a href="#">Aplikasi SPBE</a>
                                        <a href="#">Keamanan SPBE</a>
                                        <a href="#">Audit TIK SPBE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-3">
                            <div class="header-text">
                                <span class="category"></span>
                                <h2>Pendukung Pengetahuan</h2>
                                <p>Jelajahi pengetahuan dalam artikel-artikel kami yang didukung oleh berbagai macam sumber
                                    pendukung, berupa infografis, pedoman, video, hingga presentasi untuk memberikan
                                    pemahaman yang komprehensif dan mendalam.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Go...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services section" id="kategori">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Kategori Pengetahuan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/policy.png" alt="online degrees">
                        </div>
                        <div class="main-content">
                            <h4>Tata Kelola SPBE</h4>
                            <p>Terkait tata cara penyusunan peta rencana, arsitektur, dan penetapan kebijakan, pedoman dan
                                prosedur serta contoh pengalaman dalam tata kelola SPBE.</p>
                            <div class="main-button">
                                <a href="#">Go...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/project-management.png" alt="short courses">
                        </div>
                        <div class="main-content">
                            <h4>Manajemen SPBE</h4>
                            <p>Terkait penerapan aspek-aspek manajemen SPBE secara efisien dan terpadu serta best practices
                                pengembangan kompetensi SDM terkait SPBE.</p>
                            <div class="main-button">
                                <a href="#">Go...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/vehicle.png" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>Layanan SPBE</h4>
                            <p>Terkait penanganan masalah yang timbul dalam penyediaan atau penggunaan layanan SPBE serta
                                mengukur tingkat layanan SPBE.</p>
                            <div class="main-button">
                                <a href="#">Go...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/infrastucture.png" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>Infrastruktur SPBE</h4>
                            <p>Terkait tahapan dalam mengelola, memelihara, atau mengembangkan infrastruktur jaringan intra
                                pemerintah serta dalam proses interaksi perangkat SPBE.</p>
                            <div class="main-button">
                                <a href="#">Go...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/data.png" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>Aplikasi SPBE</h4>
                            <p>Terkait cara menangani masalah dalam implementasi aplikasi umum SPBE serta perencanaan dan
                                pengembangan aplikasi khusus SPBE.</p>
                            <div class="main-button">
                                <a href="#">Go...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/encrypted.png" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>Keamanan</h4>
                            <p>Terkait cara mengidentifikasi potensi kelemahan keamanan serta mengatasi permasalahan
                                keamanan informasi dalam penerapan SPBE.
                            </p>
                            <div class="main-button">
                                <a href="#">Go...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/search.png" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>Audit TIK</h4>
                            <p>Terkait tahapan dalam menyusun perencanaan dan pelaksanaan audit TIK serta langkah dalam
                                menindaklanjuti hasil audit TIK.</p>
                            <div class="main-button">
                                <a href="#">Go...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section events" id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Artikel</h6>
                        <h2>Postingan Terkini</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="assets/images/event-01.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Tata Kelola SPBE</span>
                                        <h4>Panduan Praktis Penyusunan Peta Rencana Strategis</h4>
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        <h6>latep@email.com</h6>
                                    </li>
                                    <li>
                                        <span>Author:</span>
                                        <h6>Latep</h6>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>16 Feb 2036</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="assets/images/event-02.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Keamanan SPBE</span>
                                        <h4>Judul artikel disini....</h4>
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        <h6>mael@email.com</h6>
                                    </li>
                                    <li>
                                        <span>Author:</span>
                                        <h6>Mael</h6>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>24 Feb 2036</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="assets/images/event-03.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Layanan SPBE</span>
                                        <h4>Judul artikel disini....</h4>
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        <h6>ucup@email.com</h6>
                                    </li>
                                    <li>
                                        <span>Author:</span>
                                        <h6>Ucup</h6>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>12 Mar 2036</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="150" data-speed="5000"></h2>
                                    <p class="count-text ">Total Postingan Pengetahuan</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="50" data-speed="5000"></h2>
                                    <p class="count-text ">Total Author</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="70" data-speed="5000"></h2>
                                    <p class="count-text ">Total Users</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="190" data-speed="5000"></h2>
                                    <p class="count-text ">Total Pengunjung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section about-us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apa itu SPBE?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>SPBE</strong> merupakan singkatan dari Sistem Pemerintahan Berbasis Elektronik,
                                    Sistem Pemerintahan Berbasis Elektronik (SPBE) adalah penyelenggaraan pemerintahan yang
                                    memanfaatkan teknologi informasi dan komunikasi untuk memberikan layanan kepada Pengguna
                                    SPBE.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Siapa yang mengelola website Manajemen Pengetahuan ini?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Website Manajemen Pengetahuan ini dikelola oleh Aparatur Sipil Negara (ASN) di setiap
                                    Organisasi Perangkat Daerah (OPD) di Kalimantan Barat. Sedangkan pengelolaan aplikasinya
                                    dipegang oleh Bidang Aplikasi Informatika (Aptika) Dinas Komunikasi dan Informatika
                                    (Diskominfo) Kalimantan Barat.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Pengetahuan apa saja yang di sediakan?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Berbagai macam pengetahuan disediakan di website ini, tetapi tidak terbatas pada Tata
                                    Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan
                                    SPBE, dan Audit TIK SPBE. Setiap kategori pengetahuan ini menyajikan artikel, panduan,
                                    dan informasi penting lainnya untuk mendukung pemahaman seputar SPBE di Kalimantan
                                    Barat.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Siapa saja yang bisa mengakses website ini?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Website ini dapat diakses oleh seluruh Aparatur Sipil Negara (ASN) di setiap Organisasi
                                    Perangkat Daerah (OPD) di Kalimantan Barat serta masyarakat umum yang tertarik untuk
                                    memperdalam pemahaman terkait SPBE.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>About</h6>
                        <h2>Apa itu Manajemen Pengetahuan?</h2>
                        <p>Manajemen Pengetahuan adalah proses merencanakan, mengorganisir, mengelola, dan membagikan
                            pengetahuan di dalam suatu organisasi untuk meningkatkan kinerja dan inovasi.</p>
                        <div class="main-button">
                            <a href="https://www.google.com/search?q=Manajemen+Pengetahuan&sca_esv=c0c76b5fc7789c73&sca_upv=1&ei=n3koZqXyE-_CjuMP2ZSk0AQ&ved=0ahUKEwjlvb3O8dmFAxVvoWMGHVkKCUoQ4dUDCBA&uact=5&oq=Manajemen+Pengetahuan&gs_lp=Egxnd3Mtd2l6LXNlcnAiFU1hbmFqZW1lbiBQZW5nZXRhaHVhbjIKEAAYgAQYQxiKBTIFEAAYgAQyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAEMgUQABiABEi1XlCdI1iFXHAHeAGQAQGYAbIBoAHQD6oBBDE4Lja4AQPIAQD4AQGYAh6gApcPqAITwgIKEAAYsAMY1gQYR8ICDRAAGIAEGLADGEMYigXCAhMQABiABBhDGLQCGIoFGOoC2AEBwgIUEAAYgAQY4wQYtAIY6QQY6gLYAQHCAhYQABgDGLQCGOUCGOoCGIwDGI8B2AECwgIWEC4YAxi0AhjlAhjqAhiMAxiPAdgBAsICEBAAGIAEGLEDGEMYgwEYigXCAgsQABiABBixAxiDAcICChAuGIAEGEMYigXCAgsQLhiABBixAxiDAcICDRAAGIAEGLEDGEMYigXCAggQABiABBixA8ICBRAuGIAEwgIKEAAYgAQYsQMYCsICBxAAGIAEGArCAgsQABiABBixAxiKBcICBxAAGIAEGA2YAwqIBgGQBgm6BgQIARgHugYGCAIQARgKkgcEMjQuNqAH9pMB&sclient=gws-wiz-serp"
                                target="_blank">Discover
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="section courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Latest Courses</h6>
                        <h2>Latest Courses</h2>
                    </div>
                </div>
            </div>
            <ul class="event_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>
                <li>
                    <a href="#!" data-filter=".design">Webdesign</a>
                </li>
                <li>
                    <a href="#!" data-filter=".development">Development</a>
                </li>
                <li>
                    <a href="#!" data-filter=".wordpress">Wordpress</a>
                </li>
            </ul>
            <div class="row event_box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-01.jpg" alt=""></a>
                            <span class="category">Webdesign</span>
                            <span class="Email">
                                <h6><em>$</em>160</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Stella Blair</span>
                            <h4>Learn Web Design</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-02.jpg" alt=""></a>
                            <span class="category">Development</span>
                            <span class="price">
                                <h6><em>$</em>340</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Cindy Walker</span>
                            <h4>Web Development Tips</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-03.jpg" alt=""></a>
                            <span class="category">Wordpress</span>
                            <span class="price">
                                <h6><em>$</em>640</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">David Hutson</span>
                            <h4>Latest Web Trends</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-04.jpg" alt=""></a>
                            <span class="category">Development</span>
                            <span class="price">
                                <h6><em>$</em>450</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Stella Blair</span>
                            <h4>Online Learning Steps</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-05.jpg" alt=""></a>
                            <span class="category">Wordpress</span>
                            <span class="price">
                                <h6><em>$</em>320</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Sophia Rose</span>
                            <h4>Be a WordPress Master</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-06.jpg" alt=""></a>
                            <span class="category">Webdesign</span>
                            <span class="price">
                                <h6><em>$</em>240</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">David Hutson</span>
                            <h4>Full Stack Developer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <div class="team section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="assets/images/member-01.jpg" alt="">
                            <span class="category">UX Teacher</span>
                            <h4>Sophia Rose</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="assets/images/member-02.jpg" alt="">
                            <span class="category">Graphic Teacher</span>
                            <h4>Cindy Walker</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="assets/images/member-03.jpg" alt="">
                            <span class="category">Full Stack Master</span>
                            <h4>David Hutson</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="assets/images/member-04.jpg" alt="">
                            <span class="category">Digital Animator</span>
                            <h4>Stella Blair</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="section testimonials mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>Definisi</h6>
                        <h2>Definisi Manajemen Pengetahuan menurut para ahli.</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">
                        <div class="item">
                            <p>“Performing the activities involved in
                                discovering, capturing, sharing, and
                                applying knowledge to enhance, in a
                                cost-effective fashion, the impact of
                                knowledge on the unit’s goal
                                achievement.
                                ”</p>
                            <div class="author">
                                <img src="assets/images/becerafernandez.jpg" alt="">
                                <span class="category">Knowledge Management : System and Process</span>
                                <h4>Becerra-Fernandez(2015)</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Manajemen Pengetahuan adalah sebuah koordinasi sitematis
                                dalam sebuah organisasi yang mengatur sumber daya manusia, teknologi, proses dan
                                struktur organisasi dalam rangka meningkatkan value melalui penggunaan ulang dan
                                inovasi. Koordinasi ini bisa dicapai melalui menciptakan, membagi dan
                                mengaplikasikan pengetahuan dengan menggunakan pengalaman dan tindakan yang
                                telah diambil perusahaan demi kelangsungan pembelajaran organisasi.”
                            </p>
                            <div class="author">
                                <img src="assets/images/dalkir.jpg" alt="">
                                <span class="category">Knowledge Management in Theory and Practice</span>
                                <h4>Dalkir(2011)</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Knowledge Management is the process of capturing, distributing, and effectively using
                                knowledge.” <br> “Manajemen Pengetahuan adalah proses menangkap, mendistribusikan, dan
                                menggunakan pengetahuan secara efektif.”</p>
                            <div class="author">
                                <img src="assets/images/davenport.jpg" alt="">
                                <span class="category">Working Knowledge</span>
                                <h4>Davenport(1994)</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Feel free to contact us anytime</h2>
                        <p>Thank you for choosing our templates. We provide you best CSS templates at absolutely 100%
                            free of charge. You may support us by sharing our website to your friends.</p>
                        <div class="special-offer">
                            <span class="offer">off<br><em>50%</em></span>
                            <h6>Valide: <em>24 April 2036</em></h6>
                            <h4>Special Offer <em>50%</em> OFF!</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <form id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="name" name="name" id="name" placeholder="Your Name..."
                                            autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your E-mail..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="orange-button">Send Message
                                            Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
