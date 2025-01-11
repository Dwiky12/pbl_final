<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengembanganDiri extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_SETUJU = 'disetujui';
    const STATUS_TOLAK = 'ditolak';

    protected $fillable = [ 
        'id_prodi', 
        'nama_kegiatan', 
        'tahun', 
        'semester', 
        'id_pegawai', 
        'tanggal_mulai', 
        'tanggal_selesai', 
        'jenis', 
        'id_tingkat', 
        'penyelenggara', 
        'tempat', 
        'lama', 
        'keterangan',
        'file_dokumen',
        'status',
        'komentar',
    ];

    protected static function booted()
    {
        static::updating(function ($pengembangandiri){
            if (auth()->check() && auth()->user()->role === 'dosen' && $pengembangandiri->getOriginal('status') === 'ditolak'){
                $pengembangandiri->status = 'pending';
            }
        });
    }

    public function prodi() {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }

    public function pegawai() {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function tingkat() {
        return $this->belongsTo(Tingkat::class, 'id_tingkat');
    }
}