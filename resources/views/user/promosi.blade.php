@extends('layouts.app')

@section('title', 'Promo UMKM Bengkalis')

@section('content')

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