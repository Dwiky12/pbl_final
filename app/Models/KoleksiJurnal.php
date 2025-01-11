<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiJurnal extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_SETUJU = 'disetujui';
    const STATUS_TOLAK = 'ditolak';

    protected $fillable = [
        'id_prodi',
        'nama_jurnal',
        'tahun',
        'semester',
        'id_tingkat',
        'jenis_jurnal',
        'terindex_pada',
        'terindex_lainnya',
        'penerbit',
        'volume',
        'jumlah_eksemplar',
        'deskripsi',
        'file_dokumen',
        'status',
        'komentar',
    ];

    protected static function booted()
    {
        static::updating(function ($koleksijurnal){
            if (auth()->check() && auth()->user()->role === 'dosen' && $koleksijurnal->getOriginal('status') === 'ditolak'){
                $koleksijurnal->status = 'pending';
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

}