@extends('layouts.app')

@section('title', 'LapakGo - Tentang Kami')
@section('body-class', 'sub_page')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/user/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/user/css/style.css.map') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.scss') }}">

<link rel="stylesheet" href="{{ asset('assets/user/fonts/fontawesome-webfont.ttf') }}">
<link rel="stylesheet" href="{{ asset('assets/user/fonts/fontawesome-webfont.woff') }}">
<link rel="stylesheet" href="{{ asset('assets/user/fonts/fontawesome-webfont.woff2') }}">

<link rel="stylesheet" href="{{ asset('assets/user/js/bootstrap.js') }}">
<link rel="stylesheet" href="{{ asset('assets/user/js/custom.js') }}">
<link rel="stylesheet" href="{{ asset('assets/user/js/jquery-3.4.1.min.js') }}">

<div class="hero_area">
    <div class="bg-box">
        <img src="{{ asset('assets/user/images/hero-bg.jpg') }}" alt="">
    </div>
    
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span>LapakGo</span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('promosi') }}">Promosi</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ route('tentangkami') }}">Tentang Kami <span class="sr-only">(current)</span></a></li>
                    </ul>
                    <div class="user_option">
                        <a href="sign-in" class="user_link"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <a class="cart_link" href="#">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                <g><path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248 c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" /></g>
                                <g><path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48 C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064 c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4 C457.728,97.71,450.56,86.958,439.296,84.91z" /></g>
                                <g><path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296 c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" /></g>
                            </svg>
                        </a>
                        <form class="form-inline">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                        <a href="" class="order_online">Order Online</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>

<!-- About Section -->
<section class="about_section layout_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="img-box">
                    <img src="{{ asset('assets/user/images/tentang.jpg') }}" alt="Tentang LapakGo" class="w-100 shadow-lg rounded">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>Tentang LapakGo</h2>
                    </div>
                    <p class="mt-3 text-secondary">
                        LapakGo adalah UMKM yang berdiri dengan semangat untuk menghadirkan pengalaman kuliner yang tak terlupakan. 
                        Berawal dari passion kami terhadap cita rasa lokal yang autentik, kami berkomitmen untuk menyajikan berbagai 
                        pilihan makanan dan minuman berkualitas tinggi dengan rasa khas yang memanjakan lidah.
                    </p>
                    <p class="text-secondary">
                        Setiap hidangan yang kami sajikan dibuat dengan bahan-bahan pilihan dan diproses dengan standar kebersihan 
                        yang ketat. Kami percaya bahwa kepuasan pelanggan adalah prioritas utama, dan selalu memberikan pelayanan 
                        terbaik dalam setiap hidangan yang kami sajikan. Di LapakGo, kami tidak hanya menjual makanan, tetapi 
                        menciptakan momen berharga bersama keluarga dan sahabat.
                    </p>

                    <a href="{{ route('menu') }}" class="btn text-white rounded-pill px-4 py-2 mt-4 shadow" style="background-color: #f4b342;">
                        Jelajahi Menu Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="about_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center mb-5">
                <h2>Visi & Misi Kami</h2>
                <p>Komitmen kami untuk menghadirkan yang terbaik</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 mb-4">
                    <div class="card text-white p-4 h-100" style="background-color: #2c3e50; border-radius: 10px;">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h3 class="text-center mb-3" style="color: #ffc107; font-weight: bold;">Visi</h3>
                            <p class="text-center">
                                Menjadi platform kuliner digital terpercaya yang menghubungkan UMKM lokal dengan masyarakat,
                                menghadirkan pengalaman kuliner terbaik, dan mendukung pertumbuhan ekonomi kreatif
                                Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-4">
                    <div class="card text-white p-4 h-100" style="background-color: #2c3e50; border-radius: 10px;">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h3 class="text-center mb-3" style="color: #ffc107; font-weight: bold;">Misi</h3>
                            <p class="text-center">
                                Menghubungkan pelanggan dengan lapak-lapak kuliner pilihan, memberdayakan UMKM dengan
                                teknologi digital, dan menciptakan ekosistem kuliner yang berkualitas dan saling
                                menguntungkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Team Section -->
<section class="book_section layout_padding">
    <div class="container">
        <div class="heading_container text-center mb-5">
            <h2>Meet Our Team</h2>
            <p class="text-muted">Tim yang berdedikasi untuk kesuksesan LapakGo</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="profile_card p-4 shadow rounded text-center">
                    <div class="profile_image mb-3">
                        <img src="{{ asset('assets/user/images/tila.jpg') }}" alt="Gustillawati Ningsih" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="profile_info">
                        <h5 class="mb-2">Gustillawati Ningsih</h5>
                        <p class="text-muted mb-2">Co-Founder & Operations Manager</p>
                        <small class="text-secondary">Bertanggung jawab atas operasional dan standar kualitas</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="profile_card p-4 shadow rounded text-center">
                    <div class="profile_image mb-3">
                        <img src="{{ asset('assets/user/images/afin.jpg') }}" alt="Afin al-rakhi" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="profile_info">
                        <h5 class="mb-2">Afin al-rakhi</h5>
                        <p class="text-muted mb-2">Co-Founder & Marketing Director</p>
                        <small class="text-secondary">Memimpin strategi pemasaran dan pengembangan brand</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="profile_card p-4 shadow rounded text-center">
                    <div class="profile_image mb-3">
                        <img src="{{ asset('assets/user/images/aidil1.jpg') }}" alt="Muhammad Aidil Fitriansyah" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="profile_info">
                        <h5 class="mb-2">Muhammad Aidil Fitriansyah</h5>
                        <p class="text-muted mb-2">Co-Founder & Head Chef</p>
                        <small class="text-secondary">Menciptakan menu inovatif dengan cita rasa autentik</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<footer class="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <div class="footer_contact">
                    <h4>Contact Us</h4>
                    <div class="contact_link_box">
                        <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Location</span></a>
                        <a href=""><i class="fa fa-phone" aria-hidden="true"></i> <span>Call +01 1234567890</span></a>
                        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i> <span>demo@gmail.com</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <div class="footer_detail">
                    <a href="" class="footer-logo">LapakGo</a>
                    <p>Nikmati pengalaman kuliner terbaik bersama kami. Kami hadir untuk memanjakan lidah Anda setiap hari.</p>
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
                <h4>Opening Hours</h4>
                <p>Everyday</p>
                <p>10.00 Am -10.00 Pm</p>
            </div>
        </div>
        <div class="footer-info">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By LapakGo<br><br>
                &copy; <span id="displayYear"></span> Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
            </p>
        </div>
    </div>
</footer>

@endsection