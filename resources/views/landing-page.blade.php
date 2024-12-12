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
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo In Your Dream" />
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="/#services-2">Gallery</a></li>
                    <li><a href="/pricelist">Pricelist</a></li>
                    <li><a href="/#about">About Us</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="5000">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/studio-background.png') }}" alt="" />
                    <div class="carousel-container">
                        <h2>
                            In <br> Your <br> Dream
                        </h2>
                        <p>
                            From Candid Smiles to Perfect Poses, We Frame Your Unique Story
                        </p>
                    </div>
                </div>
                <!-- End Carousel Item -->
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{ asset('assets/img/aboutus.png') }}" alt="Image "
                                class="img-fluid img-overlap" data-aos="zoom-out" />
                        </div>
                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="content-title mb-4">
                                About
                                <strong>Us</strong>
                            </h2>
                            <p class="opacity-50">
                                {{ $aboutUs->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Services 2 Section -->
        <section id="services-2" class="services-2 section dark-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                {{-- <h2>Our Gallery</h2> --}}
                <p class="text-center">Our Gallery</p>
            </div>
            <!-- End Section Title -->

            <div class="services-carousel-wrap">
                <div class="container">
                    <div class="swiper init-swiper">
                        <script
                                type="application/json"
                                class="swiper-config"
                            >
                                {
                                    "loop": true,
                                    "speed": 600,
                                    "autoplay": {
                                        "delay": 5000
                                    },
                                    "slidesPerView": "auto",
                                    "pagination": {
                                        "el": ".swiper-pagination",
                                        "type": "bullets",
                                        "clickable": true
                                    },
                                    "navigation": {
                                        "nextEl": ".js-custom-next",
                                        "prevEl": ".js-custom-prev"
                                    },
                                    "breakpoints": {
                                        "320": {
                                            "slidesPerView": 1,
                                            "spaceBetween": 40
                                        },
                                        "1200": {
                                            "slidesPerView": 3,
                                            "spaceBetween": 40
                                        }
                                    }
                                }
                            </script>
                        <button class="navigation-prev js-custom-prev">
                            <i class="bi bi-arrow-left-short"></i>
                        </button>
                        <button class="navigation-next js-custom-next">
                            <i class="bi bi-arrow-right-short"></i>
                        </button>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <img src="{{ asset('assets-lp/img/img_sq_7.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <img src="{{ asset('assets-lp/img/img_sq_1.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <img src="{{ asset('assets-lp/img/img_sq_2.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-item">
                                    <img src="{{ asset('assets-lp/img/img_sq_3.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <img src="{{ asset('assets-lp/img/img_sq_4.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <img src="{{ asset('assets-lp/img/img_sq_5.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <img src="{{ asset('assets-lp/img/img_sq_6.jpg') }}" alt="Image"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Services 2 Section -->
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
