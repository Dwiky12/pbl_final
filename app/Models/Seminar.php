<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
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
        'id_tingkat',
        'id_kegiatan',
        'id_skema',
        'tempat',
        'tanggal_mulai',
        'tanggal_selesai',
        'pembicara',
        'asal_pembicara',
        'file_dokumen',
        'status',
        'komentar',
    ];

    protected static function booted()
    {
        static::updating(function ($seminar){
            if (auth()->check() && auth()->user()->role === 'dosen' && $seminar->getOriginal('status') === 'ditolak'){
                $seminar->status = 'pending';
            }
        });
    }

    public function prodi()
{
    return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
}
    public function tingkat()
{
    return $this->belongsTo(Tingkat::class, 'id_tingkat');
}
    public function kegiatan()
{
    return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
}
    public function skema()
{
    return $this->belongsTo(Skema::class, 'id_skema');
}
}