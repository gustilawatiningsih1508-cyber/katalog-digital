{{-- resources/views/user/promosi.blade.php --}}

@extends('layouts.app')

@section('title', 'LapakGo - Promosi')
@section('body-class', 'sub_page')

@section('content')

    <link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">

    <!-- Hero Area with Background -->
    <div class="hero_area">
        <div class="bg-box">
            <img src="{{ asset('assets/user/images/hero-bg.jpg') }}" alt="">
        </div>

        <!-- Header Section -->
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('promosi') }}">Promosi <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tentangkami') }}">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- End Header Section -->
    </div>

    <!-- Promo Section -->
    <section class="about_section layout_padding" id="promo-section">
        <div class="container">

            <!-- Heading with Animation -->
            <div class="heading_container heading_center mb-5">
                <h2>
                    <span>Promo Spesial</span> UMKM Bengkalis
                </h2>
                <p style="max-width: 800px; margin: 15px auto 0; color: #666; font-size: 16px; line-height: 1.6;">
                    Dapatkan penawaran terbaik dari produk pilihan UMKM lokal. Promo terbatas, buruan pesan sekarang!
                </p>
            </div>

            <!-- Main Promo Banner -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('assets/user/images/promosi.png') }}" alt="Banner Promo UMKM Bengkalis"
                            style="width: 60%; border-radius: 16px; box-shadow: 0 8px 24px rgba(0,0,0,0.15);">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="detail-box" style="padding-left: 30px;">
                        <div class="heading_container">
                            <h2 style="margin-bottom: 20px;">Promo UMKM Bengkalis</h2>
                        </div>
                        <p style="color: #555; line-height: 1.8; margin-bottom: 25px; font-size: 15px;">
                            Nikmati berbagai penawaran menarik dari pelaku UMKM Bengkalis. Harga lebih hemat, produk lebih
                            lengkap, dan promo terbatas setiap hari! Dukung produk lokal dengan berbelanja produk
                            berkualitas dari UMKM pilihan.
                        </p>
                        <a href="#promo-cards"
                            style="display: inline-block; padding: 12px 35px; background-color: #ffbe33; color: #fff; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
                            Lihat Semua Promo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Promo Cards Grid - DATA DARI DATABASE -->
            <div class="row mt-5" id="promo-cards">

                @forelse($promos as $promo)
                    <!-- Promo Card dari Database -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="food_section">
                            <div class="box">
                                <div class="img-box">
                                    @if ($promo->gambar)
                                        <img src="{{ asset('storage/' . $promo->gambar) }}"
                                            alt="{{ $promo->judul_promosi }}">
                                    @else
                                        <img src="https://source.unsplash.com/400x300/?promotion,sale,discount"
                                            alt="{{ $promo->judul_promosi }}">
                                    @endif
                                </div>
                                <div class="detail-box">
                                    <h5>{{ $promo->judul_promosi }}</h5>
                                    <p>{{ Str::limit($promo->deskripsi_promosi, 100) }}</p>
                                    <div class="options">
                                        <h6>
                                            <i class="fa fa-store" style="color: #ffbe33;"></i>
                                            {{ $promo->pelakuUsaha->nama_usaha ?? 'Toko' }}
                                        </h6>

                                        @if ($promo->pelakuUsaha && $promo->pelakuUsaha->no_hp)
                                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $promo->pelakuUsaha->no_hp) }}"
                                                target="_blank"
                                                style="display: flex !important; align-items: center !important; justify-content: center !important; width: 44px !important; height: 44px !important; background-color: #25D366 !important; color: white !important; border-radius: 50% !important; text-decoration: none !important; font-size: 20px !important; transition: all 0.3s ease !important; box-sizing: border-box !important; overflow: hidden !important; flex-shrink: 0 !important; padding: 0 !important; margin: 0 !important; line-height: 1 !important;">
                                                <i class="fa fa-whatsapp"
                                                    style="display: block !important; line-height: 1 !important; font-size: 22px !important;"></i>
                                            </a>
                                        @else
                                            <a href="javascript:void(0)" style="cursor: default; opacity: 0.5;">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <g>
                                                        <g>
                                                            <path d="M495.625,138.125h-81.792L335.375,59.667C318.417,47.75,295.958,52.083,284.042,69c-11.958,16.958-7.625,39.417,9.333,51.333
                                                      l62.708,44.792H155.958l62.667-44.792c16.958-11.917,21.292-34.375,9.333-51.333c-11.917-16.917-34.375-21.25-51.333-9.333
                                                      L98.167,138.125H16.375c-9.042,0-16.375,7.333-16.375,16.375s7.333,16.375,16.375,16.375h20.583v279.75
                                                      c0,27.125,22,49.125,49.125,49.125h340.667c27.125,0,49.125-22,49.125-49.125v-279.75h19.75c9.042,0,16.375-7.333,16.375-16.375
                                                      S504.667,138.125,495.625,138.125z M183.458,431.958c0,9.042-7.333,16.375-16.375,16.375s-16.375-7.333-16.375-16.375V239.333
                                                      c0-9.042,7.333-16.375,16.375-16.375s16.375,7.333,16.375,16.375V431.958z M272.167,431.958c0,9.042-7.333,16.375-16.375,16.375
                                                      s-16.375-7.333-16.375-16.375V239.333c0-9.042,7.333-16.375,16.375-16.375s16.375,7.333,16.375,16.375V431.958z M360.875,431.958
                                                      c0,9.042-7.333,16.375-16.375,16.375s-16.375-7.333-16.375-16.375V239.333c0-9.042,7.333-16.375,16.375-16.375
                                                      s16.375,7.333,16.375,16.375V431.958z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Jika tidak ada promosi di database -->
                    <div class="col-12">
                        <div class="alert alert-info text-center"
                            style="padding: 40px; border-radius: 15px; background: #f8f9fa; border: 2px dashed #dee2e6;">
                            <i class="fa fa-info-circle"
                                style="font-size: 3rem; color: #17a2b8; margin-bottom: 20px;"></i>
                            <h5 style="margin-bottom: 15px; color: #333;">Belum Ada Promosi Tersedia</h5>
                            <p style="color: #666; margin-bottom: 20px;">Promosi menarik akan segera hadir. Pantau terus
                                halaman
                                ini untuk mendapatkan penawaran terbaik!</p>
                            <a href="{{ route('menu') }}" class="btn btn-warning"
                                style="border-radius: 25px; padding: 10px 30px; font-weight: 600;">
                                <i class="fa fa-utensils"></i> Lihat Menu Tersedia
                            </a>
                        </div>
                    </div>
                @endforelse

            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Smooth scroll untuk link dengan href yang dimulai dengan #
                    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                        anchor.addEventListener('click', function(e) {
                            e.preventDefault();
                            const targetId = this.getAttribute('href');
                            const targetElement = document.querySelector(targetId);

                            if (targetElement) {
                                const headerOffset = 100;
                                const elementPosition = targetElement.getBoundingClientRect().top;
                                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                                window.scrollTo({
                                    top: offsetPosition,
                                    behavior: 'smooth'
                                });
                            }
                        });
                    });
                });
            </script>

            <!-- Call to Action -->
            <div class="text-center mt-5">
                <a href="{{ route('menu') }}"
                    style="display: inline-block; padding: 12px 35px; background-color: #ffbe33; color: #fff; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
                    Lihat Semua Produk
                </a>
            </div>

        </div>
    </section>
    <!-- End Promo Section -->

    <!-- End Footer Section -->

    <script src="{{ asset('assets/user/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/user/js/custom.js') }}"></script>

    <script>
        // Display current year in footer
        document.getElementById("displayYear").innerHTML = new Date().getFullYear();
    </script>

@endsection
