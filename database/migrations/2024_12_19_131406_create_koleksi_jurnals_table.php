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
        Schema::create('koleksi_jurnals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_prodi')->constrained('prodis')->cascadeOnDelete()->cascadeOnUpdate();
                $table->string('nama_jurnal');
                $table->year('tahun');
                $table->string('semester');
                $table->foreignId('id_tingkat')->constrained('tingkats')->cascadeOnDelete()->cascadeOnUpdate();
                $table->enum('jenis_jurnal', ['hardcopy', 'softcopy']); // Tambahkan field status
                $table->enum('terindex_pada', ['Thomson Reuters', 'Scopus', 'Microsoft Academic Research', 'Lainnya']); // Tambahkan field status
                $table->string('terindex_lainnya');
                $table->string('penerbit');
                $table->integer('volume');
                $table->integer('jumlah_eksemplar');
                $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('koleksi_jurnals');
    }
};