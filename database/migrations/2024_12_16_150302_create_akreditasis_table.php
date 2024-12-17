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
        Schema::create('akreditasis', function (Blueprint $table) {
            $table->id();
                $table->foreignId('id_prodi')->constrained('prodis')->cascadeOnDelete()->cascadeOnUpdate();
                $table->string('no_sk');
                $table->foreignId('id_jenisakreditasi')->constrained('jenis_akreditasis')->cascadeOnDelete()->cascadeOnUpdate();
                $table->string('nilai_akreditasi');
                $table->foreignId('id_lembaga')->constrained('lembagas')->cascadeOnDelete()->cascadeOnUpdate();
                $table->foreignId('id_tingkat')->constrained('tingkats')->cascadeOnDelete()->cascadeOnUpdate();
                $table->date('tanggal_mulai');
                $table->date('tanggal_berakhir');
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
        Schema::dropIfExists('akreditasis');
    }
};