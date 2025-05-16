<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            // Pemrograman Web
            [
                'title' => 'Belajar HTML, CSS, dan JavaScript dari Dasar',
                'description' => 'Kursus ini mengajarkan dasar-dasar pengembangan web front-end menggunakan HTML, CSS, dan JavaScript. Anda akan belajar cara membuat halaman web yang responsif dan interaktif.',
                'category_id' => 1,
                'instructor' => 'Budi Santoso',
                'duration_hours' => 20,
                'price' => 250000,
                'difficulty_level' => 'beginner',
                'course_url' => 'https://example.com/courses/html-css-js',
                'keywords' => json_encode(['html', 'css', 'javascript', 'frontend', 'web development']),
            ],
            [
                'title' => 'Laravel untuk Pemula',
                'description' => 'Kursus ini mengajarkan cara membuat aplikasi web menggunakan framework Laravel. Anda akan belajar konsep MVC, routing, database, dan fitur-fitur Laravel lainnya.',
                'category_id' => 1,
                'instructor' => 'Dewi Putri',
                'duration_hours' => 25,
                'price' => 350000,
                'difficulty_level' => 'beginner',
                'course_url' => 'https://example.com/courses/laravel-beginner',
                'keywords' => json_encode(['php', 'laravel', 'mvc', 'backend', 'web development']),
            ],
            [
                'title' => 'React.js untuk Aplikasi Web Modern',
                'description' => 'Kursus ini mengajarkan cara membuat aplikasi web modern menggunakan React.js. Anda akan belajar tentang komponen, state, props, dan hooks.',
                'category_id' => 1,
                'instructor' => 'Andi Wijaya',
                'duration_hours' => 30,
                'price' => 400000,
                'difficulty_level' => 'intermediate',
                'course_url' => 'https://example.com/courses/react-js',
                'keywords' => json_encode(['javascript', 'react', 'frontend', 'web development', 'spa']),
            ],
            [
                'title' => 'Full Stack Web Development dengan MERN Stack',
                'description' => 'Kursus ini mengajarkan pengembangan web full stack menggunakan MongoDB, Express.js, React.js, dan Node.js (MERN Stack).',
                'category_id' => 1,
                'instructor' => 'Rudi Hartono',
                'duration_hours' => 40,
                'price' => 500000,
                'difficulty_level' => 'advanced',
                'course_url' => 'https://example.com/courses/mern-stack',
                'keywords' => json_encode(['javascript', 'react', 'node.js', 'mongodb', 'express', 'fullstack']),
            ],

            // Pemrograman Mobile
            [
                'title' => 'Android Development untuk Pemula',
                'description' => 'Kursus ini mengajarkan dasar-dasar pengembangan aplikasi Android menggunakan Java. Anda akan belajar tentang Activity, Fragment, dan komponen Android lainnya.',
                'category_id' => 2,
                'instructor' => 'Siti Rahayu',
                'duration_hours' => 25,
                'price' => 350000,
                'difficulty_level' => 'beginner',
                'course_url' => 'https://example.com/courses/android-beginner',
                'keywords' => json_encode(['android', 'java', 'mobile development']),
            ],
            [
                'title' => 'iOS Development dengan Swift',
                'description' => 'Kursus ini mengajarkan cara membuat aplikasi iOS menggunakan bahasa pemrograman Swift. Anda akan belajar tentang UIKit, Auto Layout, dan komponen iOS lainnya.',
                'category_id' => 2,
                'instructor' => 'Dian Permata',
                'duration_hours' => 30,
                'price' => 450000,
                'difficulty_level' => 'intermediate',
                'course_url' => 'https://example.com/courses/ios-swift',
                'keywords' => json_encode(['ios', 'swift', 'mobile development', 'apple']),
            ],
            [
                'title' => 'Flutter untuk Aplikasi Cross-Platform',
                'description' => 'Kursus ini mengajarkan cara membuat aplikasi mobile cross-platform menggunakan Flutter. Anda akan belajar tentang widget, state management, dan fitur Flutter lainnya.',
                'category_id' => 2,
                'instructor' => 'Agus Setiawan',
                'duration_hours' => 35,
                'price' => 400000,
                'difficulty_level' => 'intermediate',
                'course_url' => 'https://example.com/courses/flutter',
                'keywords' => json_encode(['flutter', 'dart', 'mobile development', 'cross-platform']),
            ],

            // Data Science
            [
                'title' => 'Pengantar Data Science dengan Python',
                'description' => 'Kursus ini mengajarkan dasar-dasar data science menggunakan Python. Anda akan belajar tentang NumPy, Pandas, dan visualisasi data.',
                'category_id' => 3,
                'instructor' => 'Hendra Gunawan',
                'duration_hours' => 25,
                'price' => 350000,
                'difficulty_level' => 'beginner',
                'course_url' => 'https://example.com/courses/data-science-python',
                'keywords' => json_encode(['python', 'data science', 'numpy', 'pandas', 'data visualization']),
            ],
            [
                'title' => 'Machine Learning untuk Pemula',
                'description' => 'Kursus ini mengajarkan dasar-dasar machine learning. Anda akan belajar tentang supervised learning, unsupervised learning, dan model evaluasi.',
                'category_id' => 3,
                'instructor' => 'Maya Sari',
                'duration_hours' => 30,
                'price' => 450000,
                'difficulty_level' => 'intermediate',
                'course_url' => 'https://example.com/courses/machine-learning-beginner',
                'keywords' => json_encode(['machine learning', 'python', 'data science', 'ai']),
            ],
            [
                'title' => 'Deep Learning dengan TensorFlow',
                'description' => 'Kursus ini mengajarkan deep learning menggunakan TensorFlow. Anda akan belajar tentang neural networks, CNN, RNN, dan implementasinya.',
                'category_id' => 3,
                'instructor' => 'Irfan Hakim',
                'duration_hours' => 40,
                'price' => 550000,
                'difficulty_level' => 'advanced',
                'course_url' => 'https://example.com/courses/deep-learning-tensorflow',
                'keywords' => json_encode(['deep learning', 'tensorflow', 'neural networks', 'ai', 'machine learning']),
            ],

            // Desain UI/UX
            [
                'title' => 'Dasar-dasar Desain UI/UX',
                'description' => 'Kursus ini mengajarkan prinsip-prinsip dasar desain UI/UX. Anda akan belajar tentang user research, wireframing, dan prototyping.',
                'category_id' => 4,
                'instructor' => 'Nina Wati',
                'duration_hours' => 20,
                'price' => 300000,
                'difficulty_level' => 'beginner',
                'course_url' => 'https://example.com/courses/ui-ux-basics',
                'keywords' => json_encode(['ui', 'ux', 'design', 'user research', 'wireframing']),
            ],
            [
                'title' => 'Desain UI dengan Figma',
                'description' => 'Kursus ini mengajarkan cara mendesain antarmuka pengguna menggunakan Figma. Anda akan belajar tentang komponen, styles, dan kolaborasi.',
                'category_id' => 4,
                'instructor' => 'Rina Marlina',
                'duration_hours' => 25,
                'price' => 350000,
                'difficulty_level' => 'intermediate',
                'course_url' => 'https://example.com/courses/ui-figma',
                'keywords' => json_encode(['ui', 'figma', 'design', 'prototyping']),
            ],

            // Digital Marketing
            [
                'title' => 'Dasar-dasar Digital Marketing',
                'description' => 'Kursus ini mengajarkan dasar-dasar pemasaran digital. Anda akan belajar tentang SEO, SEM, media sosial, dan email marketing.',
                'category_id' => 5,
                'instructor' => 'Dodi Prakoso',
                'duration_hours' => 20,
                'price' => 300000,
                'difficulty_level' => 'beginner',
                'course_url' => 'https://example.com/courses/digital-marketing-basics',
                'keywords' => json_encode(['digital marketing', 'seo', 'sem', 'social media', 'email marketing']),
            ],
            [
                'title' => 'SEO untuk Meningkatkan Peringkat Website',
                'description' => 'Kursus ini mengajarkan strategi SEO untuk meningkatkan peringkat website di mesin pencari. Anda akan belajar tentang on-page SEO, off-page SEO, dan technical SEO.',
                'category_id' => 5,
                'instructor' => 'Lia Kusuma',
                'duration_hours' => 25,
                'price' => 350000,
                'difficulty_level' => 'intermediate',
                'course_url' => 'https://example.com/courses/seo-strategy',
                'keywords' => json_encode(['seo', 'digital marketing', 'website', 'search engine']),
            ],

            // Bisnis dan Kewirausahaan
            [
                'title' => 'Memulai Bisnis dari Nol',
                'description' => 'Kursus ini mengajarkan cara memulai bisnis dari nol. Anda akan belajar tentang validasi ide, business model canvas, dan strategi pemasaran.',
                'category_id' => 6,
                'instructor' => 'Anton Wijaya',
                'duration_hours' => 20,
                'price' => 300000,
                'difficulty_level' => 'beginner',
                'course_url' => 'https://example.com/courses/start-business',
                'keywords' => json_encode(['business', 'entrepreneurship', 'startup', 'marketing']),
            ],
            [
                'title' => 'Financial Management untuk Bisnis Kecil',
                'description' => 'Kursus ini mengajarkan cara mengelola keuangan untuk bisnis kecil. Anda akan belajar tentang budgeting, cash flow, dan financial statement.',
                'category_id' => 6,
                'instructor' => 'Sari Indah',
                'duration_hours' => 25,
                'price' => 350000,
                'difficulty_level' => 'intermediate',
                'course_url' => 'https://example.com/courses/financial-management',
                'keywords' => json_encode(['finance', 'business', 'accounting', 'cash flow']),
            ],

            // Pengembangan Game
            [
                'title' => 'Membuat Game dengan Unity untuk Pemula',
                'description' => 'Kursus ini mengajarkan cara membuat game menggunakan Unity. Anda akan belajar tentang game objects, scripting, dan physics.',
                'category_id' => 7,
                'instructor' => 'Reza Pratama',
                'duration_hours' => 30,
                'price' => 400000,
                'difficulty_level' => 'beginner',
                'course_url' => 'https://example.com/courses/unity-beginner',
                'keywords' => json_encode(['unity', 'game development', 'c#', '3d', '2d']),
            ],
            [
                'title' => 'Pengembangan Game Mobile dengan Godot',
                'description' => 'Kursus ini mengajarkan cara membuat game mobile menggunakan Godot Engine. Anda akan belajar tentang nodes, scenes, dan GDScript.',
                'category_id' => 7,
                'instructor' => 'Dimas Putra',
                'duration_hours' => 25,
                'price' => 350000,
                'difficulty_level' => 'intermediate',
                'course_url' => 'https://example.com/courses/godot-mobile',
                'keywords' => json_encode(['godot', 'game development', 'mobile', '2d']),
            ],

            // Keamanan Cyber
            [
                'title' => 'Dasar-dasar Keamanan Cyber',
                'description' => 'Kursus ini mengajarkan dasar-dasar keamanan cyber. Anda akan belajar tentang ancaman umum, enkripsi, dan praktik keamanan terbaik.',
                'category_id' => 8,
                'instructor' => 'Bima Sakti',
                'duration_hours' => 20,
                'price' => 350000,
                'difficulty_level' => 'beginner',
                'course_url' => 'https://example.com/courses/cyber-security-basics',
                'keywords' => json_encode(['cyber security', 'encryption', 'network security', 'information security']),
            ],
            [
                'title' => 'Ethical Hacking dan Penetration Testing',
                'description' => 'Kursus ini mengajarkan ethical hacking dan penetration testing. Anda akan belajar tentang reconnaissance, scanning, dan exploitation.',
                'category_id' => 8,
                'instructor' => 'Fajar Ramadhan',
                'duration_hours' => 35,
                'price' => 500000,
                'difficulty_level' => 'advanced',
                'course_url' => 'https://example.com/courses/ethical-hacking',
                'keywords' => json_encode(['ethical hacking', 'penetration testing', 'cyber security', 'network security']),
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
