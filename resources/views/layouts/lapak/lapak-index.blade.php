@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
        min-height: 100vh;
    }
    .page-title {
        color: #fbbf24; 
        font-weight: 800; 
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        margin-bottom: 40px; 
        text-align: center;
    }
    .lapak-card {
        border: none; 
        border-radius: 15px; 
        overflow: hidden;
        background: #2d3748; 
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3); 
        height: 100%;
        display: flex; 
        flex-direction: column;
    }
    .lapak-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(251, 191, 36, 0.3);
        border: 1px solid #fbbf24;
    }
    .card-img-wrapper {
        height: 180px; 
        overflow: hidden; 
        position: relative;
    }
    .card-img-wrapper img {
        width: 100%; 
        height: 100%; 
        object-fit: cover; 
        transition: 0.5s;
    }
    .lapak-card:hover .card-img-wrapper img { 
        transform: scale(1.1); 
    }
    
    .card-body { 
        flex-grow: 1; 
        display: flex; 
        flex-direction: column; 
        padding: 20px; 
    }
    .card-title { 
        font-weight: 700; 
        color: #fbbf24; 
        margin-bottom: 10px; 
    }
    .btn-detail {
        margin-top: auto; 
        background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        border: none; 
        border-radius: 50px; 
        color: #1a202c; 
        font-weight: 600;
        padding: 10px; 
        width: 100%; 
        transition: 0.2s;
    }
    .btn-detail:hover { 
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        transform: scale(1.02); 
        color: white;
    }
    .btn-add {
        background: #fbbf24; 
        color: #1a202c; 
        font-weight: bold; 
        border-radius: 50px;
        padding: 10px 25px; 
        text-decoration: none; 
        display: inline-block; 
        margin-bottom: 20px;
        box-shadow: 0 4px 10px rgba(251, 191, 36, 0.3);
        transition: 0.3s;
    }
    .btn-add:hover {
        background: #f59e0b;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(251, 191, 36, 0.5);
    }
</style>

<div class="container mt-5">
    <div class="text-center">
        <h2 class="page-title">Daftar UMKM & Lapak</h2>
        <a href="{{ route('lapak.create') }}" class="btn-add">
            <i class="fas fa-plus"></i> Tambah Lapak
        </a>
    </div>

    <div class="row">
        @php
            // DEFINISI 3 LAPAK DENGAN ID BERBEDA
            if(!isset($lapakList) && !isset($lapak)){
                 $lapakList = [
                    ['id' => 1, 'nama' => 'Miloku', 'foto' => 'milo.webp'],
                    ['id' => 2, 'nama' => 'Ayam Geprek Pak Dwi', 'foto' => 'geprek.jpg'],
                    ['id' => 3, 'nama' => 'Es Teh Jumbo', 'foto' => 'esteh.jpg'],
                ];
            } else {
                $lapakList = isset($lapak) ? $lapak : $lapakList;
            }
        @endphp

        @foreach ($lapakList as $l)
            <div class="col-md-4 col-sm-6 mb-4">
                {{-- Link ini akan mengirim ID (1, 2, atau 3) ke halaman detail --}}
                <a href="{{ route('lapak.detail', $l['id']) }}" style="text-decoration: none;">
                    <div class="lapak-card">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('assets/lapak/' . ($l['foto'] ?? 'default.jpg')) }}" 
                                 onerror="this.src='https://source.unsplash.com/400x200/?food,store'"
                                 alt="{{ $l['nama'] }}">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">{{ $l['nama'] }}</h4>
                            <button class="btn btn-detail">Lihat Detail</button>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection