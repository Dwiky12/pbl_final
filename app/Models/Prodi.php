<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_prodi' // Kolom yang dapat diisi
    ];
    
    public function akreditasi() {
        return $this->hasMany(Akreditasi::class);
    }

    public function visiMisi() {
        return $this->hasMany(VisiMisi::class);
    }

    public function profilProdi() {
        return $this->hasMany(ProfilProdi::class);
    }

    public function dokumenKurikulum() {
        return $this->hasMany(DokumenKurikulum::class);
    }

    public function sop() {
        return $this->hasMany(Sop::class);
    }

}