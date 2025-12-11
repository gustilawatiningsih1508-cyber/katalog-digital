@extends('layouts.app')
@section('title', 'LapakGo - Home')
@section('content')

    <div class="hero_area">
        <div class="bg-box">
            <img src="{{ asset('assets user/images/coklat.png') }}" alt="Background">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span>
                            LapakGo
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Beranda <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/menu') }}">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/promosi') }}">Promosi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/tentangkami') }}">Tentang Kami</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="{{ url('/sign-in') }}" class="user_link">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->

        <!-- slider section -->
        <section class="slider_section">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-7 col-lg-6">
                                    <div class="detail-box text-center">
                                        <h1>Selamat Datang Di <span>LapakGo</span></h1>
                                        <p>
                                            Platform digital modern yang menghadirkan solusi mudah bagi
                                            pelaku usaha untuk memasarkan produk mereka secara online
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-7 col-lg-6">
                                    <div class="detail-box text-center">
                                        <h1>Selamat Datang Di <span>LapakGo</span></h1>
                                        <p>
                                            Platform digital modern yang menghadirkan solusi mudah bagi
                                            pelaku usaha untuk memasarkan produk mereka secara online
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-7 col-lg-6">
                                    <div class="detail-box text-center">
                                        <h1>Selamat Datang Di <span>LapakGo</span></h1>
                                        <p>
                                            Platform digital modern yang menghadirkan solusi mudah bagi
                                            pelaku usaha untuk memasarkan produk mereka secara online
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- offer section -->
    <section class="offer_section layout_padding-bottom">
        <div class="offer_container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/milo1.jpg') }}" alt="Miloku">
                            </div>
                            <div class="detail-box">
                                <h5>Miloku</h5>
                                <h6><span></span></h6>
                                <a href="{{ url('/lapak/1') }}">Kunjungi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/ngemil2.jpg') }}" alt="Ngemil Yuk">
                            </div>
                            <div class="detail-box">
                                <h5>Ngemil Yuk</h5>
                                <h6><span></span></h6>
                                <a href="{{ url('/lapak/2') }}">Kunjungi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/warung.jpg') }}" alt="Warung Mangan">
                            </div>
                            <div class="detail-box">
                                <h5>Warung Mangan Limo Putri</h5>
                                <h6><span></span></h6>
                                <a href="{{ url('/lapak/3') }}">Kunjungi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end offer section -->

    <!-- food section -->
    <section class="food_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Bestseller Menu</h2>
            </div>

            <ul class="filters_menu">
                <li class="active" data-filter="*">All</li>
                <li data-filter=".burger">Food</li>
                <li data-filter=".pizza">Drinks</li>
                <li data-filter=".pasta">Snack</li>
            </ul>

            <div class="filters-content">
                <div class="row grid">
                    <!-- BARIS 1 -->
                    <div class="col-sm-6 col-lg-4 all pizza">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/es.jpeg') }}" alt="Milo Malaysia">
                            </div>
                            <div class="detail-box">
                                <h5>Milo Malaysia</h5>
                                <p>Minuman coklat berenergi yang menyegarkan.</p>
                                <div class="options">
                                    <h6>Miloku yuk</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all burger">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/ayam1.jpg') }}" alt="Ayam Geprek">
                            </div>
                            <div class="detail-box">
                                <h5>Ayam Geprek</h5>
                                <p>Ayam crispy dengan sambal geprek pedas.</p>
                                <div class="options">
                                    <h6>Warung mangan limo putri</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all pasta">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/f5.png') }}" alt="Kentang Krispi">
                            </div>
                            <div class="detail-box">
                                <h5>Kentang Krispi</h5>
                                <p>Camilan kentang tipis yang digoreng renyah dengan rasa gurih dan ringan.</p>
                                <div class="options">
                                    <h6>Ngemil yuk</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BARIS 2 -->
                    <div class="col-sm-6 col-lg-4 all pizza">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/cincau.jpg') }}" alt="Milk Tea">
                            </div>
                            <div class="detail-box">
                                <h5>Milk Tea Mutiara Cincau</h5>
                                <p>Milk tea creamy dengan perpaduan mutiara dan cincau yang menyegarkan.</p>
                                <div class="options">
                                    <h6>Miloku</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all pasta">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/Pisang.jpg') }}" alt="Pisang Coklat">
                            </div>
                            <div class="detail-box">
                                <h5>Pisang Coklat</h5>
                                <p>Pisang manis dengan lelehan coklat nikmat</p>
                                <div class="options">
                                    <h6>Ngemil yuk</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all pizza">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/f1.png') }}" alt="Lychee Tea">
                            </div>
                            <div class="detail-box">
                                <h5>Lychee Tea</h5>
                                <p>Rasanya yang lembut, dingin dan menyegarkan</p>
                                <div class="options">
                                    <h6>Miloku</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-box">
                <a href="{{ url('/menu') }}">View More</a>
            </div>
        </div>
    </section>
    <!-- end food section -->

    <!-- about section -->
    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('assets user/images/es.jpeg') }}" alt="Milo Malaysia">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>Milo Malaysia</h2>
                        </div>
                        <p>
                            Hadir dengan cita rasa cokelat yang kaya dan creamy, MILO Premium Drink menjadi pilihan terbaik
                            untuk menemani aktivitas harian Anda. Diracik dengan standar kualitas UMKM, setiap gelas
                            menghadirkan pengalaman minum yang lembut, menyegarkan, dan penuh energi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- book section -->
    <section class="book_section layout_padding">
        <div class="container">
            <div class="heading_container text-center mb-5">
                <h2>Meet Our Team</h2>
                <p class="text-muted">The people behind your perfect dining experience</p>
            </div>

            <div class="row justify-content-center">
                <!-- Profile Card 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="profile_card p-4 shadow rounded text-center">
                        <div class="profile_image mb-3">
                            <img src="{{ asset('images/team/chef1.jpg') }}" alt="Chef 1">
                        </div>
                        <div class="profile_info">
                            <h5 class="mb-2">Gustillawati Ningsih</h5>
                            <p class="text-muted mb-2">Head Chef</p>
                            <small class="text-secondary">10+ years experience in Italian cuisine</small>
                        </div>
                    </div>
                </div>

                <!-- Profile Card 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="profile_card p-4 shadow rounded text-center">
                        <div class="profile_image mb-3">
                            <img src="{{ asset('images/team/chef2.jpg') }}" alt="Chef 2">
                        </div>
                        <div class="profile_info">
                            <h5 class="mb-2">Afin al-rakhi</h5>
                            <p class="text-muted mb-2">Sous Chef</p>
                            <small class="text-secondary">Specialist in French pastry & desserts</small>
                        </div>
                    </div>
                </div>

                <!-- Profile Card 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="profile_card p-4 shadow rounded text-center">
                        <div class="profile_image mb-3">
                             <img src="{{ asset('assets user/images/aidil1.jpg') }}" alt="Lychee Tea">
                        </div>
                        <div class="profile_info">
                            <h5 class="mb-2">Muhammad Aidil Fitriansyah</h5>
                            <p class="text-muted mb-2">Restaurant Manager</p>
                            <small class="text-secondary">Ensuring your perfect dining experience</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end book section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>Contact Us</h4>
                        <div class="contact_link_box">
                            <a href="#">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Location</span>
                            </a>
                            <a href="tel:+011234567890">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>Call +01 1234567890</span>
                            </a>
                            <a href="mailto:demo@gmail.com">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>demo@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="{{ url('/') }}" class="footer-logo">LapakGo</a>
                        <p>
                            Necessary, making this the first true generator on the Internet. It uses a dictionary of
                            over 200 Latin words, combined with
                        </p>
                        <div class="footer_social">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>Opening Hours</h4>
                    <p>Everyday</p>
                    <p>10.00 Am - 10.00 Pm</p>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a><br><br>
                    &copy; <span id="displayYear"></span> Distributed By
                    <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- end footer section -->

@endsection
