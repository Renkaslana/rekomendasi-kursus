<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseCriteriaValue;
use App\Models\AhpCriterion;
use Illuminate\Database\Seeder;

class CourseCriteriaValueSeeder extends Seeder
{
    public function run(): void
    {
        $courses = Course::all();
        $criteria = AhpCriterion::all();

        // Kriteria ID
        $interestId = $criteria->where('name', 'Kesesuaian dengan Minat')->first()->id;
        $abilityId = $criteria->where('name', 'Kesesuaian dengan Kemampuan')->first()->id;
        $careerGoalId = $criteria->where('name', 'Kesesuaian dengan Tujuan Karir')->first()->id;
        $priceId = $criteria->where('name', 'Harga')->first()->id;
        $durationId = $criteria->where('name', 'Durasi')->first()->id;

        // Normalisasi harga dan durasi
        $maxPrice = $courses->max('price');
        $maxDuration = $courses->max('duration_hours');

        foreach ($courses as $course) {
            // Nilai acak untuk kesesuaian dengan minat (0.1-1.0)
            CourseCriteriaValue::create([
                'course_id' => $course->id,
                'criteria_id' => $interestId,
                'value' => rand(1, 10) / 10,
            ]);

            // Nilai untuk kesesuaian dengan kemampuan berdasarkan difficulty_level
            $abilityValue = 0;
            if ($course->difficulty_level === 'beginner') {
                $abilityValue = rand(8, 10) / 10; // 0.8-1.0
            } elseif ($course->difficulty_level === 'intermediate') {
                $abilityValue = rand(5, 8) / 10; // 0.5-0.8
            } else { // advanced
                $abilityValue = rand(3, 5) / 10; // 0.3-0.5
            }

            CourseCriteriaValue::create([
                'course_id' => $course->id,
                'criteria_id' => $abilityId,
                'value' => $abilityValue,
            ]);

            // Nilai acak untuk kesesuaian dengan tujuan karir (0.1-1.0)
            CourseCriteriaValue::create([
                'course_id' => $course->id,
                'criteria_id' => $careerGoalId,
                'value' => rand(1, 10) / 10,
            ]);

            // Nilai untuk harga (semakin murah semakin tinggi nilainya)
            // Normalisasi terbalik: 1 - (harga / harga maksimum)
            $priceValue = 1 - ($course->price / $maxPrice);

            CourseCriteriaValue::create([
                'course_id' => $course->id,
                'criteria_id' => $priceId,
                'value' => $priceValue,
            ]);

            // Nilai untuk durasi (semakin singkat semakin tinggi nilainya)
            // Normalisasi terbalik: 1 - (durasi / durasi maksimum)
            $durationValue = 1 - ($course->duration_hours / $maxDuration);

            CourseCriteriaValue::create([
                'course_id' => $course->id,
                'criteria_id' => $durationId,
                'value' => $durationValue,
            ]);
        }
    }
}
