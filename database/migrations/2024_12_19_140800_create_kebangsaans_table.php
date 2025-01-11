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
        Schema::create('kebangsaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_prodi')->constrained('prodis')->cascadeOnDelete()->cascadeOnUpdate();
                $table->foreignId('id_kategori')->constrained('kategoris')->cascadeOnDelete()->cascadeOnUpdate();
                $table->foreignId('id_tingkat')->constrained('tingkats')->cascadeOnDelete()->cascadeOnUpdate();
                $table->string('nama_kegiatan');
                $table->year('tahun');
                $table->string('url_penyelenggara');
                $table->string('file_dokumen')->nullable();
                $table->enum('status', ['pending', 'disetujui', 'ditolak'])->default('pending'); // Tambahkan field status
                $table->text('komentar')->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebangsaans');
    }
};