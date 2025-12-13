@extends('layouts.app')

@section('title', 'LapakGo - Menu')
@section('body-class', 'sub_page')
@section('content')

<link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/user/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
<div class="hero_area">
    <div class="bg-box">
        <img src="{{ asset('assets/user/images//hero-bg.jpg') }}" alt="">
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

        <div class="filters-content">
            <div class="row grid">

                <div class="col-sm-6 col-lg-4 all minuman">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/milo.png') }}" alt="Air Milo">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Air Milo</h5>
                            <p class="item-description">Minuman coklat berenergi yang menyegarkan.</p>
                            <div class="options">
                                <h6 class="price">Rp10.000</h6>
                                <h6 class="store-info" data-store="Miloku">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Miloku
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all minuman">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/cincau.jpg') }}" alt="Milk Tea">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Milk Tea Mutiara Cincau</h5>
                            <p class="item-description">Milk tea creamy dengan perpaduan mutiara dan cincau.</p>
                            <div class="options">
                                <h6 class="price">Rp15.000</h6>
                                <h6 class="store-info" data-store="Miloku">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Miloku
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all minuman">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/kopi2.jpg') }}" alt="Kopi Milo">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Kopi Milo</h5>
                            <p class="item-description">Perpaduan kopi kuat dan coklat Milo yang nikmat.</p>
                            <div class="options">
                                <h6 class="price">Rp17.000</h6>
                                <h6 class="store-info" data-store="Miloku">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Miloku
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all minuman">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/f1.png') }}" alt="Lychee Tea">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Lychee Tea</h5>
                            <p class="item-description">Rasanya yang lembut, dingin dan menyegarkan.</p>
                            <div class="options">
                                <h6 class="price">Rp8.000</h6>
                                <h6 class="store-info" data-store="Miloku">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Miloku
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all minuman">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/e.jpg') }}" alt="Lemon Tea">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Lemon Tea</h5>
                            <p class="item-description">Es teh lemon dingin menggoda dengan irisan lemon.</p>
                            <div class="options">
                                <h6 class="price">Rp7.000</h6>
                                <h6 class="store-info" data-store="Miloku">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Miloku
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all jajanan">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/kentang.jpeg') }}" alt="Kentang Spiral">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Kentang Spiral</h5>
                            <p class="item-description">Kentang dipotong spiral dan digoreng renyah.</p>
                            <div class="options">
                                <h6 class="price">Rp12.000</h6>
                                <h6 class="store-info" data-store="Ngemil yuk">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Ngemil yuk
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all jajanan">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/Pisang.jpg') }}" alt="Pisang Coklat">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Pisang Coklat</h5>
                            <p class="item-description">Pisang manis dengan lelehan coklat nikmat.</p>
                            <div class="options">
                                <h6 class="price">Rp10.000</h6>
                                <h6 class="store-info" data-store="Ngemil yuk">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Ngemil yuk
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all jajanan">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/curly.jpg') }}" alt="Kentang Spiral Kecil">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Kentang Spiral Kecil</h5>
                            <p class="item-description">Kentang goreng spiral kecil yang renyah.</p>
                            <div class="options">
                                <h6 class="price">Rp10.000</h6>
                                <h6 class="store-info" data-store="Ngemil yuk">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Ngemil yuk
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all jajanan">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/tela.jpg') }}" alt="Tela Tela">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Tela Tela</h5>
                            <p class="item-description">Tela-tela lezat, pas untuk segala suasana.</p>
                            <div class="options">
                                <h6 class="price">Rp10.000</h6>
                                <h6 class="store-info" data-store="Ngemil yuk">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Ngemil yuk
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all jajanan">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/f5.png') }}" alt="Kentang Goreng">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Kentang Goreng</h5>
                            <p class="item-description">Camilan kentang tipis yang digoreng renyah.</p>
                            <div class="options">
                                <h6 class="price">Rp10.000</h6>
                                <h6 class="store-info" data-store="Ngemil yuk">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Ngemil yuk
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all makanan-berat">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/ayam1.jpg') }}" alt="Ayam Geprek">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Ayam Geprek</h5>
                            <p class="item-description">Ayam crispy dengan sambal geprek pedas nikmat.</p>
                            <div class="options">
                                <h6 class="price">Rp14.000</h6>
                                <h6 class="store-info" data-store="Warung Makan">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Warung Makan
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all makanan-berat">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/lele.jpg') }}" alt="Lele Goreng">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Lele Goreng</h5>
                            <p class="item-description">Lele goreng gurih dengan tekstur renyah.</p>
                            <div class="options">
                                <h6 class="price">Rp10.000</h6>
                                <h6 class="store-info" data-store="Warung Makan">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Warung Makan
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all makanan-berat">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/telor.jpg') }}" alt="Telor Balado">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Telor Balado</h5>
                            <p class="item-description">Telur rebus dengan sambal balado pedas menggoda.</p>
                            <div class="options">
                                <h6 class="price">Rp10.000</h6>
                                <h6 class="store-info" data-store="Warung Makan">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Warung Makan
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all makanan-berat">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/ayamgulai.jpg') }}" alt="Ayam Gulai">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Ayam Gulai</h5>
                            <p class="item-description">Ayam dimasak dengan bumbu gulai khas Padang.</p>
                            <div class="options">
                                <h6 class="price">Rp12.000</h6>
                                <h6 class="store-info" data-store="Warung Makan">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Warung Makan
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all makanan-berat">
                    <div class="box animate__fadeInUp">
                        <div class="img-box">
                            <img src="{{ asset('assets/user/images/sayur.jpg') }}" alt="Sayur Daun Singkong">
                        </div>
                        <div class="detail-box">
                            <h5 class="item-name">Sayur Daun Singkong</h5>
                            <p class="item-description">Daun singkong lembut dengan bumbu santan yang gurih.</p>
                            <div class="options">
                                <h6 class="price">Rp12.000</h6>
                                <h6 class="store-info" data-store="Warung Makan">
                                    <i class="fa fa-store" style="color: #ffbe33;"></i> Warung Makan
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        $(window).on('load', function() {
            // Inisialisasi Isotope
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
        });
    </script>
</section>
@endsection