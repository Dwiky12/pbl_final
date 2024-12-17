<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriSop;

class KategoriSopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriSop::create([
            'nama_kategori' => 'Proses Belajar Mengajar',
        ]);

        KategoriSop::create([
            'nama_kategori' => 'Administrasi Akademik',
        ]);
        
        KategoriSop::create([
            'nama_kategori' => 'Kemahasiswaan',
        ]);
        
        KategoriSop::create([
            'nama_kategori' => 'Perencanaan dan Keuangan',
        ]);

        KategoriSop::create([
            'nama_kategori' => 'Administrasi dan Penggunaan Aset',
        ]);
        
        KategoriSop::create([
            'nama_kategori' => 'Penelitian dan Pengabdian Masyarakat', 
        ]);

        KategoriSop::create([
            'nama_kategori' => 'Perubahan Kurikulum',
        ]);

        KategoriSop::create([
            'nama_kategori' => 'Mutu Publikasi', 
        ]);

        KategoriSop::create([
            'nama_kategori' => 'Mekanisme Penentuan Studi Lanjut Dosen', 
        ]);

        KategoriSop::create([
            'nama_kategori' => 'Mekanisme Penentuan Rekrutmen Tenaga Pendidikan', 
        ]);

        KategoriSop::create([
            'nama_kategori' => 'Mekanisme Penentuan Rekrutmen Tenaga Kependidikan', 
        ]);

        KategoriSop::create([
            'nama_kategori' => 'Pemilihan Pimpinan Program Studi', 
        ]);

        KategoriSop::create([
            'nama_kategori' => 'Penggunaan Laboratorium', 
        ]);

        KategoriSop::create([
            'nama_kategori' => 'Penugasan Dosen dan Pegawai Mengikuti Kegiatan', 
        ]);
        
        KategoriSop::create([
            'nama_kategori' => 'Lainnya', 
        ]);
    }
}