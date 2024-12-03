<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>In Your Dream Studio</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets-lp/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-lp/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-lp/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-lp/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets-lp/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('assets-lp/css/main.css') }}" rel="stylesheet" />
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center position-relative">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo In Your Dream" />
            </a>

            <!-- Navigation Menu -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/home" class="active">Home</a></li>
                    <li><a href="/home#services-2">Gallery</a></li>
                    <li><a href="/pricelist-login">Pricelist</a></li>
                    <li><a href="/home#about">About Us</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <!-- User Dropdown -->
            <div class="dropdown d-flex align-items-center">
                <h6 class="user-name me-2">{{ Auth::user()->name }}</h6>
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="userMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenuButton">
                        {{-- <li><a class="dropdown-item" href="/profile">Profile</a></li> --}}
                        <li class="dropdown">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url('{{ asset('assets/img/studio-background.png') }}');">
            <div class="container position-relative">
                <h1>Pricelist</h1>
                <p>
                    Home
                    /
                    Pricelist
                </p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Pricelist</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            {{-- <div class="container section-title" data-aos="fade-up"> --}}
            {{-- <h2>Pricelist</h2> --}}
            {{-- <p>Providing Fresh Produce Every Single Day</p> --}}
            {{-- </div> --}}
            <!-- End Section Title -->
            <div class="content">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <span class="number">01</span>
                                <h3 class="text-center mb-4">Photobox / Self Photo</h3>
                                <div class="container text-center">
                                    <img src="{{ asset('assets-lp/img/photobox.png') }}" alt="" width="100">
                                </div>
                                <div class="service-item-content mt-3">
                                    <li>1 - 4 orang</li>
                                    <li>15 menit/sesi</li>
                                    <li>Starting from [60k]</li>
                                    <li>Penambahan Waktu 5 Menit/10k</li>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <h3 class="text-center mb-4">Wedding Package</h3>
                                <span class="number">02</span>
                                <div class="container text-center">
                                    <img src="{{ asset('assets-lp/img/wedding.svg') }}" alt="" width="100">
                                </div>
                                <div class="service-item-content mt-3">
                                    <li>Akad</li>
                                    <li>Malam Berinai</li>
                                    <li>Malam Tepung Tawar</li>
                                    <li>Free Flashdisk</li>
                                    <li>Starting from [1.8jt]</li>
                                    <li>+ Album & Cetak 4r (80 lbr) Start [250k]</li>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <span class="number">03</span>
                                <h3 class="text-center mb-4">Order Package</h3>
                                <div class="container text-center">
                                    <img src="{{ asset('assets-lp/img/order.png') }}" alt="" width="100">
                                </div>
                                <div class="service-item-content mt-3">
                                    <ul>
                                        <li>1 hari sesi</li>
                                        <li>Starting from [100k]</li>
                                        <li>
                                            Tersedia Paket:
                                            <ul>
                                                <li>Wisuda</li>
                                                <li>Ulang Tahun</li>
                                                <li>Pre Wedding</li>
                                                <li>Tunangan</li>
                                                <li>Akikah</li>
                                                <li>Dan event harian lainnya</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Services Section -->
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <img src="{{ asset('assets/img/logo.png') }}" width="130">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename pt-4">Jl. HOS Cokroaminoto</span>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Pricelist</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-3 footer-links">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Center</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div>
                        © Copyright 2024 <strong><span>inyourdream</span></strong>. All Rights Reserved
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="081371867783"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://www.instagram.com/story_inyourdream/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.instagram.com/inyourdream_studiophoto/"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets-lp/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="{{ asset('assets-lp/vendor/php-email-form/validate.js') }}"></script> -->
    <script src="{{ asset('assets-lp/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets-lp/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets-lp/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets-lp/js/main.js') }}"></script>
</body>

</html>
