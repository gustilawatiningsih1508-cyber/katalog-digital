<?php
// database/migrations/2025_01_01_000002_add_gambar_to_promosi_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('promosi', function (Blueprint $table) {
            $table->string('gambar')->nullable()->after('deskripsi_promosi');
        });
    }

    public function down(): void
    {
        Schema::table('promosi', function (Blueprint $table) {
            $table->dropColumn('gambar');
        });
    }
};