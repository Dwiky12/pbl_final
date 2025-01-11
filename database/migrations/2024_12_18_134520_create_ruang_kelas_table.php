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
        Schema::create('ruang_kelas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_prodi')->constrained('prodis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nama_ruangan');
            $table->year('tahun');
            $table->string('semester');
            $table->foreignId('id_ruangan')->constrained('ruangans')->cascadeOnDelete()->cascadeOnUpdate();;
            $table->integer('luas');
            $table->integer('daya_tampung');
            $table->enum('status_pemakaian', ['Prodi Sendiri', 'Dipakai bersama dalam Fakultas', 'Dipakai bersama dalam Universitas']);
            $table->string('file_dokumen')->nullable();
            $table->enum('status', ['pending', 'disetujui', 'ditolak'])->default('pending'); 
            $table->text('komentar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruang_kelas');
    }
};