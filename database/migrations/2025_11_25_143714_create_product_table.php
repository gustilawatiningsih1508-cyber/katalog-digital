<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_produk');
            $table->integer('id_pelaku_usaha');
            $table->string('nama_produk', 100);
            $table->decimal('harga', 15, 2);
            $table->string('kategori', 50);
            $table->text('deskripsi')->nullable();
            $table->string('status', 20)->default('tersedia');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};