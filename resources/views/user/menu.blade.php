@extends('layouts.app')

@section('title', 'LapakGo - Menu')
@section('body-class', 'sub_page')

@section('content')
    <div class="hero_area">
        <div class="bg-box">
            <img src="{{ asset('assets/user/images//hero-bg.jpg') }}" alt="">
        </div>

        <!-- header section starts -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand">
                        <span>LapakGo</span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('menu') }}">Menu <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('promosi') }}">promosi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tentangkami') }}">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->

    </div>

    <!-- food section -->
    <section class="food_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Our Menu</h2>
            </div>

            <!-- Search Bar -->
            <div class="row mb-4">
                <div class="col-md-8 mx-auto">
                    <div class="input-group">
                        <input type="text" id="searchInput" class="form-control" placeholder="Cari menu makanan atau minuman..." 
                               aria-label="Search" aria-describedby="search-addon">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="button" id="searchButton">
                                <i class="fa fa-search"></i> Cari
                            </button>
                        </div>
                    </div>
                    <div class="mt-2">
                        <small class="text-muted" id="searchResultInfo">Ketik nama menu, kategori, atau toko</small>
                    </div>
                </div>
            </div>

            <!-- Filter Buttons -->
            <ul class="filters_menu">
                <li class="active" data-filter="*">Semua</li>
                <li data-filter=".minuman">Minuman</li>
                <li data-filter=".jajanan">Jajanan</li>
                <li data-filter=".makanan-berat">Makanan Berat</li>
            </ul>

            <!-- No Results Message -->
            <div id="noResults" class="text-center mt-4" style="display: none;">
                <div class="alert alert-warning">
                    <i class="fa fa-search" style="font-size: 2rem;"></i>
                    <h5 class="mt-2">Menu tidak ditemukan</h5>
                    <p>Coba kata kunci lain atau lihat semua menu</p>
                    <button class="btn btn-outline-primary btn-sm" id="showAllButton">Tampilkan Semua Menu</button>
                </div>
            </div>

            <!-- Menu Items -->
            <div class="filters-content">
                <div class="row grid">

                    <!-- Minuman -->
                    <div class="col-sm-6 col-lg-4 all minuman">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/milo.png') }}" alt="Air Milo" width="500"
                                    height="300">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Air Milo</h5>
                                <p class="item-description">Minuman coklat berenergi yang menyengarkan.</p>
                                <div class="options">
                                    <h6 class="price">Rp10.000</h6>
                                    <h6 class="store-info" data-store="Miloku">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Miloku
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all minuman">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/cincau.jpg') }}" alt="Milk Tea" width="500"
                                    height="300">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Milk Tea Mutiara Cincau</h5>
                                <p class="item-description">Milk tea creamy dengan perpaduan mutiara dan cincau yang menyegarkan.</p>
                                <div class="options">
                                    <h6 class="price">Rp15.000</h6>
                                    <h6 class="store-info" data-store="Miloku">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Miloku
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all minuman">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/kopi2.jpg') }}" alt="Kopi Milo">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Kopi Milo</h5>
                                <p class="item-description">Perpaduan kopi kuat dan coklat Milo yang nikmat</p>
                                <div class="options">
                                    <h6 class="price">Rp17.000</h6>
                                    <h6 class="store-info" data-store="Miloku">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Miloku
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all minuman">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/f1.png') }}" alt="Lychee Tea">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Lychee Tea</h5>
                                <p class="item-description">Rasanya yang lembut, dingin dan menyegarkan</p>
                                <div class="options">
                                    <h6 class="price">Rp8.000</h6>
                                    <h6 class="store-info" data-store="Miloku">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Miloku
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all minuman">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/e.jpg') }}" alt="Lemon Tea">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Lemon Tea</h5>
                                <p class="item-description">Es teh lemon dingin menggoda, penuh es batu bening dan irisan lemon segar</p>
                                <div class="options">
                                    <h6 class="price">Rp7.000</h6>
                                    <h6 class="store-info" data-store="Miloku">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Miloku
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Jajanan -->
                    <div class="col-sm-6 col-lg-4 all jajanan">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/kentang.jpeg') }}" alt="Kentang Spiral">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Kentang Spiral</h5>
                                <p class="item-description">kentang dipotong spiral dan digoreng renyah dengan bumbu</p>
                                <div class="options">
                                    <h6 class="price">Rp12.000</h6>
                                    <h6 class="store-info" data-store="Ngemil yuk">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Ngemil yuk
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all jajanan">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/Pisang.jpg') }}" alt="Pisang Coklat">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Pisang Coklat</h5>
                                <p class="item-description">Pisang manis dengan lelehan coklat nikmat</p>
                                <div class="options">
                                    <h6 class="price">Rp10.000</h6>
                                    <h6 class="store-info" data-store="Ngemil yuk">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Ngemil yuk
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all jajanan">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/curly.jpg') }}" alt="Kentang Spiral Kecil">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Kentang Spiral Kecil</h5>
                                <p class="item-description">kentang goreng berbentuk spiral kecil yang renyah dan berbumbu.</p>
                                <div class="options">
                                    <h6 class="price">Rp10.000</h6>
                                    <h6 class="store-info" data-store="Ngemil yuk">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Ngemil yuk
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all jajanan">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/tela.jpg') }}" alt="Tela Tela">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Tela Tela</h5>
                                <p class="item-description">Tela-tela lezat, pas untuk segala suasana</p>
                                <div class="options">
                                    <h6 class="price">Rp10.000</h6>
                                    <h6 class="store-info" data-store="Ngemil yuk">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Ngemil yuk
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all jajanan">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/f5.png') }}" alt="Kentang Goreng">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Kentang Goreng</h5>
                                <p class="item-description">Camilan kentang tipis yang digoreng renyah dengan rasa gurih dan ringan.</p>
                                <div class="options">
                                    <h6 class="price">Rp10.000</h6>
                                    <h6 class="store-info" data-store="Ngemil yuk">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Ngemil yuk
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Makanan Berat -->
                    <div class="col-sm-6 col-lg-4 all makanan-berat">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/ayam1.jpg') }}" alt="Ayam Geprek">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Ayam Geprek</h5>
                                <p class="item-description">Ayam crispy dengan sambal geprek pedas nikmat.</p>
                                <div class="options">
                                    <h6 class="price">Rp14.000</h6>
                                    <h6 class="store-info" data-store="Warung Makan">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Warung Makan
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all makanan-berat">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/lele.jpg') }}" alt="Lele Goreng">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Lele Goreng</h5>
                                <p class="item-description">Lele goreng gurih dengan tekstur renyah khas Bengkalis.</p>
                                <div class="options">
                                    <h6 class="price">Rp10.000</h6>
                                    <h6 class="store-info" data-store="Warung Makan">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Warung Makan
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all makanan-berat">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/telor.jpg') }}" alt="Telor Balado">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Telor Balado</h5>
                                <p class="item-description">Telur rebus dengan sambal balado pedas menggoda.</p>
                                <div class="options">
                                    <h6 class="price">Rp10.000</h6>
                                    <h6 class="store-info" data-store="Warung Makan">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Warung Makan
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all makanan-berat">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/ayamgulai.jpg') }}" alt="Ayam Gulai">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Ayam Gulai</h5>
                                <p class="item-description">Ayam dimasak dengan bumbu gulai khas Padang.</p>
                                <div class="options">
                                    <h6 class="price">Rp12.000</h6>
                                    <h6 class="store-info" data-store="Warung Makan">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Warung Makan
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all makanan-berat">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets/user/images/sayur.jpg') }}" alt="Sayur Daun Singkong">
                            </div>
                            <div class="detail-box">
                                <h5 class="item-name">Sayur Daun Singkong</h5>
                                <p class="item-description">Daun singkong lembut dengan bumbu santan yang gurih.</p>
                                <div class="options">
                                    <h6 class="price">Rp12.000</h6>
                                    <h6 class="store-info" data-store="Warung Makan">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Warung Makan
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Include jQuery, Isotope JS, and Font Awesome -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        
        <script>
            $(document).ready(function() {
                var $grid = $('.filters-content .grid').isotope({
                    itemSelector: '.all',
                    layoutMode: 'fitRows'
                });

                // Filter functionality
                $('.filters_menu li').click(function() {
                    $('.filters_menu li').removeClass('active');
                    $(this).addClass('active');

                    var filterValue = $(this).attr('data-filter');
                    $grid.isotope({
                        filter: filterValue
                    });
                    
                    // Update search result info
                    updateSearchResultInfo();
                });

                // Search functionality
                function performSearch() {
                    var searchTerm = $('#searchInput').val().toLowerCase().trim();
                    
                    if (searchTerm === '') {
                        // If search is empty, show all items
                        $grid.isotope({ filter: '*' });
                        $('#noResults').hide();
                        $('#searchResultInfo').text('Ketik nama menu, kategori, atau toko');
                        $('.filters_menu li').removeClass('active');
                        $('.filters_menu li[data-filter="*"]').addClass('active');
                        return;
                    }

                    // Filter items based on search term
                    $grid.isotope({
                        filter: function() {
                            var $this = $(this);
                            var itemName = $this.find('.item-name').text().toLowerCase();
                            var itemDescription = $this.find('.item-description').text().toLowerCase();
                            var storeName = $this.find('.store-info').data('store').toLowerCase();
                            var category = $this.attr('class').toLowerCase();
                            
                            // Search in multiple fields
                            return itemName.includes(searchTerm) || 
                                   itemDescription.includes(searchTerm) || 
                                   storeName.includes(searchTerm) ||
                                   category.includes(searchTerm);
                        }
                    });

                    // Show/hide no results message
                    var visibleItems = $grid.isotope('getFilteredItemElements').length;
                    if (visibleItems === 0) {
                        $('#noResults').show();
                        $('#searchResultInfo').html('<span class="text-danger">Hasil pencarian untuk "' + searchTerm + '" tidak ditemukan</span>');
                    } else {
                        $('#noResults').hide();
                        $('#searchResultInfo').html('<span class="text-success">Ditemukan ' + visibleItems + ' hasil untuk "' + searchTerm + '"</span>');
                    }

                    // Update filter buttons to show all
                    $('.filters_menu li').removeClass('active');
                }

                // Search button click event
                $('#searchButton').click(function() {
                    performSearch();
                });

                // Enter key event for search input
                $('#searchInput').keypress(function(e) {
                    if (e.which === 13) { // Enter key
                        performSearch();
                    }
                });

                // Real-time search as user types (optional)
                $('#searchInput').on('input', function() {
                    var searchTerm = $(this).val().trim();
                    if (searchTerm.length >= 2) {
                        performSearch();
                    } else if (searchTerm === '') {
                        $grid.isotope({ filter: '*' });
                        $('#noResults').hide();
                        $('#searchResultInfo').text('Ketik nama menu, kategori, atau toko');
                    }
                });

                // Show all button click event
                $('#showAllButton').click(function() {
                    $('#searchInput').val('');
                    $grid.isotope({ filter: '*' });
                    $('#noResults').hide();
                    $('#searchResultInfo').text('Ketik nama menu, kategori, atau toko');
                    $('.filters_menu li').removeClass('active');
                    $('.filters_menu li[data-filter="*"]').addClass('active');
                });

                // Function to update search result info
                function updateSearchResultInfo() {
                    var activeFilter = $('.filters_menu li.active').text();
                    var visibleItems = $grid.isotope('getFilteredItemElements').length;
                    
                    if (activeFilter !== 'Semua') {
                        $('#searchResultInfo').text('Menampilkan ' + visibleItems + ' item dalam kategori ' + activeFilter);
                    } else {
                        $('#searchResultInfo').text('Ketik nama menu, kategori, atau toko');
                    }
                }

                // Initial update
                updateSearchResultInfo();
            });
        </script>
    </section>
@endsection