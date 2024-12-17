<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lembaga;

class LembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lembaga::create([
            'nama_lembaga' => 'BAN_PT',
        ]);

        Lembaga::create([
            'nama_lembaga' => 'ISO',
        ]);

        Lembaga::create([
            'nama_lembaga' => 'Lembaga Internasional',
        ]);
        
        Lembaga::create([
            'nama_lembaga' => 'LAM Pendidikan Tinggi Kesehatan Indonesia',
        ]);
        
        Lembaga::create([
            'nama_lembaga' => 'LAM Teknik',
        ]);

        Lembaga::create([
            'nama_lembaga' => 'LAM Informatika dan Komputer',
        ]);
        
        Lembaga::create([
            'nama_lembaga' => 'LAM Sains Alam dan Ilmu Formal',
        ]);
        
        Lembaga::create([
            'nama_lembaga' => 'LAM Ekonomi Management Bisnis dan Akuntansi',
        ]);
    }
}