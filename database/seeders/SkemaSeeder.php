<?php

namespace Database\Seeders;

use App\Models\Skema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skema::create([
            'skema' => 'Diselenggarakan Prodi',
        ]);

        Skema::create([
            'skema' => 'Diselenggarakan Fakultas',
        ]);

        Skema::create([
            'skema' => 'Diselenggarakan Universitas',
        ]);
        
        Skema::create([
            'skema' => 'Universitas Lain',
        ]);
    }
}
