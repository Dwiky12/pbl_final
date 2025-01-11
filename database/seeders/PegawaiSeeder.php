<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nip' => '5456765467',
            'nama' => 'Pegawai 1',
        ]);

        Pegawai::create([
            'nip' => '5567656765',
            'nama' => 'Pegawai 2',
        ]);
        Pegawai::create([
            'nip' => '4573892837',
            'nama' => 'Pegawai 3',
        ]);

        Pegawai::create([
            'nip' => '5638472222',
            'nama' => 'Pegawai 4',
        ]);
        Pegawai::create([
            'nip' => '9848878842',
            'nama' => 'Pegawai 5',
        ]);
    }
}