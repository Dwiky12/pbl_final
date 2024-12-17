<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSop extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori' // Kolom yang dapat diisi
    ];

    public function sop() {
        return $this->hasMany(Sop::class);
    }
}
