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
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_prodi')->constrained('prodis')->cascadeOnDelete()->cascadeOnUpdate();
                $table->string('nama_kegiatan');
                $table->year('tahun');
                $table->string('semester');
                $table->foreignId('id_tingkat')->constrained('tingkats')->cascadeOnDelete()->cascadeOnUpdate();
                $table->foreignId('id_kegiatan')->constrained('kegiatans')->cascadeOnDelete()->cascadeOnUpdate();
                $table->foreignId('id_skema')->constrained('skemas')->cascadeOnDelete()->cascadeOnUpdate();
                $table->string('tempat');
                $table->date('tanggal_mulai');
                $table->date('tanggal_selesai');
                $table->string('pembicara');
                $table->string('asal_pembicara');
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
        Schema::dropIfExists('seminars');
    }
};