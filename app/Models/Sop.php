<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sop extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_prodi',
        'id_kategorisop',
        'nama_sop',
        'file_dokumen',
        'status'
    ];

    public function prodi() {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }

    public function kategoriSop() {
        return $this->belongsTo(KategoriSop::class, 'id_kategorisop');
    }
}