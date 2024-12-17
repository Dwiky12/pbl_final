<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JenisAkreditasi;

class JenisAkreditasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        JenisAkreditasi::create([
            'akreditasi' => 'A',
        ]);

        JenisAkreditasi::create([
            'akreditasi' => 'B',
        ]);

        JenisAkreditasi::create([
            'akreditasi' => 'C',
        ]);

        JenisAkreditasi::create([
            'akreditasi' => 'Unggul',
        ]);

        JenisAkreditasi::create([
            'akreditasi' => 'Baik Sekali',
        ]);

        JenisAkreditasi::create([
            'akreditasi' => 'Baik',
        ]);

        JenisAkreditasi::create([
            'akreditasi' => 'Internasional',
        ]);
    }
}