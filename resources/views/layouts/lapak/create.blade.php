@extends('layouts.app')

@section('content')
<style>
    body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; }
    .form-container {
        max-width: 600px; margin: 40px auto; background: white;
        border-radius: 20px; padding: 40px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.2);
    }
    .form-title {
        color: #4a5568; font-weight: 800; text-align: center; margin-bottom: 30px;
    }
    .form-control {
        border-radius: 10px; padding: 12px; border: 1px solid #e2e8f0; background: #f7fafc;
    }
    .form-control:focus {
        background: white; border-color: #667eea; box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
    }
    .label-text { font-weight: 600; color: #4a5568; margin-bottom: 8px; display: block; }
    .btn-submit {
        background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
        border: none; padding: 12px; border-radius: 50px; width: 100%;
        color: white; font-weight: bold; font-size: 16px; margin-top: 10px;
        transition: 0.3s;
    }
    .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4); }
    .btn-back { display: block; text-align: center; margin-top: 20px; color: #718096; text-decoration: none; }
</style>

<div class="container">
    <div class="form-container">
        <h2 class="form-title">Tambah Lapak Baru</h2>

        <form action="{{ route('lapak.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="label-text">Nama Lapak</label>
                <input type="text" name="nama" class="form-control" placeholder="Contoh: Kopi Senja" required>
            </div>

            <div class="mb-4">
                <label class="label-text">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="4" placeholder="Jelaskan produk/jasa Anda..."></textarea>
            </div>

            <div class="mb-4">
                <label class="label-text">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Lokasi usaha" required>
            </div>

            <div class="mb-4">
                <label class="label-text">Nomor WhatsApp</label>
                <input type="text" name="wa" class="form-control" placeholder="08123456789">
                <small class="text-muted">Masukkan nomor HP aktif.</small>
            </div>

            <button type="submit" class="btn btn-submit">Simpan Lapak</button>
            <a href="{{ route('lapak.index') }}" class="btn-back">Batal & Kembali</a>

        </form>
    </div>
</div>
@endsection