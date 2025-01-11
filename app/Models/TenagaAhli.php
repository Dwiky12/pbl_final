<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaAhli extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_SETUJU = 'disetujui';
    const STATUS_TOLAK = 'ditolak';

    protected $fillable = [
        'id_prodi',
        'nama_ahli',
        'asal_instansi',
        'keahlian',
        'tanggal_mulai',
        'tanggal_selesai',
        'kegiatan',
        'file_dokumen',
        'status',
        'komentar',
    ];

    protected static function booted()
    {
        static::updating(function ($tenagaahli){
            if (auth()->check() && auth()->user()->role === 'dosen' && $tenagaahli->getOriginal('status') === 'ditolak'){
                $tenagaahli->status = 'pending';
            }
        });
    }

    public function prodi()
{
    return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
}
}
