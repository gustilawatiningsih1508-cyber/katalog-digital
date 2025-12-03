@extends('layouts.app')

@section('title', 'Promo UMKM Bengkalis')

@section('content')
<<<<<<< HEAD

{{-- 
    CATATAN: Style CSS Inline telah dihapus di sini karena 
    seluruh styling sudah dipindahkan dan dioptimalkan di file CSS utama Anda 
    (termasuk efek 3D Neumorphism pada .box dan .kategori-box). 
--}}

<div class="hero_area">
    <div class="bg-box">
        <img src="{{ asset('assets_user/images/banner-promosi.jpg') }}"
            style="object-fit: cover; width:100%; height:450px; filter:brightness(0.35);"
            alt="Banner Promosi">
    </div>

    @include('user.navbar')

    {{-- 
        Menggunakan kelas .slider_section dan .detail-box 
        agar sesuai dengan struktur CSS utama Anda (Header) 
    --}}
    <section class="slider_section" style="padding: 100px 0 100px 0;">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">
                    <div class="detail-box" style="margin-bottom: 0;">
                        {{-- Menggunakan kelas Judul baru --}}
                        <h1 class="promo-title">
                            PROMO UMKM <span class="text-warning">BENGKALIS</span>
                        </h1>
                        <p class="promo-sub">
                            Nikmati penawaran menarik & hemat dari pelaku UMKM lokal setiap hari.
                        </p>
                        <a href="#promo" class="promo-cta">
                            Lihat Promo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Garis Pemisah --}}
<hr>

<section class="offer_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>🎯 Kategori Promo</h2>
        </div>

        <div class="row">
            
            {{-- PENTING: Menggunakan kelas .kategori-box yang telah diperbarui CSS-nya --}}
            <div class="col-md-4 mb-4">
                <div class="kategori-box text-center">
                    <h3>Makanan</h3>
                    <p>Promo makanan UMKM dengan cita rasa khas Bengkalis.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="kategori-box text-center">
                    <h3>Minuman</h3>
                    <p>Dari minuman segar hingga minuman tradisional Melayu.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="kategori-box text-center">
                    <h3>Kerajinan</h3>
                    <p>Karya kreatif pengrajin lokal dengan harga promo.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Garis Pemisah --}}
<hr>

<section id="promo" class="food_section layout_padding-top">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>🔥 Promo Terbaru UMKM Bengkalis</h2>
            <p>Promo paling baru hari ini — langsung dari pelaku UMKM terbaik.</p>
        </div>

        <div class="row">

            <div class="col-sm-6 col-lg-4 mb-4">
                {{-- PENTING: Menggunakan kelas .box untuk Neumorphism --}}
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('assets_user/images/promo1.jpg') }}" alt="Lapis Legit">
                    </div>
                    <div class="detail-box">
                        <h5>Lapis Legit Bengkalis — Diskon 20%</h5>
                        <p>Meleleh, lembut, dan fresh! Cocok untuk oleh-oleh.</p>
                        <div class="options">
                            <span class="price">Rp 25.000</span>
                            {{-- Menggunakan kelas .order_btn baru --}}
                            <a href="" class="order_btn">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('assets_user/images/promo2.jpg') }}" alt="Mie Sagu">
                    </div>
                    <div class="detail-box">
                        <h5>Mie Sagu Pedas — Hemat 30%</h5>
                        <p>Makanan khas Bengkalis terenak, wajib coba!</p>
                        <div class="options">
                            <span class="price">Rp 15.000</span>
                            <a href="" class="order_btn">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('assets_user/images/promo3.jpg') }}" alt="Es Laksamana">
                    </div>
                    <div class="detail-box">
                        <h5>Es Laksamana Mengamuk — Diskon 10%</h5>
                        <p>Minuman paling segar khas Melayu Bengkalis.</p>
                        <div class="options">
                            <span class="price">Rp 10.000</span>
                            <a href="" class="order_btn">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tambahkan tombol Lihat Lebih Banyak jika diperlukan --}}
            {{-- <div class="btn-box">
                <a href="#">
                    Lihat Lebih Banyak
                </a>
            </div> --}}

        </div>

    </div>
</section>

@endsection
=======
    <div class="hero_area">
        <div class="bg-box">
            <img src="{{ asset('assets user/images/hero-bg.jpg') }}" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <span>
                            LapakGo
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                                <a class="nav-link" href="menu"></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('promosi') }}">promosi <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tentangkami') }}">Tentang Kami</a>
                            </li>
                        </ul>

                        </a>

                        <g>
                            <g>

                            </g>
                        </g>
                        <g>
                            <g>

                            </g>
                        </g>
                        <g>
                            <g>

                            </g>
                        </g>
                        </svg>
                        </a>


                    </div>
            </div>
            </nav>
    </div>
    </header>
    <!-- end header section -->
    </div>

    <!-- about section -->
    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="{{ asset('assets user/images/oi.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                We Are LapakGo
                            </h2>
                        </div>
                        <p>
                            Hadir dengan cita rasa cokelat yang kaya dan creamy, MILO Premium Drink menjadi pilihan terbaik untuk menemani aktivitas harian Anda. Diracik dengan standar kualitas UMKM, setiap gelas menghadirkan pengalaman minum yang lembut, menyegarkan, dan penuh energi.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Contact Us
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="" class="footer-logo">
                            Feane
                        </a>
                        <p>
                            Necessary, making this the first true generator on the Internet. It uses a dictionary of over
                            200 Latin words, combined with
                        </p>
                        <div class="footer_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>
                        Opening Hours
                    </h4>
                    <p>
                        Everyday
                    </p>
                    <p>
                        10.00 Am -10.00 Pm
                    </p>
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
    <!-- footer section -->
@endsection
>>>>>>> 0c9ad4c5e517541dc7f1e7bf73c4a227c51ae3c9
