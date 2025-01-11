<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_prodi',
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
    public function tenagaAhli() {
        return $this->hasMany(TenagaAhli::class);
    }
    public function koleksiJurnal() {
        return $this->hasMany(KoleksiJurnal::class);
    }
    public function seminar() {
        return $this->hasMany(Seminar::class);
    }
    public function pengembanganDiri() {
        return $this->hasMany(PengembanganDiri::class);
    }
    public function ruangKelas() {
        return $this->hasMany(RuangKelas::class);
    }
    public function pengabdian() {
        return $this->hasMany(Pengabdian::class);
    }
    public function kebangsaan() {
        return $this->hasMany(Kebangsaan::class);
    }

}