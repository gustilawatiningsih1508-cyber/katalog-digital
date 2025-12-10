<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('promosi', function (Blueprint $table) {
            // PERBAIKAN: integer autoIncrement diganti dengan increments
            $table->increments('id_promosi'); // ← PERBAIKAN DI SINI
            
            // PERBAIKAN: sesuaikan dengan tipe data di pelaku_usaha
            $table->unsignedBigInteger('id_pelaku_usaha'); // ← PERBAIKAN: bigInteger
            
            $table->string('judul_promosi', 100);
            $table->text('deskripsi_promosi');
            $table->unsignedBigInteger('id_admin')->nullable(); // ← PERBAIKAN: bigInteger
            
            $table->timestamps(); // ← TAMBAHKAN timestamps
            
            // Relasi - PERBAIKAN: tambahkan onDelete
            $table->foreign('id_pelaku_usaha')
                  ->references('id_pelaku_usaha')
                  ->on('pelaku_usaha')
                  ->onDelete('cascade'); // ← TAMBAHKAN
            
            $table->foreign('id_admin')
                  ->references('id_admin')
                  ->on('admin')
                  ->nullOnDelete();
        });
    }

    public function down(): void {
        Schema::dropIfExists('promosi');
    }
};