@extends('layouts.app')

@section('title', 'LapakGo - Menu')
@section('body-class', 'sub_page')

@section('content')
    <div class="hero_area">
        <div class="bg-box">
            <img src="{{ asset('assets user/images//hero-bg.jpg') }}" alt="">
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
                                <img src="{{ asset('assets user/images/es.jpeg') }}" alt="Air Milo" width="500"
                                    height="300">
                            </div>
                            <div class="detail-box">
                                <h5>Air Milo</h5>
                                <p>Minuman coklat berenergi yang menyengarkan.</p>
                                <div class="options">
                                    <h6 class="price">Rp10.000</h6>
                                    <h6 class="store-info">
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
                                <img src="{{ asset('assets user/images/cincau.jpg') }}" alt="Milk Tea" width="500"
                                    height="300">
                            </div>
                            <div class="detail-box">
                                <h5>Milk Tea Mutiara Cincau</h5>
                                <p>Milk tea creamy dengan perpaduan mutiara dan cincau yang menyegarkan.</p>
                                <div class="options">
                                    <h6>Rp15.000</h6>
                                    <h6 class="store-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Miloku
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all minuman">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/kopi2.jpg') }}" alt="Kopi Milo">
                            </div>
                            <div class="detail-box">
                                <h5>Kopi Milo</h5>
                                <p>Perpaduan kopi kuat dan coklat Milo yang nikmat</p>
                                <div class="options">
                                    <h6>Rp17.000</h6>
                                    <h6 class="store-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Miloku
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    <div class="col-sm-6 col-lg-4 all minuman">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/f1.png') }}" alt="Lychee Tea">
                            </div>
                            <div class="detail-box">
                                <h5>Lychee Tea</h5>
                                <p>Rasanya yang lembut,dingin dan menyengarkan</p>
                                <div class="options">
                                    <h6>Rp8.000</h6>
                                     <h6 class="store-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Miloku
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 all minuman">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/e.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>Lemon Tea</h5>
                                <p>Es teh lemon dingin menggoda, penuh es batu bening dan irisan lemon segar</p>
                                <div class="options">
                                    <h6>Rp7.000</h6>
                                    <h6 class="store-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                                            <path
                                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                        </svg>
                                        Miloku
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Jajanan -->
                    <div class="col-sm-6 col-lg-4 all jajanan">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/kentang.jpeg') }}" alt="Kentang Spiral">
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
                                <img src="{{ asset('assets user/images/Pisang.jpg') }}" alt="Pisang Coklat">
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

                    <div class="col-sm-6 col-lg-4 all jajanan">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/Pisang.jpg') }}" alt="Pisang Coklat">
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



                    <div class="col-sm-6 col-lg-4 all jajanan">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('assets user/images/tela.jpg') }}" alt="Tela Tela">
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
                                <img src="{{ asset('assets user/images/ayam1.jpg') }}" alt="Ayam Geprek">
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
                                <img src="{{ asset('assets user/images/lele.jpg') }}" alt="Lele Goreng">
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
                                <img src="{{ asset('assets user/images/telor.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>Telor balado</h5>
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
                                <img src="{{ asset('assets user/images/ayamgulai.jpg') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>Ayam gulai</h5>
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
                                <img src="{{ asset('assets user/images/sayur.jpg') }}" alt="Sayur Daun Singkong">
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






            <!-- Include jQuery and Isotope JS -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
            <script>
                $(document).ready(function() {
                    var $grid = $('.filters-content .grid').isotope({
                        itemSelector: '.all',
                        layoutMode: 'fitRows'
                    });

                    $('.filters_menu li').click(function() {
                        $('.filters_menu li').removeClass('active');
                        $(this).addClass('active');

                        var filterValue = $(this).attr('data-filter');
                        $grid.isotope({
                            filter: filterValue
                        });
                    });
                });
            </script>
        @endsection
