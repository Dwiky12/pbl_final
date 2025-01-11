<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kegiatan;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kegiatan::create([
            'nama_kegiatan' => 'Seminar',
        ]);

        Kegiatan::create([
            'nama_kegiatan' => 'Workshop',
        ]);

        Kegiatan::create([
            'nama_kegiatan' => 'Lokakarya',
        ]);
        
        Kegiatan::create([
            'nama_kegiatan' => 'Focus Group Discussion',
        ]);
        
        Kegiatan::create([
            'nama_kegiatan' => 'Lainnya',
        ]);

    }
}
