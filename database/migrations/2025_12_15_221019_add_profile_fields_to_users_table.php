<?php
// database/migrations/2025_12_16_000001_add_profile_fields_to_users_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // 1. TAMBAHKAN KOLOM address TERLEBIH DAHULU
            if (!Schema::hasColumn('users', 'address')) {
                $table->text('address')->nullable()->after('email');
            }
            
            // 2. TAMBAHKAN phone DENGAN PENGECEKAN
            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone')->nullable()->after('email');
            }
            
            // 3. TAMBAHKAN birth_date SETELAH address
            if (!Schema::hasColumn('users', 'birth_date')) {
                $table->date('birth_date')->nullable()->after('address');
            }
            
            // 4. TAMBAHKAN gender
            if (!Schema::hasColumn('users', 'gender')) {
                $table->enum('gender', ['male', 'female'])->nullable()->after('birth_date');
            }
            
            // 5. TAMBAHKAN bio
            if (!Schema::hasColumn('users', 'bio')) {
                $table->string('bio', 500)->nullable()->after('gender');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Hanya hapus kolom jika ada
            $columns = ['phone', 'address', 'birth_date', 'gender', 'bio'];
            foreach ($columns as $column) {
                if (Schema::hasColumn('users', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};