<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('promosi', function (Blueprint $table) {
            $table->integer('id_promosi')->autoIncrement()->primary();
            $table->integer('id_pelaku_usaha');
            $table->string('judul_promosi', 100)->nullable();
            $table->text('deskripsi_promosi')->nullable();
            $table->integer('id_admin')->nullable();

            // relasi
            $table->foreign('id_pelaku_usaha')->references('id_pelaku_usaha')->on('pelaku_usaha');
            $table->foreign('id_admin')->references('id_admin')->on('admin')->nullOnDelete();
        });
    }

    public function down(): void {
        Schema::dropIfExists('promosi');
    }
};
