<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebangsaan extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_SETUJU = 'disetujui';
    const STATUS_TOLAK = 'ditolak';

    protected $fillable = [
        'id_prodi',
        'id_kategori',
        'id_tingkat',
        'nama_kegiatan',
        'tahun',
        'url_penyelenggara',
        'file_dokumen',
        'status',
        'komentar',
    ];

    protected static function booted()
    {
        static::updating(function ($kebangsaan){
            if (auth()->check() && auth()->user()->role === 'dosen' && $kebangsaan->getOriginal('status') === 'ditolak'){
                $kebangsaan->status = 'pending';
            }
        });
    }
    public function prodi()
{
    return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
}

public function kategori()
{
    return $this->belongsTo(Kategori::class, 'id_kategori');
}

public function tingkat()
{
    return $this->belongsTo(Tingkat::class, 'id_tingkat');
}

}