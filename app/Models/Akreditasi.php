<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akreditasi extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_SETUJU = 'disetujui';
    const STATUS_TOLAK = 'ditolak';

    protected $fillable = [
        'id_prodi',
        'no_sk',
        'id_jenisakreditasi',
        'nilai_akreditasi',
        'id_lembaga',
        'id_tingkat',
        'tanggal_mulai',
        'tanggal_berakhir',
        'file_dokumen',
        'status',
        'komentar',
    ];

    protected static function booted()
    {
        static::updating(function ($akreditasi) {
            if (auth()->check() && auth()->user()->role === 'dosen' && $akreditasi->getOriginal('status') === 'ditolak') {
                $akreditasi->status = 'pending';
            }
        });
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value;

        if ($value === 'pending') {
            $this->attributes['komentar'] = null;
        }
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }

    public function jenisAkreditasi()
    {
        return $this->belongsTo(JenisAkreditasi::class, 'id_jenisakreditasi');
    }

    public function lembaga()
    {
        return $this->belongsTo(Lembaga::class, 'id_lembaga');
    }

    public function tingkat()
    {
        return $this->belongsTo(Tingkat::class, 'id_tingkat');
    }
}