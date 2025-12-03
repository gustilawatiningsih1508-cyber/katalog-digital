@extends('layouts.app')

@section('content')
<h2 style="margin-bottom: 15px;">Daftar Lapak</h2>

<div style="display:flex; flex-wrap:wrap; gap:20px;">
    @foreach($lapak as $item)
        <a href="{{ route('lapak.show', $item['id']) }}" 
           style="text-decoration:none; color:black;">
           
            <div style="
                width:160px; 
                padding:10px; 
                border:1px solid #e5e5e5; 
                border-radius:12px;
                background:white;
                box-shadow:0px 2px 6px rgba(0,0,0,0.1);
                transition:0.2s;
            " 
            onmouseover="this.style.transform='scale(1.04)'"
            onmouseout="this.style.transform='scale(1)'">

                <img src="{{ $item['gambar'] }}" 
                     style="
                        width:100%; 
                        height:120px;
                        object-fit:cover; 
                        border-radius:8px;
                     ">

                <h4 style="margin-top:10px; font-size:16px; text-align:center;">
                    {{ $item['nama'] }}
                </h4>
            </div>

        </a>
    @endforeach
</div>
@endsection
