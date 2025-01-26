<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengembangan_diris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_prodi')->constrained('prodis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nama_kegiatan');
            $table->year('tahun');
            $table->string('semester');
            $table->foreignId('id_user')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            ;
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('jenis', ['Pendidikan Lanjut', 'Diklat', 'Lainnya']);
            $table->foreignId('id_tingkat')->constrained('tingkats')->cascadeOnDelete()->cascadeOnUpdate();
            ;
            $table->string('penyelenggara');
            $table->string('tempat');
            $table->integer('lama');
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('pengembangan_diris');
    }
};