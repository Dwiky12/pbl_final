<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilProdi extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_SETUJU = 'disetujui';
    const STATUS_TOLAK = 'ditolak';

    protected $fillable = [
        'id_prodi',
        'tahun_penggunaan',
        'revisi_ke',
        'file_dokumen',
        'status',
        'komentar',
    ];

    protected static function booted()
    {
        static::updating(function ($profiprodi){
            if (auth()->check() && auth()->user()->role === 'dosen' && $profiprodi->getOriginal('status') === 'ditolak'){
                $profiprodi->status = 'pending';
            }
        });
    }

    public function prodi() {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }
}