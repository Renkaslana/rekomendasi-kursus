<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-2 rounded-lg mr-3 shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>
            </div>
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                {{ __('Tujuan Karir & Aspirasi') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-b from-gray-50 to-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Progress Tracker -->
            <div class="mb-8 px-4 sm:px-0">
                <div class="flex justify-between mb-2">
                    <span class="text-sm font-medium text-gray-700">Profil Lengkap</span>
                    <span class="text-sm font-medium text-gray-700" id="profile-percentage">0%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 h-2.5 rounded-full" style="width: 0%" id="profile-progress"></div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg border border-gray-200">
                <div class="p-6 bg-gradient-to-br from-white to-gray-50">
                    @if (session('success'))
                        <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6 rounded-r-md shadow-sm animate-fade-in-down">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-green-700 font-medium">
                                        {{ session('success') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="mb-8">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 p-2 rounded-full mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Tujuan Karir Anda</h3>
                                <p class="text-gray-600">Tentukan tujuan karir untuk mendapatkan rekomendasi kursus yang lebih relevan</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mb-6 ml-10 pl-2 border-l-2 border-blue-200">Tujuan karir akan membantu kami menyesuaikan rekomendasi kursus dengan aspirasi profesional Anda</p>
                    </div>

                    @if ($careerGoals->isEmpty())
                        <div class="bg-blue-50 border border-blue-100 rounded-lg p-6 mb-8 text-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-medium text-gray-800 mb-2">Belum Ada Tujuan Karir</h4>
                            <p class="text-gray-600 mb-4">Anda belum menambahkan tujuan karir. Tambahkan tujuan karir untuk mendapatkan rekomendasi kursus yang lebih relevan.</p>
                            <a href="#add-goal" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Tambah Tujuan Karir Sekarang
                            </a>
                        </div>
                    @else
                        <div class="space-y-4 mb-8">
                            @foreach ($careerGoals as $goal)
                                <div class="bg-gradient-to-r from-blue-50 to-white border border-gray-200 rounded-lg hover:shadow-md transition-shadow duration-300">
                                    <div class="p-5">
                                        <div class="flex justify-between">
                                            <div class="flex-1">
                                                <div class="flex items-center">
                                                    <div class="bg-blue-100 p-2 rounded-lg mr-3 shadow-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                                        </svg>
                                                    </div>
                                                    <h4 class="text-xl font-medium text-gray-900">{{ $goal->title }}</h4>
                                                </div>
                                                <p class="text-gray-600 mt-2 ml-11">{{ $goal->description }}</p>
                                                <div class="mt-3 ml-11">
                                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                        </svg>
                                                        Prioritas: {{ $goal->priority }}/10
                                                    </span>
                                                </div>
                                            </div>
                                            <form method="POST" action="{{ route('profile.career-goals.destroy', $goal) }}" class="flex items-start">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="p-2 text-red-600 hover:text-red-800 hover:bg-red-50 rounded-full transition-colors" onclick="return confirm('Apakah Anda yakin ingin menghapus tujuan karir ini?')">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <div class="border-t pt-8" id="add-goal">
                        <div class="flex items-center mb-6">
                            <div class="bg-indigo-100 p-2 rounded-full mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800">Tambah Tujuan Karir Baru</h3>
                                <p class="text-gray-600">Definisikan tujuan karir baru untuk meningkatkan rekomendasi kursus</p>
                            </div>
                        </div>

                        <form method="POST" action="{{ route('profile.career-goals.store') }}" id="career-goal-form" class="bg-gradient-to-r from-indigo-50 to-white border border-gray-200 rounded-lg p-6">
                            @csrf

                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Tujuan Karir</label>
                                <input type="text" id="title" name="title" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Contoh: Menjadi Full Stack Developer" required>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                                <textarea id="description" name="description" rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Jelaskan tujuan karir Anda secara detail..."></textarea>
                            </div>

                            <div class="mb-6">
                                <label for="priority" class="block text-sm font-medium text-gray-700 mb-2">Prioritas (1-10)</label>
                                <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                    <input
                                        type="range"
                                        id="priority"
                                        name="priority"
                                        min="1"
                                        max="10"
                                        value="5"
                                        class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-indigo-600"
                                        oninput="document.getElementById('priority-value').textContent = this.value"
                                    >
                                    <div class="flex justify-between text-xs text-gray-500 mt-1">
                                        <span>Rendah</span>
                                        <span class="bg-indigo-500 text-white px-2 py-1 rounded-full text-xs font-bold" id="priority-value">5</span>
                                        <span>Tinggi</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Tombol Simpan yang Menonjol -->
                            <div class="flex justify-end">
                                <button type="submit" class="relative overflow-hidden group px-6 py-3 text-base font-bold text-white bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105">
                                    <div class="absolute inset-0 w-full h-full bg-white/20 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                                    <div class="flex items-center relative z-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                        <span class="tracking-wider">TAMBAH TUJUAN KARIR</span>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('career-goal-form');
            const profileProgress = document.getElementById('profile-progress');
            const profilePercentage = document.getElementById('profile-percentage');

            // Set progress based on number of career goals
            const goalCount = {{ $careerGoals->count() }};
            const progress = Math.min(100, goalCount > 0 ? 50 : 0);
            profileProgress.style.width = `${progress}%`;
            profilePercentage.textContent = `${progress}%`;

            // Animasi saat tombol simpan diklik
            form.addEventListener('submit', function() {
                const submitButton = form.querySelector('button[type="submit"]');
                submitButton.classList.add('scale-95');
                submitButton.innerHTML = `
                    <div class="flex items-center justify-center">
                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span>MENYIMPAN...</span>
                    </div>
                `;
            });

            // Smooth scroll to add goal section when clicking the button
            document.querySelector('a[href="#add-goal"]')?.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('#add-goal').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <style>
        @keyframes fade-in-down {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-down {
            animation: fade-in-down 0.5s ease-out;
        }
    </style>
</x-app-layout>
