@extends('user.layouts')

@section('title', 'Tentang Kami')


<link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/user/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/user/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/user/css/style.css.map') }}">
<link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('assets/user/js/jquery-3.4.1.min.js') }}">
<link rel="stylesheet" href="{{ asset('assets/user/js/custom.js') }}">
<link rel="stylesheet" href="{{ asset('assets/user/js/bootstrap.js') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

@section('content')
    <!-- Hero Section -->
    <section class="hero_area" style="background: url('{{ asset('assets/user/images/hero-bg.jpg') }}') center/cover no-repeat; padding: 120px 0; color: #fff;">
        <div class="container text-center">
            <h1 class="mb-3" style="font-weight:700;">Tentang Kami</h1>
            <p style="font-size:18px;">Menyajikan hidangan terbaik dengan kualitas dan cita rasa unggulan.</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about_section layout_padding">
        <div class="container">
            <div class="row align-items-center">
                
                <!-- Gambar About -->
                <div class="col-md-6">
                    <img src="{{ asset('assets/user/images/about-img.png') }}" class="img-fluid rounded shadow" alt="Tentang Kami">
                </div>

                <!-- Deskripsi -->
                <div class="col-md-6">
                    <h2 class="mb-3">Siapa Kami?</h2>
                    <p style="font-size: 16px; line-height: 1.7;">
                        Kami adalah UMKM yang berkomitmen untuk menghadirkan berbagai pilihan makanan dan minuman berkualitas tinggi 
                        dengan rasa khas. Kami percaya bahwa kepuasan pelanggan adalah prioritas utama dan selalu memberikan 
                        pelayanan terbaik dalam setiap hidangan yang kami sajikan.
                    </p>

                    <p style="font-size: 16px; line-height: 1.7;">
                        Dengan bahan-bahan pilihan, kebersihan terjamin, serta inovasi menu yang terus berkembang, 
                        kami siap memberikan pengalaman kuliner terbaik untuk setiap pelanggan.
                    </p>

                    <a href="{{ route('menu') }}" class="btn btn-primary mt-3 px-4 py-2">Lihat Menu Kami</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Visi Misi -->
    <section class="layout_padding" style="background: #f8f8f8;">
        <div class="container">
            <h2 class="text-center mb-5">Visi & Misi</h2>

            <div class="row text-center">
                <div class="col-md-6 mb-4">
                    <div class="p-4 shadow rounded bg-white">
                        <h4>Visi</h4>
                        <p>
                            Menjadi UMKM kuliner terbaik yang memberikan rasa autentik,
                            higienis, dan ramah pelanggan di Bengkalis.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="p-4 shadow rounded bg-white">
                        <h4>Misi</h4>
                        <p>
                            • Menggunakan bahan berkualitas tinggi  
                            <br>
                            • Mengutamakan kepuasan pelanggan  
                            <br>
                            • Selalu berinovasi dalam menu  
                            <br>
                            • Menjaga kebersihan dan kualitas pelayanan  
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
