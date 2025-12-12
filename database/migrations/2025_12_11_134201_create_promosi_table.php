<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Cek dulu apakah tabel sudah ada
        if (!Schema::hasTable('promosi')) {
            Schema::create('promosi', function (Blueprint $table) {
                $table->id('id_promosi');
                $table->unsignedBigInteger('id_pelaku_usaha');
                $table->string('judul_promosi', 100);
                $table->text('deskripsi_promosi');
                $table->unsignedBigInteger('id_admin')->nullable();
                $table->timestamps();

                // Foreign keys
                $table->foreign('id_pelaku_usaha')
                      ->references('id_pelaku_usaha')
                      ->on('pelaku_usaha')
                      ->onDelete('cascade');
                      
                $table->foreign('id_admin')
                      ->references('id')
                      ->on('users')  // KE TABEL USERS, BUKAN ADMIN
                      ->onDelete('set null');
            });
            
            echo "Tabel promosi berhasil dibuat\n";
        } else {
            echo "Tabel promosi sudah ada\n";
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promosi');
    }
};