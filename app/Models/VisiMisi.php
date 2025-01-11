<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_SETUJU = 'disetujui';
    const STATUS_TOLAK = 'ditolak';

    protected $fillable = [
        'id_prodi',
        'visi',
        'misi',
        'tahun_pemberlakuan',
        'semester',
        'revisi_ke',
        'file_dokumen',
        'status',
        'komentar',
    ];

    protected static function booted()
    {
        static::updating(function ($visimisi){
            if (auth()->check() && auth()->user()->role === 'dosen' && $visimisi->getOriginal('status') === 'ditolak'){
                $visimisi->status = 'pending';
            }
        });
    }

    public function prodi() {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }
    
}