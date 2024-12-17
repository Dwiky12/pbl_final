<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lembaga' // Kolom yang dapat diisi
    ];

    public function akreditasi() {
        return $this->hasMany(Akreditasi::class);
    }
}
