<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilProdi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_prodi',
        'tahun_penggunaan',
        'revisi_ke',
        'file_dokumen',
        'status'
    ];

    public function prodi() {
        return $this->belongsTo(Prodi::class);
    }
}
