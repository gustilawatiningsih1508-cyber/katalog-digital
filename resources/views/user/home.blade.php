@extends('layouts.app')
@section('title', 'LapakGo - Home')
@section('content')

    {{-- Perbaiki: Deklarasi CSS harus menggunakan link rel="stylesheet" --}}
    <link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css.map') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.scss') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/fonts/fontawesome-webfont.ttf') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/fonts/fontawesome-webfont.woff') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/fonts/fontawesome-webfont.woff2') }}">

    <link rel="stylesheet" href="{{ asset('assets/user/js/bootstrap.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/js/custom.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/js/jquery-3.4.1.min.js') }}">

    <div class="hero_area">
        <div class="bg-box">
            <img src="{{ asset('assets/user/images/coklat.png') }}" alt="Background">
        </div>
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span>
                            LapakGo
                        </span>
                    </a>

                    {{-- Tombol Toggle Navbar (untuk tampilan mobile) --}}
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
    </div>

    <section class="offer_section layout_padding-bottom">
        <div class="offer_container">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>Pilih Lapakmu</h2>
                    <p>Minuman segar, camilan enak, atau makanan berat? Semuanya tersedia!</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/milo1.jpg') }}" alt="Miloku">
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
                                <img src="{{ asset('assets/user/images/ngemil2.jpg') }}" alt="Ngemil Yuk">
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
                                <img src="{{ asset('assets/user/images/warung.jpg') }}" alt="Warung Mangan">
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
    <section class="food_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Bestseller Menu</h2>
                <p>Menu favorit pilihan pelanggan kami</p>
            </div>

            {{-- PERBAIKAN 1: Sesuaikan data-filter dengan nama class yang logis & tambahkan titik (.) --}}
            <ul class="filters_menu">
                <li class="active" data-filter="*">All</li>
                <li data-filter=".food">Food</li>
                <li data-filter=".drinks">Drinks</li>
                <li data-filter=".snack">Snack</li>
            </ul>

            <div class="filters-content">
                {{-- Pastikan parent memiliki class 'grid' untuk selector Isotope --}}
                <div class="row grid">

                    {{-- ITEM 1: MILO (DRINKS) --}}
                    {{-- Ubah class 'pizza' menjadi 'drinks' --}}
                    <div class="col-sm-6 col-lg-4 all drinks">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/es.jpeg') }}" alt="Milo Malaysia">
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

                    {{-- ITEM 2: AYAM GEPREK (FOOD) --}}
                    {{-- Ubah class 'burger' menjadi 'food' --}}
                    <div class="col-sm-6 col-lg-4 all food">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/ayam1.jpg') }}" alt="Ayam Geprek">
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

                    {{-- ITEM 3: KENTANG KRISPI (SNACK) --}}
                    {{-- Ubah class 'pasta' menjadi 'snack' --}}
                    <div class="col-sm-6 col-lg-4 all snack">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/f5.png') }}" alt="Kentang Krispi">
                            </div>
                            <div class="detail-box">
                                <h5>Kentang Krispi</h5>
                                <p>Camilan kentang tipis yang digoreng renyah.</p>
                                <div class="options">
                                    <h6>Ngemil yuk</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ITEM 4: MILK TEA (DRINKS) --}}
                    <div class="col-sm-6 col-lg-4 all drinks">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/cincau.jpg') }}" alt="Milk Tea">
                            </div>
                            <div class="detail-box">
                                <h5>Milk Tea Mutiara Cincau</h5>
                                <p>Milk tea creamy dengan perpaduan mutiara.</p>
                                <div class="options">
                                    <h6>Miloku</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ITEM 5: PISANG COKLAT (SNACK) --}}
                    <div class="col-sm-6 col-lg-4 all snack">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/Pisang.jpg') }}" alt="Pisang Coklat">
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

                    {{-- ITEM 6: LYCHEE TEA (DRINKS) --}}
                    <div class="col-sm-6 col-lg-4 all drinks">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/f1.png') }}" alt="Lychee Tea">
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

    {{-- TAMBAHAN: Script ini untuk memastikan filter berjalan meskipun custom.js error --}}
    {{-- Letakkan script ini tepat SEBELUM @endsection --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Cek apakah jQuery sudah dimuat
            if (typeof $ !== 'undefined') {
                // Inisialisasi Isotope jika plugin tersedia
                if ($.fn.isotope) {
                    var $grid = $('.grid').isotope({
                        itemSelector: '.all',
                        layoutMode: 'fitRows'
                    });

                    // Filter items on button click
                    $('.filters_menu li').on('click', function() {
                        $('.filters_menu li').removeClass('active');
                        $(this).addClass('active');

                        var filterValue = $(this).attr('data-filter');
                        $grid.isotope({
                            filter: filterValue
                        });
                    });
                }
            }
        });
    </script>
    </div>
    </section>
    <section class="about_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Visi & Misi Kami</h2>
                <p>Komitmen kami untuk menghadirkan yang terbaik</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 mb-4">
                    <div class="card text-white p-4 h-100" style="background-color: #2c3e50; border-radius: 10px;">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h3 class="text-center mb-3" style="color: #ffc107; font-weight: bold;">Visi</h3>
                            <p class="text-center">
                                Menjadi platform kuliner digital terpercaya yang menghubungkan UMKM lokal dengan masyarakat,
                                menghadirkan pengalaman kuliner terbaik, dan mendukung pertumbuhan ekonomi kreatif
                                Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-4">
                    <div class="card text-white p-4 h-100" style="background-color: #2c3e50; border-radius: 10px;">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h3 class="text-center mb-3" style="color: #ffc107; font-weight: bold;">Misi</h3>
                            <p class="text-center">
                                Menghubungkan pelanggan dengan lapak-lapak kuliner pilihan, memberdayakan UMKM dengan
                                teknologi digital, dan menciptakan ekosistem kuliner yang berkualitas dan saling
                                menguntungkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="book_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Tim Kami</h2>
                <p>Dedikasi untuk menghadirkan pengalaman kuliner terbaik</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="profile_card p-4 shadow rounded text-center">
                        <div class="profile_image mb-3">
                            <img src="{{ asset('assets/user/images/tila.jpg') }}" alt="Gustillawati Ningsih"
                                class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="profile_info">
                            <h5 class="mb-2">Gustillawati Ningsih</h5>
                            <p class="text-muted mb-2">UI/UX Designer and Project Documentation Lead</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="profile_card p-4 shadow rounded text-center">
                        <div class="profile_image mb-3">
                            <img src="{{ asset('assets/user/images/afin.jpg') }}" alt="Afin al-rakhi"
                                class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="profile_info">
                            <h5 class="mb-2">Afin al-rakhi</h5>
                            <p class="text-muted mb-2">Backend Developer and Database Designer</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="profile_card p-4 shadow rounded text-center">
                        <div class="profile_image mb-3">
                            <img src="{{ asset('assets/user/images/aidil1.jpg') }}" alt="Muhammad Aidil Fitriansyah"
                                class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="profile_info">
                            <h5 class="mb-2">Muhammad Aidil Fitriansyah</h5>
                            <p class="text-muted mb-2">Frontend Developer and System Analyst</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer_section">
        <div class="container">
            <div class="row justify-content-between">
                {{-- Bagian Kiri: Kontak dan Lokasi --}}
                <div class="col-md-3 footer-col">
                    <div class="footer_contact">
                        <h4>Contact Us</h4>
                        <div class="contact_link_box">
                            <div class="contact-item">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Bengkalis, Riau, Indonesia</span>
                            </div>
                            <a href="https://wa.me/6289501783080" class="contact-item" target="_blank">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                <span>+62 895 0178 3080</span>
                            </a>
                            <a href="https://wa.me/6285375854459" class="contact-item" target="_blank">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                <span>+62 853 7585 4459</span>
                            </a>
                            <a href="https://wa.me/6282236345814" class="contact-item" target="_blank">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                <span>+62 822 3634 5814</span>
                            </a>
                            <div class="contact-item">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>lapakgo.support@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bagian Tengah: Logo dan Deskripsi --}}
                <div class="col-md-6 footer-col text-center">
                    <div class="footer_detail">
                        <a href="{{ route('home') }}" class="footer-logo mb-3">LapakGo</a>
                        <p class="mx-auto" style="max-width: 400px;">
                            Platform digital terpercaya untuk mendukung<br>
                            UMKM lokal Bengkalis. Belanja produk<br>
                            berkualitas dan dukung ekonomi lokal<br>
                            bersama LapakGo.
                        </p>
                        <p>
                            © 2025 LapakGo. All Rights Reserved.
                        </p>
                    </div>
                </div>

                {{-- Bagian Kanan: Menu --}}
                <div class="col-md-3 footer-col">
                    <div class="footer_menu">
                        <h4>Menu</h4>
                        <ul class="footer-links" style="list-style-type: none; padding-left: 0;">
                            <li class="mb-2"><a href="{{ url('/') }}">Beranda</a></li>
                            <li class="mb-2"><a href="{{ url('/menu') }}">Menu</a></li>
                            <li class="mb-2"><a href="{{ url('/promosi') }}">Promosi</a></li>
                            <li class="mb-2"><a href="{{ url('/tentangkami') }}">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- **TAMBAHKAN SCRIPT JAVASCRIPT DI SINI DENGAN TAG <script>** --}}
    <script src="{{ asset('assets/user/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/user/js/custom.js') }}"></script>
    <script>
        // Pastikan fungsi untuk mengatur tahun di footer berjalan
        document.getElementById('displayYear').textContent = new Date().getFullYear();
    </script>
    {{-- Anda mungkin juga perlu memastikan ada script untuk filter menu "food section" di custom.js --}}

@endsection
