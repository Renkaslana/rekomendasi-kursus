<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            CourseSeeder::class,
            AhpCriterionSeeder::class,
            AhpCriteriaComparisonSeeder::class,
            CourseCriteriaValueSeeder::class,
        ]);
    }
}
