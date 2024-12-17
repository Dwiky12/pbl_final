<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akreditasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_prodi',
        'no_sk',
        'id_jenisakreditasi',
        'nilai_akreditasi',
        'id_lembaga',
        'id_tingkat',
        'tanggal_mulai',
        'tanggal_berakhir',
        'file_dokumen',
        'status'
    ];

    public function prodi() {
        return $this->belongsTo(Prodi::class);
    }

    public function jenisAkreditasi() {
        return $this->belongsTo(JenisAkreditasi::class);
    }

    public function lembaga() {
        return $this->belongsTo(Lembaga::class);
    }

    public function tingkat() {
        return $this->belongsTo(Tingkat::class);
    }
}