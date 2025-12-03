<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            
            <a class="navbar-brand" href="{{ route('home') }}">
                {{-- Nama brand LapakGo akan otomatis menggunakan font Montserrat karena CSS utama --}}
                <span>LapakGo</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class=""></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    {{-- Navigasi Item. Cek rute aktif untuk menentukan kelas 'active' --}}
                    <li class="nav-item @if(Route::is('home')) active @endif">
                        <a class="nav-link" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="nav-item @if(Route::is('menu')) active @endif">
                        <a class="nav-link" href="{{ route('menu') }}">MENU</a>
                    </li>
                    <li class="nav-item @if(Route::is('promosi')) active @endif">
                        <a class="nav-link" href="{{ route('promosi') }}">PROMOSI</a>
                    </li>
                    <li class="nav-item @if(Route::is('about')) active @endif">
                        <a class="nav-link" href="{{ route('about') }}">TENTANG KAMI</a>
                    </li>
                </ul>

                <div class="user_option">
                    {{-- Ikon User (Menggunakan kelas user_link) --}}
                    <a href="" class="user_link" title="Masuk / Daftar">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                    
                    {{-- Ikon Keranjang (Menggunakan kelas cart_link) --}}
                    <a href="" class="cart_link" title="Keranjang Belanja">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </a>

                    {{-- Tombol Order Online (Menggunakan kelas order_online) --}}
                    <a href="" class="order_online">
                        Order Online
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>
