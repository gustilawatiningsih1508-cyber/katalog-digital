@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <h2 class="text-center mb-4" style="font-weight: bold;">Daftar Lapak / Usaha</h2>

    <div class="row">

        {{-- Contoh 3 Lapak (Bisa ditambah kapan saja) --}}
        @php
            $lapakList = [
                ['id' => 1, 'nama' => 'Miloku', 'foto' => 'milo.webp'],
                ['id' => 2, 'nama' => 'Ayam Geprek Pak Dwi', 'foto' => 'geprek.jpg'],
                ['id' => 3, 'nama' => 'Es Teh Jumbo', 'foto' => 'esteh.jpg'],
            ];
        @endphp

        @foreach ($lapakList as $l)
            <div class="col-md-4 mb-4">
                <a href="{{ route('lapak.detail', $l['id']) }}" 
                   style="text-decoration: none; color: inherit;">
                    <div class="card shadow-lg" style="border-radius: 15px; overflow: hidden;">

                        {{-- FOTO USAHA --}}
                        <img src="{{ asset('assets/lapak/' . $l['foto']) }}"
                             style="width:100%; height:200px; object-fit:cover;">

                        <div class="card-body text-center">
                            <h4 style="font-weight: bold;">{{ $l['nama'] }}</h4>
                            <button class="btn btn-primary mt-2 w-100">
                                Lihat Detail
                            </button>
                        </div>

                    </div>
                </a>
            </div>
        @endforeach

    </div>

</div>

@endsection
