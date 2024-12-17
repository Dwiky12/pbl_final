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
        Schema::create('visi_misis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_prodi')->constrained('prodis')->cascadeOnDelete()->cascadeOnUpdate();;
            $table->string('visi');
            $table->string('misi');
            $table->year('tahun_pemberlakuan');
            $table->string('semester');
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
        Schema::dropIfExists('visi_misis');
    }
};