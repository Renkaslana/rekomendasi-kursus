<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Pemrograman Web',
                'description' => 'Kursus tentang pengembangan aplikasi web menggunakan berbagai bahasa dan framework',
            ],
            [
                'name' => 'Pemrograman Mobile',
                'description' => 'Kursus tentang pengembangan aplikasi mobile untuk Android dan iOS',
            ],
            [
                'name' => 'Data Science',
                'description' => 'Kursus tentang analisis data, machine learning, dan kecerdasan buatan',
            ],
            [
                'name' => 'Desain UI/UX',
                'description' => 'Kursus tentang desain antarmuka pengguna dan pengalaman pengguna',
            ],
            [
                'name' => 'Digital Marketing',
                'description' => 'Kursus tentang pemasaran digital, SEO, dan media sosial',
            ],
            [
                'name' => 'Bisnis dan Kewirausahaan',
                'description' => 'Kursus tentang memulai dan mengelola bisnis',
            ],
            [
                'name' => 'Pengembangan Game',
                'description' => 'Kursus tentang pengembangan game untuk berbagai platform',
            ],
            [
                'name' => 'Keamanan Cyber',
                'description' => 'Kursus tentang keamanan informasi dan jaringan',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
