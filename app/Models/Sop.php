<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sop extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_SETUJU = 'disetujui';
    const STATUS_TOLAK = 'ditolak';

    protected $fillable = [
        'id_prodi',
        'id_kategorisop',
        'nama_sop',
        'file_dokumen',
        'status',
        'komentar',
    ];

    protected static function booted()
    {
        static::updating(function ($sop){
            if (auth()->check() && auth()->user()->role === 'dosen' && $sop->getOriginal('status') === 'ditolak'){
                $sop->status = 'pending';
            }
        });
    }

    public function prodi() {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }

    public function kategoriSop() {
        return $this->belongsTo(KategoriSop::class, 'id_kategorisop');
    }
}