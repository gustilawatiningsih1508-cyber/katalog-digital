@extends('layouts.app')

@section('title', 'Promo UMKM Bengkalis')

@section('content')

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

    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span>LapakGo</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Menu</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ route('promosi') }}">Promosi</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('tentangkami') }}">Tentang Kami</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div style="position:absolute; top:45%; left:50%; transform:translate(-50%, -50%); text-align:center; color:white;">
        <h1 style="font-size:55px; font-weight:700;">Promo UMKM Bengkalis</h1>
        <p style="font-size:20px;">Promo spesial minuman, jajanan, dan makanan berat</p>
        <a href="#promo" class="btn-scroll">Lihat Promo</a>
    </div>
</div>

<!-- PROMOTION LIST -->
<section id="promo" class="food_section layout_padding py-5">
    <div class="container">

        <!-- =============== PROMO MINUMAN =================-->
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
                        <img src="{{ asset('assets_user/images/milo.jpg') }}">
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
                        <img src="{{ asset('assets_user/images/lychee.jpg') }}">
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
                        <img src="{{ asset('assets_user/images/milktea.jpg') }}">
                    </div>
                    <div class="detail-box">
                        <h5>Milk Tea Boba</h5>
                        <p>Paket 3 cup hanya 25K (hemat 7K)!</p>
                        <h6>Rp 25.000 / 3 cup</h6>
                    </div>
                </div>
            </div>

        </div>

        <!-- =============== PROMO JAJANAN =================-->
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
                        <img src="{{ asset('assets_user/images/kentang.jpg') }}">
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
                        <img src="{{ asset('assets_user/images/rotibakar.jpg') }}">
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
                        <img src="{{ asset('assets_user/images/pisang.jpg') }}">
                    </div>
                    <div class="detail-box">
                        <h5>Pisang Goreng Lumer</h5>
                        <p>Pisang manis dengan coklat lumer yang nikmat.</p>
                        <h6>Rp 6.000 <span class="old">Rp 8.000</span></h6>
                    </div>
                </div>
            </div>

        </div>

        <!-- =============== PROMO MAKANAN BERAT =================-->
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
                        <img src="{{ asset('assets_user/images/nasigoreng.jpg') }}">
                    </div>
                    <div class="detail-box">
                        <h5>ayam geprek</h5>
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
                        <img src="{{ asset('assets_user/images/ayamgeprek.jpg') }}">
                    </div>
                    <div class="detail-box">
                        <h5> Ayam Geprek</h5>
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
                        <img src="{{ asset('assets_user/images/mieayam.jpg') }}">
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

<style>
.box {transition:.3s; border-radius:8px; overflow:hidden; background:white;}
.box:hover {transform:translateY(-8px); box-shadow:0 12px 20px rgba(0,0,0,0.15);}
.badge-promo {position:absolute; top:10px; left:10px; background:#ffbe33; padding:6px 12px; border-radius:6px; font-weight:700;}
.old {text-decoration:line-through; color:#777;}
.img-box img {width:100%; height:240px; object-fit:cover;}
</style>

@endsection

<style>
/* Container Gradasi Background */
.food_section {
    background: linear-gradient(180deg, #ffffff, #f9f9f9, #f5f5f5);
}

/* Smooth fade-in animation */
@keyframes fadeInUp {
    0% {opacity: 0; transform: translateY(20px);}
    100% {opacity: 1; transform: translateY(0);}
}

.box {
    animation: fadeInUp .7s ease forwards;
}

/* Kartu Promo */
.box {
    transition: 0.35s ease;
    border-radius: 14px;
    overflow: hidden;
    background: #ffffff;
    padding-bottom: 10px;
    border: 1.5px solid rgba(0,0,0,0.05);
}

.box:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 18px 35px rgba(0,0,0,0.15);
}

/* IMG BEAUTIFY */
.img-box img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: .35s ease;
    filter: brightness(0.93);
}

.box:hover img {
    transform: scale(1.07);
    filter: brightness(1);
}

/* PROMO BADGE */
.badge-promo {
    position: absolute;
    top: 12px;
    left: 12px;
    padding: 7px 14px;
    background: linear-gradient(135deg, #ffbe33, #ff9f1c);
    color: #3b2f2f;
    font-weight: 700;
    border-radius: 6px;
    font-size: 0.95rem;
    box-shadow: 0 4px 10px rgba(255, 190, 51, 0.6);
    transition: .3s ease;
}

.box:hover .badge-promo {
    transform: scale(1.08);
    box-shadow: 0 6px 14px rgba(255, 190, 51, 0.9);
}

/* JUDUL KATEGORI DENGAN GARIS GRADIENT */
.heading_container h2 {
    font-weight: 700;
    font-size: 32px;
    position: relative;
    display: inline-block;
}

.heading_container h2:after {
    content: "";
    height: 4px;
    width: 60%;
    background: linear-gradient(90deg, #ffbe33, #ff8d1a);
    display: block;
    margin: 10px auto 0;
    border-radius: 10px;
}

/* Old Price */
.old {
    text-decoration: line-through;
    color: #888;
}

/* Smooth Section Divider */
.favorite_menu_section,
.food_section {
    position: relative;
}

.food_section:before {
    content: "";
    position: absolute;
    top: -40px;
    left: 0;
    width: 100%;
    height: 60px;
    background: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,0.05));
    pointer-events: none;
}
</style>



