@extends('layouts.app')

@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 20px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Back Button */
    .back-button {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(255, 255, 255, 0.95);
        color: #667eea;
        padding: 12px 24px;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        margin-bottom: 20px;
        border: 2px solid transparent;
    }

    .back-button:hover {
        background: white;
        transform: translateX(-5px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.3);
        border-color: #667eea;
    }

    .back-icon {
        font-size: 20px;
        transition: transform 0.3s ease;
    }

    .back-button:hover .back-icon {
        transform: translateX(-3px);
    }

    /* Hero Section */
    .hero-section {
        background: white;
        border-radius: 24px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        position: relative;
        overflow: hidden;
        animation: slideDown 0.6s ease;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 6px;
        background: linear-gradient(90deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
    }

    .business-header {
        display: flex;
        align-items: center;
        gap: 30px;
        margin-bottom: 30px;
    }

    .business-logo {
        width: 120px;
        height: 120px;
        border-radius: 24px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        color: white;
        font-weight: bold;
        box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        flex-shrink: 0;
    }

    .business-info h1 {
        font-size: 42px;
        color: #2d3748;
        margin-bottom: 10px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .business-category {
        display: inline-block;
        padding: 8px 20px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    /* Info Cards Grid */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 24px;
        margin-bottom: 30px;
    }

    .info-card {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        animation: fadeIn 0.6s ease;
        border: 2px solid transparent;
    }

    .info-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(102, 126, 234, 0.3);
        border-color: #667eea;
    }

    .card-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .card-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        flex-shrink: 0;
    }

    .card-title {
        font-size: 20px;
        font-weight: 700;
        color: #2d3748;
    }

    .card-content {
        color: #4a5568;
        font-size: 16px;
        line-height: 1.8;
    }

    /* Owner Info */
    .owner-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        padding: 10px 20px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 15px;
    }

    /* WhatsApp Button */
    .whatsapp-section {
        background: white;
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        margin-bottom: 30px;
        animation: fadeIn 0.8s ease;
    }

    .whatsapp-btn {
        display: inline-flex;
        align-items: center;
        gap: 15px;
        background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
        color: white;
        padding: 18px 40px;
        border-radius: 50px;
        font-size: 18px;
        font-weight: 700;
        text-decoration: none;
        box-shadow: 0 10px 30px rgba(37, 211, 102, 0.4);
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .whatsapp-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(37, 211, 102, 0.5);
    }

    .whatsapp-icon {
        font-size: 28px;
    }





    /* Animations */
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }



    /* Responsive */
    @media (max-width: 768px) {
        .business-header {
            flex-direction: column;
            text-align: center;
        }

        .business-info h1 {
            font-size: 32px;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }

        .hero-section {
            padding: 25px;
        }
    }
</style>

<div class="container">
    <!-- Back Button -->
    <a href="{{ url()->previous() }}" class="back-button">
        <span class="back-icon">←</span>
        <span>Kembali</span>
    </a>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="business-header">
            <div class="business-logo">
                {{ substr($lapak['nama'], 0, 1) }}
            </div>
            <div class="business-info">
                <h1>{{ $lapak['nama'] }}</h1>
                <span class="business-category">{{ $lapak['owner'] }}</span>
            </div>
        </div>
    </div>

    <!-- Info Cards Grid -->
    <div class="info-grid">
        <!-- Description Card -->
        <div class="info-card">
            <div class="card-header">
                <div class="card-icon">📝</div>
                <h3 class="card-title">Deskripsi Usaha</h3>
            </div>
            <div class="card-content">
                {{ $lapak['deskripsi'] }}
            </div>
        </div>

        <!-- Owner Card -->
        <div class="info-card">
            <div class="card-header">
                <div class="card-icon">👤</div>
                <h3 class="card-title">Pelaku Usaha</h3>
            </div>
            <div class="card-content">
                <span class="owner-badge">
                    <span>✨</span>
                    {{ $lapak['owner'] }}
                </span>
            </div>
        </div>

        <!-- Address Card -->
        <div class="info-card">
            <div class="card-header">
                <div class="card-icon">📍</div>
                <h3 class="card-title">Alamat</h3>
            </div>
            <div class="card-content">
                {{ $lapak['alamat'] ?? $lapak->alamat ?? 'Alamat belum tersedia' }}
            </div>
        </div>
    </div>

    <!-- WhatsApp Section -->
    @if(isset($lapak['whatsapp']) || isset($lapak->whatsapp))
    <div class="whatsapp-section">
        <h3 style="font-size: 24px; color: #2d3748; margin-bottom: 20px;">💬 Hubungi Kami</h3>
        <a href="https://wa.me/{{ $lapak['whatsapp'] ?? $lapak->whatsapp }}" target="_blank" class="whatsapp-btn">
            <span class="whatsapp-icon">📱</span>
            <span>Chat via WhatsApp</span>
        </a>
    </div>
    @endif