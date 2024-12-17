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
        Schema::create('profil_prodis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_prodi')->constrained('prodis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('tahun_penggunaan');
            $table->integer('revisi_ke');
            $table->string('file_dokumen')->nullable();
            $table->string('status')->default('pending'); // Tambahkan field status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_prodis');
    }
};