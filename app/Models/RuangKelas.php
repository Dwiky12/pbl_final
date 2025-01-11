<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangKelas extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'pending';
    const STATUS_SETUJU = 'disetujui';
    const STATUS_TOLAK = 'ditolak';

    protected $fillable = [
        'id_prodi', 
        'nama_ruangan', 
        'tahun', 
        'semester', 
        'id_ruangan', 
        'luas', 
        'daya_tampung', 
        'status_pemakaian',
        'file_dokumen',
        'status',
        'komentar',

    ];

    protected static function booted()
    {
        static::updating(function ($ruangkelas){
            if (auth()->check() && auth()->user()->role === 'dosen' && $ruangkelas->getOriginal('status') === 'ditolak'){
                $ruangkelas->status = 'pending';
            }
        });
    }

    public function prodi() {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }

    public function ruangan() {
        return $this->belongsTo(Ruangan::class, 'id_ruangan');
    }
}