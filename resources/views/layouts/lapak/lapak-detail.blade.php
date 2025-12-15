@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
        min-height: 100vh;
        padding: 20px;
        color: #e2e8f0;
    }
    .container { 
        max-width: 1000px; 
        margin: 0 auto; 
        padding-bottom: 50px; 
    }
    
    .back-button {
        display: inline-flex; 
        align-items: center; 
        gap: 10px;
        background: rgba(45, 55, 72, 0.9); 
        color: #fbbf24; 
        padding: 10px 20px; 
        border-radius: 50px;
        font-weight: 600; 
        text-decoration: none; 
        margin-bottom: 25px;
        transition: all 0.3s ease; 
        box-shadow: 0 4px 6px rgba(0,0,0,0.2);
        border: 1px solid #fbbf24;
    }
    .back-button:hover { 
        transform: translateX(-5px); 
        background: #fbbf24; 
        color: #1a202c;
    }
    
    .hero-section {
        background: #2d3748; 
        border-radius: 20px; 
        padding: 40px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3); 
        margin-bottom: 30px;
        position: relative; 
        overflow: hidden; 
        display: flex; 
        align-items: center; 
        gap: 30px;
        border: 1px solid #4a5568;
    }
    
    .business-logo {
        width: 100px; 
        height: 100px; 
        border-radius: 50%;
        background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        color: #1a202c; 
        font-size: 40px; 
        display: flex; 
        align-items: center;
        justify-content: center; 
        font-weight: bold; 
        flex-shrink: 0;
        box-shadow: 0 5px 15px rgba(251, 191, 36, 0.4);
    }
    
    .business-info h1 { 
        margin: 0; 
        font-size: 2.5rem; 
        font-weight: 800; 
        color: #fbbf24; 
    }
    
    .owner-tag {
        display: inline-block; 
        background: #1a202c; 
        color: #fbbf24;
        padding: 5px 15px; 
        border-radius: 15px; 
        font-size: 0.9rem; 
        margin-top: 10px;
        border: 1px solid #fbbf24;
    }
    
    .info-grid {
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
        gap: 20px;
        margin-bottom: 40px;
    }
    
    .info-card {
        background: #2d3748; 
        border-radius: 15px; 
        padding: 25px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2); 
        transition: transform 0.3s;
        border: 1px solid #4a5568;
    }
    
    .info-card:hover { 
        transform: translateY(-5px); 
        border-color: #fbbf24;
    }
    
    .card-header { 
        display: flex; 
        align-items: center; 
        gap: 15px; 
        margin-bottom: 15px; 
    }
    
    .icon-box {
        width: 45px; 
        height: 45px; 
        border-radius: 12px;
        background: #1a202c; 
        color: #fbbf24;
        display: flex; 
        align-items: center; 
        justify-content: center; 
        font-size: 1.2rem;
        border: 1px solid #fbbf24;
    }
    
    .card-title { 
        font-size: 1.1rem; 
        font-weight: 700; 
        margin: 0; 
        color: #fbbf24; 
    }
    
    .menu-section-title {
        color: #fbbf24; 
        margin-bottom: 20px; 
        font-weight: 800; 
        text-shadow: 0 2px 4px rgba(0,0,0,0.3); 
        border-left: 5px solid #fbbf24;
        padding-left: 15px; 
        display: flex; 
        align-items: center; 
        gap: 10px;
    }
    
    .menu-grid {
        display: grid; 
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); 
        gap: 20px;
    }
    
    .menu-card {
        background: #2d3748; 
        border-radius: 15px; 
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2); 
        transition: 0.3s;
        display: flex; 
        flex-direction: column;
        border: 1px solid #4a5568;
    }
    
    .menu-card:hover { 
        transform: translateY(-5px); 
        box-shadow: 0 15px 30px rgba(251, 191, 36, 0.3); 
        border-color: #fbbf24;
    }
    
    .menu-img {
        height: 150px; 
        width: 100%; 
        object-fit: cover; 
        background: #1a202c;
    }
    
    .menu-body { 
        padding: 15px; 
        flex-grow: 1; 
        display: flex; 
        flex-direction: column; 
    }
    
    .menu-name { 
        font-weight: 700; 
        font-size: 1.1rem; 
        margin-bottom: 5px; 
        color: #fbbf24; 
    }
    
    .menu-desc { 
        font-size: 0.85rem; 
        color: #cbd5e0; 
        margin-bottom: 15px; 
        line-height: 1.4; 
    }
    
    .menu-price {
        margin-top: auto; 
        font-weight: 800; 
        color: #fbbf24; 
        font-size: 1.1rem;
        display: flex; 
        justify-content: space-between; 
        align-items: center;
    }
    
    .btn-add-cart {
        width: 30px; 
        height: 30px; 
        border-radius: 50%; 
        background: #1a202c;
        color: #fbbf24; 
        border: 1px solid #fbbf24; 
        display: flex; 
        align-items: center; 
        justify-content: center;
        cursor: pointer; 
        transition: 0.2s;
    }
    
    .btn-add-cart:hover { 
        background: #fbbf24; 
        color: #1a202c; 
    }

    .whatsapp-section { 
        margin-top: 40px; 
        text-align: center; 
        margin-bottom: 50px; 
    }
    
    .btn-wa {
        background: #25D366; 
        color: white; 
        padding: 15px 40px; 
        border-radius: 50px;
        font-size: 18px; 
        font-weight: bold; 
        text-decoration: none;
        display: inline-flex; 
        align-items: center; 
        gap: 10px;
        box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4); 
        transition: 0.3s;
        border: 2px solid #25D366;
    }
    
    .btn-wa:hover { 
        transform: scale(1.05); 
        background: #1a202c; 
        color: #25D366; 
        box-shadow: 0 6px 20px rgba(37, 211, 102, 0.6); 
    }
    
    .wa-note { 
        display: block; 
        margin-top: 10px; 
        color: #cbd5e0; 
        font-size: 0.9rem;
    }

    @media (max-width: 768px) {
        .hero-section { 
            flex-direction: column; 
            text-align: center; 
        }
        .menu-grid { 
            grid-template-columns: repeat(2, 1fr); 
        }
    }
    
    @media (max-width: 480px) {
        .menu-grid { 
            grid-template-columns: 1fr; 
        }
    }
</style>

@php
    $currentId = $lapak['id'] ?? 1; 
    
    // LAPAK 1: MILOKU
    if($currentId == 1) {
        $detailLapak = [
            'nama' => 'Miloku',
            'owner' => 'Merianti',
            'deskripsi' => 'Haus? Yuk mampir ke Miloku! Kami menjual aneka minuman favorit yang siap menghilangkan dahagamu. Harga terjangkau, rasa juara, bikin harimu makin semangat!.',
            'alamat' => 'JL.Ahmad Yani.',
            'whatsapp' => '6283840125391',
            'menus' => [
                ['nama' => 'Milo malaysia', 'harga' => 10000, 'desc' => 'Minuman coklat berenergi yang menyegarkan.', 'img' => 'milo.png'],
                ['nama' => 'Milk Tea Mutiara Cincau', 'harga' => 15000, 'desc' => 'Milk tea creamy dengan perpaduan mutiara dan cincau.', 'img' => 'cincau.jpg'],
                ['nama' => 'Lychee Tea', 'harga' => 8000, 'desc' => 'Rasanya yang lembut, dingin dan menyegarkan.', 'img' => 'f1.png'],
                ['nama' => 'Kopi Milo', 'harga' => 17000, 'desc' => 'Perpaduan kopi kuat dan coklat Milo yang nikmat.', 'img' => 'kopi2.jpg'],
                ['nama' => 'Lemon Tea', 'harga' => 7000, 'desc' => 'Es teh lemon dingin menggoda dengan irisan lemon.', 'img' => 'e.jpg'],
            ]
        ];
    } 
    // LAPAK 2: NGEMIL YUK
    elseif ($currentId == 2) {
        $detailLapak = [
            'nama' => 'Ngemil yuk',
            'owner' => 'Tiara',
            'deskripsi' => 'ngemil yuk hadir sebagai solusi cemilan favoritmu! Menjual beragam snack pilihan mulai dari keripik, kacang, cokelat, permen, hingga camilan kekinian. Harga terjangkau, rasa mantap, bikin ngemilmu makin seru!!',
            'alamat' => 'Jl.Ahmad Yani.',
            'whatsapp' => '6281276997358',
            'menus' => [
                ['nama' => 'Kentang Spiral', 'harga' => 12000, 'desc' => 'Kentang dipotong spiral dan digoreng renyah.', 'img' => 'kentang.jpeg'],
                ['nama' => 'Pisang Coklat', 'harga' => 10000, 'desc' => 'Pisang manis dengan lelehan coklat nikmat.', 'img' => 'Pisang.jpg'],
                ['nama' => 'Kentang Spiral Kecil', 'harga' => 10000, 'desc' => 'Kentang goreng spiral kecil yang renyah.', 'img' => 'curly.jpg'],
                ['nama' => 'Tela-tela', 'harga' => 10000, 'desc' => 'Tela-tela lezat, pas untuk segala suasana.', 'img' => 'tela.jpg'],
                ['nama' => 'Kentang goreng', 'harga' => 10000, 'desc' => 'amilan kentang tipis yang digoreng renyah.', 'img' => 'f5.png'],
            ]
        ];
    } 
    // LAPAK 3: WARUNG MANGAN LIMO PUTRI
    else {
        $detailLapak = [
            'nama' => 'Warung mangan limo putri',
            'owner' => 'Putri',
            'deskripsi' => 'Lapar dan butuh lauk enak? Warung mangan siap melayani! Aneka lauk pauk dengan bumbu meresap dan rasa juara. Dari yang gurih, pedas, sampai manis - semuanya ada untuk melengkapi nasi putihmu.',
            'alamat' => 'Jl.Sungai alam.',
            'whatsapp' => '6282268950436',
            'menus' => [
                ['nama' => 'Ayam Geprek', 'harga' => 14000, 'desc' => 'Ayam crispy dengan sambal geprek pedas nikmat..', 'img' => 'ayam1.jpg'],
                ['nama' => 'Lele Goreng', 'harga' => 10000, 'desc' => 'Lele goreng gurih dengan tekstur renyah.', 'img' => 'lele.jpg'],
                ['nama' => 'Telor Balado', 'harga' => 10000, 'desc' => 'Telur rebus dengan sambal balado pedas menggoda.', 'img' => 'telor.jpg'],
                ['nama' => 'Ayam Gulai', 'harga' => 12000,'desc' => 'Ayam dimasak dengan bumbu gulai khas Padang.', 'img' => 'ayamgulai.jpg'],
                ['nama' => 'Sayur Daun Singkong', 'harga' => 12000,'desc' => 'Daun singkong lembut dengan bumbu santan yang gurih.', 'img' => 'sayur.jpg'],
            ]
        ];
    }
@endphp

<div class="container">
    <a href="{{ url()->previous() }}" class="back-button">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>

    {{-- HEADER TOKO --}}
    <div class="hero-section">
        <div class="business-logo">
            {{ substr($detailLapak['nama'], 0, 1) }}
        </div>
        <div class="business-info">
            <h1>{{ $detailLapak['nama'] }}</h1>
            <div class="owner-tag">
                <i class="fas fa-user-circle"></i> {{ $detailLapak['owner'] }}
            </div>
        </div>
    </div>

    <div class="info-grid">
        <div class="info-card">
            <div class="card-header">
                <div class="icon-box"><i class="fas fa-store"></i></div>
                <h3 class="card-title">Deskripsi Usaha</h3>
            </div>
            <p style="line-height: 1.6; color: #cbd5e0;">{{ $detailLapak['deskripsi'] }}</p>
        </div>

        <div class="info-card">
            <div class="card-header">
                <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
                <h3 class="card-title">Lokasi</h3>
            </div>
            <p style="color: #cbd5e0;">{{ $detailLapak['alamat'] }}</p>
        </div>
    </div>

    <h2 class="menu-section-title">
        <i class="fas fa-utensils"></i> Daftar Menu
    </h2>

    <div class="menu-grid">
        @foreach($detailLapak['menus'] as $menu)
            <div class="menu-card">
                <img src="{{ asset('assets/user/images/' . $menu['img']) }}" 
                     alt="{{ $menu['nama'] }}" 
                     class="menu-img">
                
                <div class="menu-body">
                    <div class="menu-name">{{ $menu['nama'] }}</div>
                    <div class="menu-desc">{{ $menu['desc'] }}</div>
                    <div class="menu-price">
                        Rp {{ number_format($menu['harga'], 0, ',', '.') }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- TOMBOL WHATSAPP --}}
    <div class="whatsapp-section">
        @php
            $pesan = "Halo " . $detailLapak['nama'] . ", saya mau pesan menu anda.";
            $linkWa = "https://wa.me/" . $detailLapak['whatsapp'] . "?text=" . urlencode($pesan);
        @endphp

        <a href="{{ $linkWa }}" target="_blank" class="btn-wa">
            <i class="fab fa-whatsapp" style="font-size: 24px;"></i> Pesan Sekarang via WhatsApp
        </a>
        <span class="wa-note">Langsung terhubung ke nomor: +{{ $detailLapak['whatsapp'] }}</span>
    </div>
</div>
@endsection