<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (!$profileComplete)
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6 rounded-md shadow-sm">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">
                                Profil Anda belum lengkap. Lengkapi profil untuk mendapatkan rekomendasi kursus yang lebih akurat.
                            </p>
                            <div class="mt-2">
                                <div class="flex flex-wrap gap-3">
                                    @if (!$hasInterests)
                                        <a href="{{ route('profile.interests') }}" class="inline-flex items-center px-3 py-1.5 border border-yellow-400 text-xs font-medium rounded-full text-yellow-800 bg-yellow-100 hover:bg-yellow-200 transition">
                                            <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            Tambahkan Minat
                                        </a>
                                    @endif

                                    @if (!$hasAbilities)
                                        <a href="{{ route('profile.abilities') }}" class="inline-flex items-center px-3 py-1.5 border border-yellow-400 text-xs font-medium rounded-full text-yellow-800 bg-yellow-100 hover:bg-yellow-200 transition">
                                            <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            Tambahkan Kemampuan
                                        </a>
                                    @endif

                                    @if (!$hasCareerGoals)
                                        <a href="{{ route('profile.career-goals') }}" class="inline-flex items-center px-3 py-1.5 border border-yellow-400 text-xs font-medium rounded-full text-yellow-800 bg-yellow-100 hover:bg-yellow-200 transition">
                                            <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            Tambahkan Tujuan Karir
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Stats Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <!-- Total Courses -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-primary-100 text-primary-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Total Kursus</p>
                            <p class="text-2xl font-semibold text-gray-900">{{ $inProgressCourses->count() + $completedCourses->count() }}</p>
                        </div>
                    </div>
                </div>

                <!-- Completed Courses -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Kursus Selesai</p>
                            <p class="text-2xl font-semibold text-gray-900">{{ $completedCourses->count() }}</p>
                        </div>
                    </div>
                </div>

                <!-- In Progress Courses -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Sedang Diikuti</p>
                            <p class="text-2xl font-semibold text-gray-900">{{ $inProgressCourses->count() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-semibold mb-4 flex items-center text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            Kursus yang Sedang Diikuti
                        </h3>

                        @if ($inProgressCourses->isEmpty())
                            <div class="text-center py-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <p class="text-gray-500 mb-4">Anda belum mengikuti kursus apapun.</p>
                                <a href="{{ route('courses.index') }}" class="btn-primary inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    Jelajahi Kursus
                                </a>
                            </div>
                        @else
                            <div class="space-y-4">
                                @foreach ($inProgressCourses as $history)
                                    <div class="border rounded-lg p-4 hover:shadow-md transition">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0 w-12 h-12 bg-primary-100 rounded-md flex items-center justify-center text-primary-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                                </svg>
                                            </div>
                                            <div class="ml-4 flex-1">
                                                <h4 class="font-medium text-gray-900">{{ $history->course->title }}</h4>
                                                <div class="flex items-center mt-1 text-sm text-gray-500">
                                                    <span class="bg-primary-100 text-primary-800 text-xs px-2 py-0.5 rounded-full">{{ $history->course->category->name }}</span>
                                                    <span class="mx-2">•</span>
                                                    <span>{{ $history->course->instructor }}</span>
                                                </div>
                                                <div class="mt-3 flex justify-between items-center">
                                                    <a href="{{ route('courses.show', $history->course) }}" class="text-primary-600 hover:text-primary-800 text-sm font-medium flex items-center">
                                                        <span>Lihat Detail</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                        </svg>
                                                    </a>
                                                    <form method="POST" action="{{ route('courses.complete', $history->course) }}">
                                                        @csrf
                                                        <button type="submit" class="inline-flex items-center px-3 py-1.5 border border-green-600 text-xs font-medium rounded-md text-green-700 bg-green-50 hover:bg-green-100 transition">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                            Tandai Selesai
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-semibold mb-4 flex items-center text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Kursus yang Telah Diselesaikan
                        </h3>

                        @if ($completedCourses->isEmpty())
                            <div class="text-center py-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-gray-500">Anda belum menyelesaikan kursus apapun.</p>
                            </div>
                        @else
                            <div class="space-y-4">
                                @foreach ($completedCourses as $history)
                                    <div class="border rounded-lg p-4 hover:shadow-md transition">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-md flex items-center justify-center text-green-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <div class="ml-4 flex-1">
                                                <h4 class="font-medium text-gray-900">{{ $history->course->title }}</h4>
                                                <div class="flex items-center mt-1 text-sm text-gray-500">
                                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-0.5 rounded-full">{{ $history->course->category->name }}</span>
                                                    <span class="mx-2">•</span>
                                                    <span>Selesai pada: {{ $history->completion_date->format('d M Y') }}</span>
                                                </div>

                                                @if ($history->rating)
                                                    <div class="mt-2 flex items-center">
                                                        <div class="flex items-center">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                <svg class="w-4 h-4 {{ $i <= $history->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                                </svg>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="mt-3">
                                                    <a href="{{ route('courses.show', $history->course) }}" class="text-primary-600 hover:text-primary-800 text-sm font-medium flex items-center">
                                                        <span>Lihat Detail</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold flex items-center text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            Rekomendasi Kursus untuk Anda
                        </h3>
                        <a href="{{ route('recommendations.index') }}" class="text-primary-600 hover:text-primary-800 text-sm font-medium flex items-center">
                            <span>Lihat Semua</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    @if ($profileComplete)
                        @if ($recommendedCourses->isEmpty())
                            <div class="text-center py-8">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                                <p class="text-gray-500">Belum ada rekomendasi kursus untuk Anda. Lengkapi profil atau ikuti beberapa kursus untuk mendapatkan rekomendasi.</p>
                            </div>
                        @else
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach ($recommendedCourses->take(6) as $course)
                                    <div class="border rounded-lg overflow-hidden hover:shadow-md transition">
                                        <div class="h-40 bg-gray-200">
                                            @if ($course->image_url)
                                                <img src="{{ $course->image_url }}" alt="{{ $course->title }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-gray-400">
                                                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                    </svg>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="p-4">
                                            <div class="flex items-center justify-between mb-2">
                                                <span class="px-2 py-1 bg-primary-100 text-primary-800 text-xs rounded-full">{{ $course->category->name }}</span>
                                                <span class="text-xs text-gray-500">{{ $course->duration_hours }} jam</span>
                                            </div>
                                            <h3 class="font-medium text-lg mb-1 truncate">{{ $course->title }}</h3>
                                            <p class="text-sm text-gray-500 mb-2 truncate">{{ $course->instructor }}</p>
                                            <div class="flex items-center justify-between mt-4">
                                                <span class="text-primary-600 font-semibold">Rp {{ number_format($course->price, 0, ',', '.') }}</span>
                                                <a href="{{ route('courses.show', $course) }}" class="btn-primary text-sm py-1 px-3">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @else
                        <div class="text-center py-8 bg-gray-50 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            <p class="text-gray-600 mb-4">Lengkapi profil Anda untuk mendapatkan rekomendasi kursus yang sesuai.</p>
                            <div class="flex flex-wrap justify-center gap-3">
                                @if (!$hasInterests)
                                    <a href="{{ route('profile.interests') }}" class="btn-primary text-sm py-2 px-4">
                                        Tambahkan Minat
                                    </a>
                                @endif

                                @if (!$hasAbilities)
                                    <a href="{{ route('profile.abilities') }}" class="btn-primary text-sm py-2 px-4">
                                        Tambahkan Kemampuan
                                    </a>
                                @endif

                                @if (!$hasCareerGoals)
                                    <a href="{{ route('profile.career-goals') }}" class="btn-primary text-sm py-2 px-4">
                                        Tambahkan Tujuan Karir
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
