@extends('layouts.app')

@section('title', 'LapakGo - Tentang Kami')
@section('body-class', 'sub_page')

@section('content')

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
            <img src="{{ asset('assets/user/images/hero-bg.jpg') }}" alt="">
        </div>

        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <span>LapakGo</span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('promosi') }}">Promosi</a></li>
                            <li class="nav-item active"><a class="nav-link" href="{{ route('tentangkami') }}">Tentang Kami
                                    <span class="sr-only">(current)</span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </div>

    <!-- About Section -->
    <section class="about_section layout_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="img-box">
                        <img src="{{ asset('assets/user/images/tentang.jpg') }}" alt="Tentang LapakGo"
                            class="w-100 shadow-lg rounded">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>Tentang LapakGo</h2>
                        </div>
                        <p class="mt-3 text-secondary">
                            LapakGo adalah web katalog kuliner yang menampilkan beragam pilihan makanan, minuman, dan snack
                            dari berbagai penjual terpercaya. Setiap produk disajikan dengan informasi yang jelas, tampilan
                            visual yang menarik, serta kategori yang tertata rapi untuk memudahkan pengguna dalam
                            menjelajah.
                        </p>
                        <p class="text-secondary">
                            Sebagai platform katalog, LapakGo berfokus pada kemudahan pencarian dan kenyamanan eksplorasi
                            produk, sehingga pengunjung dapat menemukan referensi kuliner terbaik dengan cepat dan efisien.
                            LapakGo menjadi jembatan antara penjual dan pelanggan dalam satu ruang digital yang modern,
                            elegan, dan informatif.
                        </p>

                        <a href="{{ route('menu') }}" class="btn text-white rounded-pill px-4 py-2 mt-4 shadow"
                            style="background-color: #f4b342;">
                            Jelajahi Menu Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="about_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center mb-5">
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

    <!-- Team Section -->
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
                        <h4 style="color: #ffc107; font-weight: bold;">Hubungi Kami</h4>
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
                                <span>lapakgo954@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bagian Tengah: Logo dan Deskripsi --}}
                <div class="col-md-6 footer-col text-center">
                    <div class="footer_detail">
                        <a href="{{ route('home') }}" class="footer-logo mb-3">LapakG0</a>
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
                        <h4 style="color: #ffc107; font-weight: bold;">Daftar Halaman</h4>
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

@endsection
