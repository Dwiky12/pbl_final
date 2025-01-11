<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenKurikulum extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_SETUJU = 'disetujui';
    const STATUS_TOLAK = 'ditolak';

    protected $fillable = [ 
        'id_prodi', 
        'nama_kurikulum', 
        'tahun_pemberlakuan', 
        'semester', 
        'revisi_ke',
        'file_dokumen',
        'status',
        'komentar',
    ];

    protected static function booted()
    {
        static::updating(function ($dokumenkurikulum){
            if (auth()->check() && auth()->user()->role === 'dosen' && $dokumenkurikulum->getOriginal('status') === 'ditolak'){
                $dokumenkurikulum->status = 'pending';
            }
        });
    }
    public function prodi() {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }
}