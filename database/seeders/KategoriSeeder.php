<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama_kategori' => 'Pelatihan Kepemimpinan Mahasiswa',
        ]);
        Kategori::create([
            'nama_kategori' => 'Pendidikan Bela Negara/kewiraan/wawasan nusantara',
        ]);
        Kategori::create([
            'nama_kategori' => 'Pendidikan norma, etika, pembinaan karakater, dan soft skill mahasiswa',
        ]);
        Kategori::create([
            'nama_kategori' => 'Pendidikan atau gerakan anti korupsi',
        ]);
        Kategori::create([
            'nama_kategori' => 'Pendidikan atau gerakan anti penyalahgunaan NAPZA',
        ]);
        Kategori::create([
            'nama_kategori' => 'Pendidikan atau gerakan anti radikalisme',
        ]);
        Kategori::create([
            'nama_kategori' => 'Kampanye pencegahan kekerasan seksual dan Perundungan',
        ]);
        Kategori::create([
            'nama_kategori' => 'kampanye kampus sehat',
        ]);
    }
}
