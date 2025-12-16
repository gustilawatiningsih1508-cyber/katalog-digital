@extends('layouts.app')

@section('title', 'LapakGo - Menu')
@section('body-class', 'sub_page')
@section('content')

<link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/user/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
<style>
    .product-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
    }
    .box {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        border: 1px solid #eee;
        border-radius: 10px;
        overflow: hidden;
        background: white;
    }
    .box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .img-box {
        overflow: hidden;
        height: 200px;
    }
    .detail-box {
        padding: 20px;
    }
    .item-name {
        font-weight: 600;
        color: #ffbe33;
        margin-bottom: 10px;
        font-size: 18px;
        min-height: 50px;
    }
    .item-description {
        color: #666;
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 15px;
        min-height: 65px;
    }
    .price {
        color: #ffbe33;
        font-weight: 700;
        font-size: 16px;
        margin: 0;
    }
    .store-info {
        color: #555;
        font-size: 14px;
        margin: 0;
    }
    .store-info i {
        margin-right: 5px;
    }
    .no-products {
        padding: 40px;
        text-align: center;
        background: #f8f9fa;
        border-radius: 10px;
        border: 2px dashed #dee2e6;
    }
    .no-products i {
        font-size: 48px;
        color: #ffbe33;
        margin-bottom: 20px;
    }
</style>

<div class="hero_area">
    <div class="bg-box">
        <img src="{{ asset('assets/user/images/hero-bg.jpg') }}" alt="">
    </div>

    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand">
                    <span>LapakGo</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('promosi') }}">Promosi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tentangkami') }}">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</div>

<section class="food_section layout_padding">
    <div class="container">
        
        <div class="heading_container heading_center mb-5 animate__fadeInUp">
            <h2>Our Menu</h2>
            <p>Temukan rasa favoritmu dari berbagai pilihan menu terbaik kami</p>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <div class="menu-search-container d-flex justify-content-center animate__fadeInUp" style="animation-delay: 0.1s;">
                    <div class="menu-search-wrapper">
                        <div class="search-input-group custom-search">
                            <i class="fa fa-search search-icon"></i>
                            <input type="text" class="search-input" id="searchInput" placeholder="Cari menu favorit kamu...">
                            <button class="btn-search" type="button" id="searchButton"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="filters_menu animate__fadeInUp" style="animation-delay: 0.2s;">
            <li class="active" data-filter="*">Semua</li>
            <li data-filter=".minuman">Minuman</li>
            <li data-filter=".jajanan">Jajanan</li>
            <li data-filter=".makanan-berat">Makanan Berat</li>
        </ul>

        <div id="noResults" class="text-center" style="display: none;">
            <div class="not-found-box animate__fadeInUp">
                <i class="fa fa-search" style="font-size: 3rem; margin-bottom: 20px;"></i>
                <h5 style="font-family: 'Playfair Display', serif; font-weight: 700;">Menu tidak ditemukan</h5>
                <p class="text-muted">Maaf, kami tidak dapat menemukan menu dengan kata kunci tersebut.</p>
                <button class="btn btn-warning" id="showAllButton" style="border-radius: 50px; padding: 10px 30px; font-weight: 600; background-color: #ffbe33; border: none;">
                    Lihat Semua Menu
                </button>
            </div>
        </div>

        <!-- KONTEN UTAMA: MENU DARI DATABASE -->
        <div class="filters-content">
            <div class="row grid">
                
                @if(isset($products) && count($products) > 0)
                    <!-- MENU DARI DATABASE -->
                    @foreach($products as $product)
                        @php
                            // LOGIKA KATEGORI OTOMATIS BERDASARKAN KATEGORI DATABASE
                            $categoryClass = 'minuman'; // default
                            $categoryFromDB = strtolower($product->kategori ?? '');
                            
                            // Tentukan kategori berdasarkan data database
                            if (in_array($categoryFromDB, ['minuman', 'drink', 'beverage'])) {
                                $categoryClass = 'minuman';
                            } elseif (in_array($categoryFromDB, ['jajanan', 'snack', 'cemilan'])) {
                                $categoryClass = 'jajanan';
                            } elseif (in_array($categoryFromDB, ['makanan', 'food', 'makanan berat', 'main course'])) {
                                $categoryClass = 'makanan-berat';
                            }
                            
                            // Tentukan gambar placeholder berdasarkan kategori
                            $placeholderImage = asset('assets/user/images/no-image.jpg'); // Gambar default
                        @endphp
                        
                        <div class="col-sm-6 col-lg-4 all {{ $categoryClass }}">
                            <div class="box animate__fadeInUp">
                                <div class="img-box">
                                    @if($product->gambar)
                                        @php
                                            // Cek apakah gambar ada di storage
                                            $imagePath = 'storage/' . $product->gambar;
                                            $fullPath = public_path($imagePath);
                                        @endphp
                                        @if(file_exists($fullPath) && is_file($fullPath))
                                            <img src="{{ asset($imagePath) }}" 
                                                 alt="{{ $product->nama_produk }}"
                                                 class="product-image"
                                                 onerror="this.onerror=null; this.src='{{ $placeholderImage }}'">
                                        @else
                                            <img src="{{ $placeholderImage }}" 
                                                 alt="{{ $product->nama_produk }}"
                                                 class="product-image">
                                        @endif
                                    @else
                                        <img src="{{ $placeholderImage }}" 
                                             alt="{{ $product->nama_produk }}"
                                             class="product-image">
                                    @endif
                                </div>
                                <div class="detail-box">
                                    <h5 class="item-name">{{ $product->nama_produk }}</h5>
                                    <p class="item-description">
                                        @if($product->deskripsi)
                                            {{ Str::limit($product->deskripsi, 100) }}
                                        @else
                                            Produk berkualitas dari UMKM Bengkalis.
                                        @endif
                                    </p>
                                    <div class="options">
                                        <h6 class="price">Rp {{ number_format($product->harga, 0, ',', '.') }}</h6>
                                        <h6 class="store-info">
                                            <i class="fa fa-store" style="color: #ffbe33;"></i> 
                                            {{ $product->pelakuUsaha->nama_usaha ?? 'UMKM Bengkalis' }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                @else
                    <!-- TIDAK ADA PRODUK DI DATABASE -->
                    <div class="col-12">
                        <div class="no-products animate__fadeInUp">
                            <i class="fa fa-utensils"></i>
                            <h4>Belum Ada Menu Tersedia</h4>
                            <p>Maaf, saat ini belum ada menu yang dapat ditampilkan.</p>
                            <p class="text-muted mb-4">Silakan kembali lagi nanti.</p>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        $(window).on('load', function() {
            // Inisialisasi Isotope hanya jika ada produk
            var productCount = {{ count($products ?? []) }};
            
            if (productCount > 0) {
                var $grid = $('.grid').isotope({
                    itemSelector: '.all',
                    layoutMode: 'fitRows'
                });

                // 1. Logika Klik Filter Kategori
                $('.filters_menu li').click(function() {
                    // Hapus class active dari semua tombol
                    $('.filters_menu li').removeClass('active');
                    // Tambah class active ke tombol yang diklik
                    $(this).addClass('active');

                    // Ambil nilai filter
                    var filterValue = $(this).attr('data-filter');
                    
                    // Jika klik filter kategori, kosongkan kolom pencarian agar tidak bingung
                    $('#searchInput').val(''); 
                    
                    // Jalankan Isotope
                    $grid.isotope({ filter: filterValue });

                    // Cek hasil (untuk menampilkan pesan jika kosong, walau jarang terjadi di kategori)
                    setTimeout(checkResults, 200);
                });

                // 2. Logika Pencarian Real-time
                function performSearch() {
                    var searchTerm = $('#searchInput').val().toLowerCase().trim();

                    // Reset tombol filter visual menjadi "Semua" saat mengetik
                    // Ini UX yang lebih baik: User mengetik = mencari di seluruh menu
                    $('.filters_menu li').removeClass('active');
                    $('.filters_menu li[data-filter="*"]').addClass('active');

                    // Filter Isotope dengan fungsi custom
                    $grid.isotope({
                        filter: function() {
                            var $this = $(this);
                            var itemName = $this.find('.item-name').text().toLowerCase();
                            var itemDesc = $this.find('.item-description').text().toLowerCase();
                            var storeName = $this.find('.store-info').text().toLowerCase();
                            
                            // Cari di Nama, Deskripsi, atau Nama Toko
                            return itemName.includes(searchTerm) || 
                                   itemDesc.includes(searchTerm) || 
                                   storeName.includes(searchTerm);
                        }
                    });

                    checkResults();
                }

                // Jalankan pencarian saat mengetik (Input event)
                $('#searchInput').on('input', function() {
                    performSearch();
                });

                // Tombol cari diklik (opsional, karena sudah real-time)
                $('#searchButton').on('click', function() {
                    performSearch();
                });

                // 3. Fungsi Cek Hasil Kosong
                function checkResults() {
                    // Hitung item yang terlihat
                    var visibleItems = $grid.isotope('getFilteredItemElements').length;

                    if (visibleItems === 0) {
                        $('#noResults').fadeIn();
                    } else {
                        $('#noResults').hide();
                    }
                }

                // 4. Tombol "Tampilkan Semua" pada pesan error
                $('#showAllButton').click(function() {
                    $('#searchInput').val('');
                    $('.filters_menu li').removeClass('active');
                    $('.filters_menu li[data-filter="*"]').addClass('active');
                    $grid.isotope({ filter: '*' });
                    $('#noResults').hide();
                });

                // 5. Handle error pada gambar
                $('.product-image').on('error', function() {
                    $(this).attr('src', '{{ asset('assets/user/images/no-image.jpg') }}');
                });
            } else {
                // Jika tidak ada produk, nonaktifkan filter dan pencarian
                $('.filters_menu li').click(function(e) {
                    e.preventDefault();
                });
                
                $('#searchInput').prop('disabled', true).attr('placeholder', 'Tidak ada menu tersedia');
                $('#searchButton').prop('disabled', true);
            }
        });
    </script>
</section>
@endsection