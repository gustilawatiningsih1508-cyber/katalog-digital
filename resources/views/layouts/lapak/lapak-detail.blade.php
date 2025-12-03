@extends('layouts.app')

@section('content')
<style>
    .lapak-container {
        max-width: 850px;
        margin: 20px auto;
        background: #ffffff;
        padding: 25px 35px;
        border-radius: 18px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }

    .lapak-header {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .lapak-photo {
        width: 85px;
        height: 85px;
        border-radius: 50%;
        background: #eee;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 14px;
        color: #555;
        border: 2px solid #ff4500;
    }

    .lapak-title {
        font-size: 28px;
        font-weight: 700;
        color: #2e2e2e;
    }

    .info-box {
        margin-bottom: 20px;
    }

    .info-title {
        font-weight: 700;
        font-size: 18px;
        color: #333;
        margin-bottom: 5px;
    }

    .info-text {
        color: #555;
        font-size: 16px;
    }

    .wa-btn {
        display: inline-block;
        background: #25D366;
        color: white;
        padding: 10px 18px;
        border-radius: 8px;
        font-size: 16px;
        text-decoration: none;
        font-weight: 600;
        margin-top: 8px;
    }

    .menu-title {
        font-size: 22px;
        font-weight: 700;
        color: #d64025;
        margin-top: 30px;
        margin-bottom: 10px;
    }

    .menu-card {
        display: flex;
        justify-content: space-between;
        background: #f8f8f8;
        padding: 14px 18px;
        margin-bottom: 10px;
        border-radius: 10px;
        font-size: 16px;
        color: #333;
    }

    .menu-card:hover {
        background: #ffe8e2;
        transition: 0.2s;
    }

</style>

<div class="lapak-container">

    {{-- HEADER --}}
    <div class="lapak-header">
        <div class="lapak-photo">Foto</div>
        <div class="lapak-title">Miloku</div>
    </div>

    {{-- DESKRIPSI --}}
    <div class="info-box">
        <div class="info-title"> Deskripsi Usaha</div>
        <div class="info-text">Miloku adalah usaha minuman kekinian dengan rasa Milo premium.</div>
    </div>

    {{-- PELAKU USAHA --}}
    <div class="info-box">
        <div class="info-title"> Pelaku Usaha</div>
        <div class="info-text">Merianti</div>
    </div>

    {{-- WHATSAPP --}}
    <div class="info-box">
        <div class="info-title"> Kontak WhatsApp</div>
        <a href="https://wa.me/6281234567890" class="wa-btn">Chat via WhatsApp</a>
    </div>

    {{-- ALAMAT --}}
    <div class="info-box">
        <div class="info-title"> Alamat</div>
        <div class="info-text">Jl. Ahmad Yani No. 45, Bengkalis</div>
    </div>

    {{-- DAFTAR MENU --}}
<div class="menu-title"> Daftar Menu</div>

<button 
    onclick="toggleMenu()" 
    class="px-4 py-2 rounded-lg mb-3"
    style="
        cursor:pointer;
        background:#b6f2b6; 
        color:#222; 
        font-weight:600;
        border:1px solid #7ad67a;
    ">
     Lihat Menu
</button>


<div id="menuList" style="display:none;">
    @foreach ($menu as $item)
        <div class="menu-card" style="display: flex; justify-content: space-between; padding: 10px; border: 1px solid #ddd; border-radius: 6px; margin-bottom: 8px;">
            <span>{{ $item['nama'] }}</span>
            <span>Rp{{ number_format($item['harga'], 0, ',', '.') }}</span>
        </div>
    @endforeach
</div>

<script>
function toggleMenu() {
    const menu = document.getElementById('menuList');
    menu.style.display = (menu.style.display === "none") ? "block" : "none";
}
</script>
