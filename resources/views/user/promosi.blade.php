@extends('layouts.app')

@section('title', 'Promo UMKM Bengkalis')

@section('content')

<!-- Header Section -->
<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <span>LapakGo</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
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
                        <a class="nav-link" href="{{ route('promosi') }}">Promosi <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentangkami') }}">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<div class="hero_area">
    <div class="hero-content">
        <h1>Promo UMKM Bengkalis</h1>
        <p>Promo spesial minuman, jajanan, dan makanan berat</p>
        <a href="#promo" class="btn-scroll">Lihat Promo</a>
    </div>
</div>

<!-- PROMOTION LIST -->
<section id="promo" class="food_section layout_padding py-5">
    <div class="container">

        <!-- =============== PROMO MINUMAN ================= -->
        <div class="heading_container heading_center mb-4">
            <h2>🍹 PROMO MINUMAN</h2>
            <p>Diskon spesial & paket hemat khusus minuman favorit</p>
        </div>

        <div class="row">
            <!-- Minuman 1 -->
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="box position-relative">
                    <span class="badge-promo">Beli 2 Gratis 1</span>
                    <div class="img-box">
                        <img src="{{ asset('assets_user/images/milo.jpg') }}" alt="Air Milo Malaysia">
                    </div>
                    <div class="detail-box">
                        <h5>Air Milo Malaysia</h5>
                        <p>Beli 2 Milo Malaysia, GRATIS 1 Milo mini (khusus minggu ini!)</p>
                        <h6>Rp 10.000/cup</h6>
                    </div>
                </div>
            </div>

            <!-- Minuman 2 -->
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="box position-relative">
                    <span class="badge-promo">Diskon Rp 1.500</span>
                    <div class="img-box">
                        <img src="{{ asset('assets_user/images/lychee.jpg') }}" alt="Lychee Tea Fresh">
                    </div>
                    <div class="detail-box">
                        <h5>Lychee Tea Fresh</h5>
                        <p>Segar & manis alami. Diskon langsung tanpa syarat!</p>
                        <h6>Rp 8.500 <span class="old">Rp 10.000</span></h6>
                    </div>
                </div>
            </div>

            <!-- Minuman 3 -->
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="box position-relative">
                    <span class="badge-promo">Paket Hemat</span>
                    <div class="img-box">
                        <img src="{{ asset('assets_user/images/milktea.jpg') }}" alt="Milk Tea Boba">
                    </div>
                    <div class="detail-box">
                        <h5>Milk Tea Boba</h5>
                        <p>Paket 3 cup hanya 25K (hemat 7K)!</p>
                        <h6>Rp 25.000 / 3 cup</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- =============== PROMO JAJANAN ================= -->
        <div class="heading_container heading_center mt-5 mb-4">
            <h2>🍟 PROMO JAJANAN</h2>
            <p>Promo cemilan favorit anak muda</p>
        </div>

        <div class="row">
            <!-- Jajanan 1 -->
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="box position-relative">
                    <span class="badge-promo">Diskon 20%</span>
                    <div class="img-box">
                        <img src="{{ asset('assets_user/images/kentang.jpg') }}" alt="Kentang Goreng Crispy">
                    </div>
                    <div class="detail-box">
                        <h5>Kentang Goreng Crispy</h5>
                        <p>Cemilan renyah, cocok dimakan kapan saja.</p>
                        <h6>Rp 8.000 <span class="old">Rp 10.000</span></h6>
                    </div>
                </div>
            </div>

            <!-- Jajanan 2 -->
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="box position-relative">
                    <span class="badge-promo">Beli 3 Hemat</span>
                    <div class="img-box">
                        <img src="{{ asset('assets_user/images/rotibakar.jpg') }}" alt="Roti Bakar Coklat">
                    </div>
                    <div class="detail-box">
                        <h5>Roti Bakar Coklat</h5>
                        <p>Paket 3 pcs hanya Rp 20K (hemat 4K).</p>
                        <h6>Rp 20.000 / 3 pcs</h6>
                    </div>
                </div>
            </div>

            <!-- Jajanan 3 -->
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="box position-relative">
                    <span class="badge-promo">Diskon Rp 2.000</span>
                    <div class="img-box">
                        <img src="{{ asset('assets_user/images/pisang.jpg') }}" alt="Pisang Goreng Lumer">
                    </div>
                    <div class="detail-box">
                        <h5>Pisang Goreng Lumer</h5>
                        <p>Pisang manis dengan coklat lumer yang nikmat.</p>
                        <h6>Rp 6.000 <span class="old">Rp 8.000</span></h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- =============== PROMO MAKANAN BERAT ================= -->
        <div class="heading_container heading_center mt-5 mb-4">
            <h2>🍛 PROMO MAKANAN BERAT</h2>
            <p>Porsi kenyang harga miring</p>
        </div>

        <div class="row">
            <!-- Makanan 1 -->
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="box position-relative">
                    <span class="badge-promo">Diskon 10%</span>
                    <div class="img-box">
                        <img src="{{ asset('assets_user/images/nasigoreng.jpg') }}" alt="Nasi Goreng">
                    </div>
                    <div class="detail-box">
                        <h5>Nasi Goreng Spesial</h5>
                        <p>Nasi goreng dengan topping sosis & ayam suwir.</p>
                        <h6>Rp 13.500 <span class="old">Rp 15.000</span></h6>
                    </div>
                </div>
            </div>

            <!-- Makanan 2 -->
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="box position-relative">
                    <span class="badge-promo">Paket Hemat</span>
                    <div class="img-box">
                        <img src="{{ asset('assets_user/images/ayamgeprek.jpg') }}" alt="Ayam Geprek">
                    </div>
                    <div class="detail-box">
                        <h5>Ayam Geprek</h5>
                        <p>Ayam Geprek + Es Teh hanya 17K.</p>
                        <h6>Rp 17.000</h6>
                    </div>
                </div>
            </div>

            <!-- Makanan 3 -->
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="box position-relative">
                    <span class="badge-promo">Gratis Minum</span>
                    <div class="img-box">
                        <img src="{{ asset('assets_user/images/mieayam.jpg') }}" alt="Mie Ayam Bakso">
                    </div>
                    <div class="detail-box">
                        <h5>Mie Ayam Bakso</h5>
                        <p>Beli 1 mie ayam bakso GRATIS teh hangat.</p>
                        <h6>Rp 12.000</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection