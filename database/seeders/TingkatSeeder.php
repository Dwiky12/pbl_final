<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tingkat;

class TingkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tingkat::create([
            'tingkatan' => 'Nasional',
        ]);

        Tingkat::create([
            'tingkatan' => 'Internasional',
        ]
    );
    }
}