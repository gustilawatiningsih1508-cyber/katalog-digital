<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('pelaku_usaha', function (Blueprint $table) {
            // PERBAIKAN: string tidak bisa autoIncrement, ganti dengan bigIncrements
            $table->bigIncrements('id_pelaku_usaha'); // ← PERBAIKAN DI SINI
            
            $table->string('nama_usaha', 100);
            $table->string('nama_pemilik', 100);
            $table->string('email', 100);
            $table->string('password', 255); // ← PERBAIKAN: 255 untuk hash
            $table->string('no_hp', 20);
            $table->text('deskripsi_usaha');
            $table->integer('hak_akses');
            
            $table->timestamps(); // ← TAMBAHKAN untuk created_at & updated_at
        });
    }

    public function down(): void {
        Schema::dropIfExists('pelaku_usaha');
    }
};