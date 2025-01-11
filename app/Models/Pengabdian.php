<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengabdian extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_SETUJU = 'disetujui';
    const STATUS_TOLAK = 'ditolak';

    protected $fillable = [
        'id_prodi', 
        'nama_kegiatan', 
        'tahun', 
        'jumlah_peserta',
        'file_dokumen',
        'status',
        'komentar',
    ];

    protected static function booted()
    {
        static::updating(function ($pengabdian){
            if (auth()->check() && auth()->user()->role === 'dosen' && $pengabdian->getOriginal('status') === 'ditolak'){
                $pengabdian->status = 'pending';
            }
        });
    }
    public function prodi() {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }
}