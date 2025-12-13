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
            <img src="{{ asset('assets_user/images/banner-promo.jpg') }}" alt="Banner Promosi">
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
                        <div class="user_option">
                            <a href="" class="user_link">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            <a class="cart_link" href="#">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029"
                                    style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path
                                                d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <form class="form-inline">
                                <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                            <a href="" class="order_online">
                                Order Online
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- End Header Section -->
    </div>
    <!-- Promo Section -->
    <section class="about_section layout_padding">
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

            <!-- Promo Cards Grid -->
            <div class="row mt-5" id="promo-cards">

                <!-- Promo Card 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="food_section">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets_user/images/promo-1.jpg') }}" alt="Promo 1">
                            </div>
                            <div class="detail-box">
                                <h5>Diskon 25% Kue Tradisional</h5>
                                <p>Kue tradisional khas Bengkalis dengan cita rasa autentik. Promo berlaku hingga akhir
                                    bulan!</p>
                                <div class="options">
                                    <h6>Rp 45.000 <span style="text-decoration: line-through; opacity: 0.6;">Rp
                                            60.000</span></h6>
                                    <a href="">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Promo Card 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="food_section">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets_user/images/promo-2.jpg') }}" alt="Promo 2">
                            </div>
                            <div class="detail-box">
                                <h5>Beli 2 Gratis 1 Keripik</h5>
                                <p>Keripik renyah dengan berbagai varian rasa. Cocok untuk camilan keluarga di rumah.</p>
                                <div class="options">
                                    <h6>Rp 30.000</h6>
                                    <a href="">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Promo Card 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="food_section">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets_user/images/promo-3.jpg') }}" alt="Promo 3">
                            </div>
                            <div class="detail-box">
                                <h5>Hemat 30% Minuman Segar</h5>
                                <p>Minuman segar dari bahan alami pilihan. Cocok untuk segala cuaca dan aktivitas harian.
                                </p>
                                <div class="options">
                                    <h6>Rp 17.500 <span style="text-decoration: line-through; opacity: 0.6;">Rp
                                            25.000</span></h6>
                                    <a href="">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Promo Card 4 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="food_section">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets_user/images/promo-4.jpg') }}" alt="Promo 4">
                            </div>
                            <div class="detail-box">
                                <h5>Paket Hemat Makanan Ringan</h5>
                                <p>Paket bundling hemat untuk camilan favorit keluarga. Isi 5 varian produk pilihan.</p>
                                <div class="options">
                                    <h6>Rp 99.000 <span style="text-decoration: line-through; opacity: 0.6;">Rp
                                            150.000</span></h6>
                                    <a href="">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Promo Card 5 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="food_section">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets_user/images/promo-5.jpg') }}" alt="Promo 5">
                            </div>
                            <div class="detail-box">
                                <h5>Gratis Ongkir Min. Belanja 100K</h5>
                                <p>Produk oleh-oleh khas Bengkalis dengan kualitas premium. Nikmati promo gratis ongkir
                                    sekarang!</p>
                                <div class="options">
                                    <h6>Mulai Rp 25.000</h6>
                                    <a href="">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Promo Card 6 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="food_section">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets_user/images/promo-6.jpg') }}" alt="Promo 6">
                            </div>
                            <div class="detail-box">
                                <h5>Cashback 20% Produk Baru</h5>
                                <p>Produk baru dengan inovasi rasa terbaru dari UMKM Bengkalis. Dapatkan cashback hingga
                                    20%!</p>
                                <div class="options">
                                    <h6>Rp 35.000</h6>
                                    <a href="">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                const headerOffset =
                                    150; // Offset untuk header - disesuaikan agar card langsung terlihat
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
                <a href="{{ route('menu') }}" class="order_online" style="padding: 15px 45px; font-size: 16px;">
                    Lihat Semua Produk
                </a>
            </div>

        </div>
    </section>
    <!-- End Promo Section -->
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <!-- Footer Section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>Contact Us</h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Bengkalis, Riau, Indonesia</span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>Call +62 812-xxxx-xxxx</span>
                            </a>
                            <a href="mailto:lapakgo.support@gmail.com">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>lapakgo.support@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="{{ route('home') }}" class="footer-logo">LapakGo</a>
                        <p>
                            Platform digital terpercaya untuk mendukung UMKM lokal Bengkalis. Belanja produk berkualitas dan
                            dukung ekonomi lokal bersama LapakGo.
                        </p>
                        <div class="footer_social">
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 footer-col">
                    <div class="footer_hours">
                        <h4>Opening Hours</h4>
                        <p>Senin - Jumat</p>
                        <p>09:00 - 21:00</p>
                        <p>Sabtu - Minggu</p>
                        <p>10:00 - 20:00</p>
                    </div>
                </div>
            </div>

            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> LapakGo. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <script src="{{ asset('assets/user/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/user/js/custom.js') }}"></script>

    <script>
        // Display current year in footer
        document.getElementById("displayYear").innerHTML = new Date().getFullYear();
    </script>

@endsection
