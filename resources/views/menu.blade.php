@extends('layouts.app')

@section('title', 'LapakGo - Menu')
@section('body-class', 'sub_page')

@section('content')
<div class="hero_area">
    <div class="bg-box">
      <img src="{{ asset('assets user/images/hero-bg.jpg') }}" alt="">
    </div>

    <!-- header section starts -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span>LapakGo</span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('menu') }}">Menu <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('promosi') }}">promosi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('book') }}">Book Table</a>
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

        <!-- Filter Buttons -->
        <ul class="filters_menu">
            <li class="active" data-filter="*">Semua</li>
            <li data-filter=".minuman">Minuman</li>
            <li data-filter=".jajanan">Jajanan</li>
            <li data-filter=".makanan-berat">Makanan Berat</li>
        </ul>

        <!-- Menu Items -->
        <div class="filters-content">
            <div class="row grid">

                <!-- Minuman -->
               <div class="col-sm-6 col-lg-4 all minuman">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets_user/images/f2.png') }}" alt="Milk Tea">
                        </div>
                        <div class="detail-box">
                            <h5>Air Milo</h5>
                            <p>Minuman coklat berenergi yang menyengarkan.</p>
                            <div class="options">
                                <h6>Rp10.000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all minuman">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets_user/images/f2.png') }}" alt="Milk Tea">
                        </div>
                        <div class="detail-box">
                            <h5>Milk Tea Mutiara Cincau</h5>
                            <p>Milk tea creamy dengan perpaduan mutiara dan cincau yang menyegarkan.</p>
                            <div class="options">
                                <h6>Rp15.000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all minuman">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets_user/images/f3.png') }}" alt="Kopi Milo">
                        </div>
                        <div class="detail-box">
                            <h5>Kopi Milo</h5>
                            <p>Perpaduan kopi kuat dan coklat Milo yang nikmat</p>
                            <div class="options">
                                <h6>Rp17.000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jajanan -->
                <div class="col-sm-6 col-lg-4 all jajanan">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets_user/images/f4.png') }}" alt="Kentang Spiral">
                        </div>
                        <div class="detail-box">
                            <h5>Kentang Spiral</h5>
                            <p>Cemilan crispy yang gurih dan nagih</p>
                            <div class="options">
                                <h6>Rp12.000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all jajanan">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets_user/images/f5.png') }}" alt="Tela Tela">
                        </div>
                        <div class="detail-box">
                            <h5>Tela Tela</h5>
                            <p>Tela-tela lezat, pas untuk segala suasana</p>
                            <div class="options">
                                <h6>Rp14.000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all jajanan">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets_user/images/f6.png') }}" alt="Pisang Coklat">
                        </div>
                        <div class="detail-box">
                            <h5>Pisang Coklat</h5>
                            <p>Pisang manis dengan lelehan coklat nikmat</p>
                            <div class="options">
                                <h6>Rp10.000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Makanan Berat -->
                <div class="col-sm-6 col-lg-4 all makanan-berat">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets_user/images/f8.png') }}" alt="Ayam Geprek">
                        </div>
                        <div class="detail-box">
                            <h5>Ayam Geprek</h5>
                            <p>Ayam crispy dengan sambal geprek pedas nikmat.</p>
                            <div class="options">
                                <h6>Rp14.000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all makanan-berat">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets_user/images/f5.png') }}" alt="Lele Goreng">
                        </div>
                        <div class="detail-box">
                            <h5>Lele Goreng</h5>
                            <p>Lele goreng gurih dengan tekstur renyah khas Bengkalis.</p>
                            <div class="options">
                                <h6>Rp10.000</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 all makanan-berat">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets_user/images/f9.png') }}" alt="Sayur Daun Singkong">
                        </div>
                        <div class="detail-box">
                            <h5>Sayur Daun Singkong</h5>
                            <p>Daun singkong lembut dengan bumbu santan yang gurih.</p>
                            <div class="options">
                                <h6>Rp12.000</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="btn-box">
            <a href="#">View More</a>
        </div>
    </div>
</section>

<!-- Include jQuery and Isotope JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script>
    $(document).ready(function () {
        var $grid = $('.filters-content .grid').isotope({
            itemSelector: '.all',
            layoutMode: 'fitRows'
        });

        $('.filters_menu li').click(function () {
            $('.filters_menu li').removeClass('active');
            $(this).addClass('active');

            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });
    });
</script>
@endsection