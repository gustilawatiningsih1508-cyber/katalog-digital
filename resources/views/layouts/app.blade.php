<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Katalog Digital')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav style="background:#333; padding:10px;">
        <ul style="display:flex; gap:20px; list-style:none; margin:0; padding:0;">
            <li><a href="{{ route('home') }}" style="color:white;">Home</a></li>
            <li><a href="{{ route('about') }}" style="color:white;">About</a></li>
            <li><a href="{{ route('menu') }}" style="color:white;">Menu</a></li>
            <li><a href="{{ route('book') }}" style="color:white;">Book</a></li>
        </ul>
    </nav>

    <main style="padding: 20px;">
        @yield('content')
    </main>

    <footer style="background:#f2f2f2; text-align:center; padding:10px; margin-top:20px;">
        <p>© {{ date('Y') }} Katalog Digital. All rights reserved.</p>
    </footer>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
