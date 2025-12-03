@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2>Tambah Lapak Baru</h2>

    <div class="card shadow-sm p-4 mt-3">

        <form action="{{ route('lapak.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Lapak</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">WhatsApp</label>
                <input type="text" name="wa" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('lapak.index') }}" class="btn btn-secondary">Kembali</a>

        </form>

    </div>

</div>
@endsection
