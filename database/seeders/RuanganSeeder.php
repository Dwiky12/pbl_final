<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ruangan;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ruangan::create([
            'ruangan' => 'Ruang Kelas',
        ]);
        Ruangan::create([
            'ruangan' => 'Ruang Pimpinan',
        ]);
        Ruangan::create([
            'ruangan' => 'Ruang Dosen',
        ]);
        Ruangan::create([
            'ruangan' => 'Ruangan Administrasi',
        ]);
        Ruangan::create([
            'ruangan' => 'Ruang Baca',
        ]);
        Ruangan::create([
            'ruangan' => 'Ruang Himpunan Mahasiswa',
        ]);
        Ruangan::create([
            'ruangan' => 'Gudang',
        ]);
        Ruangan::create([
            'ruangan' => 'Lainnya',
        ]);
    }
}