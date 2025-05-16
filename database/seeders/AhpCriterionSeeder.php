<?php

namespace Database\Seeders;

use App\Models\AhpCriterion;
use Illuminate\Database\Seeder;

class AhpCriterionSeeder extends Seeder
{
    public function run(): void
    {
        $criteria = [
            [
                'name' => 'Kesesuaian dengan Minat',
                'description' => 'Seberapa sesuai kursus dengan minat pengguna',
                'weight' => 0.35, // Bobot hasil perhitungan AHP
            ],
            [
                'name' => 'Kesesuaian dengan Kemampuan',
                'description' => 'Seberapa sesuai tingkat kesulitan kursus dengan kemampuan pengguna',
                'weight' => 0.25, // Bobot hasil perhitungan AHP
            ],
            [
                'name' => 'Kesesuaian dengan Tujuan Karir',
                'description' => 'Seberapa sesuai kursus dengan tujuan karir pengguna',
                'weight' => 0.20, // Bobot hasil perhitungan AHP
            ],
            [
                'name' => 'Harga',
                'description' => 'Harga kursus (semakin murah semakin baik)',
                'weight' => 0.10, // Bobot hasil perhitungan AHP
            ],
            [
                'name' => 'Durasi',
                'description' => 'Durasi kursus (semakin singkat semakin baik)',
                'weight' => 0.10, // Bobot hasil perhitungan AHP
            ],
        ];

        foreach ($criteria as $criterion) {
            AhpCriterion::create($criterion);
        }
    }
}
