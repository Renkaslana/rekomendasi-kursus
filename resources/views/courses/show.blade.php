<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <a href="{{ route('courses.index') }}" class="mr-2 text-gray-500 hover:text-primary-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detail Kursus') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6 rounded-md shadow-sm">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-green-700">
                                {{ session('success') }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="md:col-span-2">
                            <div class="mb-8">
                                <div class="flex items-center mb-4">
                                    <span class="px-3 py-1 bg-primary-100 text-primary-800 text-sm rounded-full font-medium">{{ $course->category->name }}</span>
                                    <span class="mx-2 text-gray-300">•</span>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                        </svg>
                                        <span>{{ ucfirst($course->difficulty_level) }}</span>
                                    </div>
                                </div>

                                <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $course->title }}</h1>

                                <div class="flex items-center text-gray-600 mb-6">
                                    <div class="flex items-center mr-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <span>{{ $course->instructor }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ $course->duration_hours }} jam</span>
                                    </div>
                                </div>

                                <div class="h-80 bg-gray-200 rounded-lg mb-8 overflow-hidden">
                                    @if ($course->image_url)
                                        <img src="{{ $course->image_url }}" alt="{{ $course->title }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-gray-400">
                                            <svg class="w-24 h-24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <div class="prose max-w-none">
                                    <h3 class="text-xl font-semibold mb-4 text-gray-900">Deskripsi Kursus</h3>
                                    <p class="text-gray-700 leading-relaxed">{{ $course->description }}</p>
                                </div>

                                <div class="mt-8 pt-8 border-t border-gray-200">
                                    <h3 class="text-xl font-semibold mb-4 text-gray-900">Apa yang akan Anda pelajari</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-gray-700">Memahami konsep dasar {{ $course->category->name }}</span>
                                        </div>
                                        <div class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-gray-700">Mengembangkan keterampilan praktis</span>
                                        </div>
                                        <div class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-gray-700">Menerapkan pengetahuan dalam proyek nyata</span>
                                        </div>
                                        <div class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-gray-700">Mempersiapkan diri untuk karir di bidang {{ $course->category->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if ($courseHistory && $courseHistory->completion_date)
                                <div class="mt-8 pt-8 border-t border-gray-200">
                                    <h3 class="text-xl font-semibold mb-6 text-gray-900">Ulasan Anda</h3>

                                    @if ($courseHistory->rating)
                                        <div class="bg-gray-50 rounded-lg p-6 mb-6">
                                            <div class="flex items-center mb-4">
                                                <div class="flex items-center">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <svg class="w-5 h-5 {{ $i <= $courseHistory->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                        </svg>
                                                    @endfor
                                                </div>
                                                <span class="ml-2 text-gray-600 font-medium">{{ $courseHistory->rating }}/5</span>
                                                <span class="ml-auto text-sm text-gray-500">{{ $courseHistory->completion_date->format('d M Y') }}</span>
                                            </div>

                                            @if ($courseHistory->review)
                                                <p class="text-gray-700">{{ $courseHistory->review }}</p>
                                            @else
                                                <p class="text-gray-500 italic">Tidak ada komentar.</p>
                                            @endif

                                            <button class="mt-4 text-primary-600 hover:text-primary-800 text-sm font-medium flex items-center" onclick="document.getElementById('review-form').classList.toggle('hidden')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                                Edit Ulasan
                                            </button>
                                        </div>
                                    @else
                                        <p class="text-gray-500 mb-4">Anda belum memberikan ulasan untuk kursus ini.</p>
                                    @endif

                                    <div id="review-form" class="{{ $courseHistory->rating ? 'hidden' : '' }}">
                                        <form method="POST" action="{{ route('courses.rate', $course) }}" class="bg-white rounded-lg border p-6">
                                            @csrf

                                            <div class="mb-6">
                                                <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                                                <div class="flex items-center">
                                                    <div class="flex space-x-1">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <label for="rating-{{ $i }}" class="cursor-pointer">
                                                                <input type="radio" name="rating" id="rating-{{ $i }}" value="{{ $i }}" class="sr-only peer" {{ ($courseHistory->rating ?? 0) == $i ? 'checked' : '' }}>
                                                                <svg class="w-10 h-10 text-gray-300 peer-checked:text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                                </svg>
                                                            </label>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-6">
                                                <label for="review" class="block text-sm font-medium text-gray-700 mb-2">Ulasan</label>
                                                <textarea id="review" name="review" rows="4" class="form-input" placeholder="Bagikan pengalaman Anda tentang kursus ini...">{{ $courseHistory->review ?? '' }}</textarea>
                                            </div>

                                            <div class="flex justify-end">
                                                <button type="button" onclick="document.getElementById('review-form').classList.add('hidden')" class="mr-3 px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                                    Batal
                                                </button>
                                                <button type="submit" class="btn-primary">
                                                    Simpan Ulasan
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div>
                            <div class="bg-white border rounded-lg shadow-sm sticky top-6">
                                <div class="p-6">
                                    <div class="mb-6">
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-2xl font-bold text-primary-600">Rp {{ number_format($course->price, 0, ',', '.') }}</h3>
                                        </div>
                                        <div class="flex items-center text-sm text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>Durasi: {{ $course->duration_hours }} jam</span>
                                        </div>
                                    </div>

                                    <div class="space-y-4">
                                        @if (!$courseHistory)
                                            <form method="POST" action="{{ route('courses.enroll', $course) }}">
                                                @csrf
                                                <button type="submit" class="w-full btn-primary py-3 flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                    </svg>
                                                    Daftar Kursus
                                                </button>
                                            </form>
                                        @elseif (!$courseHistory->completion_date)
                                            <form method="POST" action="{{ route('courses.complete', $course) }}">
                                                @csrf
                                                <button type="submit" class="w-full btn-primary py-3 flex items-center justify-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                    Tandai Selesai
                                                </button>
                                            </form>
                                        @else
                                            <div class="bg-green-50 border border-green-200 rounded-md p-4 text-center">
                                                <svg class="w-8 h-8 text-green-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <p class="text-green-700 font-medium">Anda telah menyelesaikan kursus ini</p>
                                                <p class="text-sm text-green-600 mt-1">{{ $courseHistory->completion_date->format('d M Y') }}</p>
                                            </div>
                                        @endif

                                        <a href="{{ $course->course_url }}" target="_blank" class="w-full flex items-center justify-center py-3 px-4 border border-primary-600 text-primary-600 rounded-md hover:bg-primary-50 transition">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                            Kunjungi Situs Kursus
                                        </a>
                                    </div>
                                </div>

                                <div class="px-6 pb-6">
                                    <h4 class="font-medium text-gray-900 mb-3">Kursus ini mencakup:</h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-gray-700">{{ $course->duration_hours }} jam materi video</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-gray-700">Akses seumur hidup</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-gray-700">Sertifikat penyelesaian</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-gray-700">Proyek praktis</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
