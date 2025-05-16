<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rekomendasi Kursus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Kursus yang Direkomendasikan untuk Anda</h3>
                        <p class="text-gray-600">Berdasarkan minat, kemampuan, dan tujuan karir Anda</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($recommendedCourses as $course)
                            <div class="border rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                                <div class="h-48 bg-gray-200 relative">
                                    @if ($course->image_url)
                                        <img src="{{ $course->image_url }}" alt="{{ $course->title }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-gray-400">
                                            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    @endif
                                    <div class="absolute top-3 right-3">
                                        <span class="px-2 py-1 bg-primary-100 text-primary-800 text-xs rounded-full font-medium">{{ $course->category->name }}</span>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span class="text-xs text-gray-500">{{ $course->duration_hours }} jam</span>
                                        </div>
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                            </svg>
                                            <span class="text-xs text-gray-500">{{ ucfirst($course->difficulty_level) }}</span>
                                        </div>
                                    </div>
                                    <h3 class="font-semibold text-lg mb-1 text-gray-900 hover:text-primary-600 transition">{{ $course->title }}</h3>
                                    <p class="text-sm text-gray-500 mb-3 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        {{ $course->instructor }}
                                    </p>
                                    <div class="border-t pt-3 mt-3">
                                        <div class="flex items-center justify-between">
                                            <span class="text-primary-600 font-bold text-lg">Rp {{ number_format($course->price, 0, ',', '.') }}</span>
                                            <a href="{{ route('courses.show', $course) }}" class="btn-primary text-sm py-2 px-4">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mt-8 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Bagaimana Rekomendasi Ini Dibuat?</h3>
                        <p class="text-gray-600">Sistem kami menggunakan dua algoritma utama untuk memberikan rekomendasi kursus yang paling sesuai dengan Anda:</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="border rounded-lg p-6 hover:shadow-md transition">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center text-primary-600 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-900">Content-Based Filtering</h4>
                            </div>
                            <p class="text-gray-600">Algoritma ini menganalisis kursus yang pernah Anda ikuti dan mencari kursus lain dengan karakteristik serupa. Ini mempertimbangkan kata kunci, kategori, dan atribut lain untuk menemukan kursus yang sesuai dengan minat Anda.</p>
                        </div>

                        <div class="border rounded-lg p-6 hover:shadow-md transition">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center text-primary-600 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-900">Analytical Hierarchy Process (AHP)</h4>
                            </div>
                            <p class="text-gray-600">AHP adalah metode pengambilan keputusan multi-kriteria yang membantu menentukan prioritas kursus berdasarkan berbagai kriteria seperti kesesuaian dengan minat, kemampuan, tujuan karir, harga, dan durasi.</p>
                        </div>
                    </div>

                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <p class="text-gray-600">Untuk mendapatkan rekomendasi yang lebih akurat, pastikan untuk:</p>
                        <ul class="mt-2 space-y-2">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700">Melengkapi profil minat, kemampuan, dan tujuan karir Anda</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 
