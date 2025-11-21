@extends('layouts.app')
@section('title', 'Search Results - LapakGo')
@section('content')

<div class="hero_area">
    <!-- header section -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span>LapakGo</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('book') }}">Book Table</a>
                        </li>
                    </ul>
                    <div class="user_option">
                        <a href="" class="user_link">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                        <a class="cart_link" href="#">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                        <form action="{{ route('search') }}" method="GET" class="form-inline ml-2">
                            <input type="text" name="query" placeholder="Search..." value="{{ $query }}" 
                                class="form-control mr-2" required>
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
</div>

<!-- search results section -->
<section class="food_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center mb_45">
            <h2>Hasil Pencarian untuk "<span>{{ $query }}</span>"</h2>
            <p class="text-muted">Ditemukan {{ count($results) }} hasil</p>
        </div>

        @if(count($results) > 0)
            <div class="filters-content">
                <div class="row grid">
                    @foreach($results as $product)
                        <div class="col-sm-6 col-lg-4 mb-4">
                            <div class="box">
                                <div class="img-box">
                                    @if(isset($product->foto) && $product->foto)
                                        <img src="{{ asset('storage/' . $product->foto) }}" 
                                            alt="{{ $product->nama_produk }}" style="height: 250px; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('assets user/images/placeholder.png') }}" 
                                            alt="No image" style="height: 250px; object-fit: cover;">
                                    @endif
                                </div>
                                <div class="detail-box">
                                    <h5>{{ $product->nama_produk ?? 'N/A' }}</h5>
                                    <p>{{ isset($product->deskripsi) ? \Illuminate\Support\Str::limit($product->deskripsi, 100) : 'No description' }}</p>
                                    <div class="options">
                                        @if(isset($product->harga))
                                            <h6>Rp {{ number_format($product->harga, 0, ',', '.') }}</h6>
                                        @else
                                            <h6>Harga tidak tersedia</h6>
                                        @endif
                                        <a href="#" class="add-to-cart" style="background-color: #ff7a1a; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none; display: inline-block;">
                                            <i class="fa fa-shopping-cart"></i> Detail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="alert alert-info text-center" role="alert" style="padding: 40px;">
                <h5>Produk tidak ditemukan</h5>
                <p>Maaf, kami tidak menemukan produk yang sesuai dengan pencarian "<strong>{{ $query }}</strong>"</p>
                <a href="{{ route('home') }}" class="btn btn-primary mt-3">Kembali ke Beranda</a>
            </div>
        @endif
    </div>
</section>
<!-- end search results section -->

@endsection