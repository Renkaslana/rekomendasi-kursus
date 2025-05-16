<?php

namespace Database\Seeders;

use App\Models\AhpCriteriaComparison;
use App\Models\AhpCriterion;
use Illuminate\Database\Seeder;

class AhpCriteriaComparisonSeeder extends Seeder
{
    public function run(): void
    {
        $criteria = AhpCriterion::all();

        // Matriks perbandingan berpasangan
        $comparisonMatrix = [
            // Minat vs lainnya
            [1, 1, 3, 5, 5], // Minat vs Minat, Kemampuan, Karir, Harga, Durasi

            // Kemampuan vs lainnya
            [1, 1, 2, 3, 3], // Kemampuan vs Minat, Kemampuan, Karir, Harga, Durasi

            // Karir vs lainnya
            [1/3, 1/2, 1, 3, 3], // Karir vs Minat, Kemampuan, Karir, Harga, Durasi

            // Harga vs lainnya
            [1/5, 1/3, 1/3, 1, 1], // Harga vs Minat, Kemampuan, Karir, Harga, Durasi

            // Durasi vs lainnya
            [1/5, 1/3, 1/3, 1, 1], // Durasi vs Minat, Kemampuan, Karir, Harga, Durasi
        ];

        // Simpan perbandingan ke database
        for ($i = 0; $i < count($criteria); $i++) {
            for ($j = 0; $j < count($criteria); $j++) {
                AhpCriteriaComparison::create([
                    'criteria_id_1' => $criteria[$i]->id,
                    'criteria_id_2' => $criteria[$j]->id,
                    'value' => $comparisonMatrix[$i][$j],
                ]);
            }
        }
    }
}
