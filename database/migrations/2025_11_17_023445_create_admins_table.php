<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; 

return new class extends Migration {
    public function up(): void {
        Schema::create('admin', function (Blueprint $table) {
            $table->integer('id_admin')->autoIncrement()->primary();
            $table->string('username', 100);
            $table->string('email', 100);
            $table->string('password', 100);
            $table->integer('hak_akses');
            $table->string('laporan_aktifitas', 255)->nullable();
            $table->dateTime('waktu_aktivitas')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void {
        Schema::dropIfExists('admin');
    }
};
