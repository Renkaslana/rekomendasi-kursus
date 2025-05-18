<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="bg-gradient-to-r from-purple-600 to-pink-600 p-2 rounded-lg mr-3 shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                </svg>
            </div>
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                {{ __('Minat & Preferensi Belajar') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-b from-purple-50 via-pink-50 to-blue-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Progress Tracker -->
            <div class="mb-8 px-4 sm:px-0">
                <div class="flex justify-between mb-2">
                    <span class="text-sm font-medium text-gray-700">Profil Lengkap</span>
                    <span class="text-sm font-medium text-gray-700" id="profile-percentage">0%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5 shadow-inner">
                    <div class="bg-gradient-to-r from-purple-600 to-pink-600 h-2.5 rounded-full shadow-sm" style="width: 0%" id="profile-progress"></div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-white via-purple-50 to-pink-50 overflow-hidden shadow-xl sm:rounded-xl border border-purple-100">
                <div class="relative">
                    <!-- Decorative Elements -->
                    <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-pink-200 to-purple-200 rounded-bl-full opacity-30 -z-10"></div>
                    <div class="absolute bottom-0 left-0 w-40 h-40 bg-gradient-to-tr from-blue-200 to-indigo-200 rounded-tr-full opacity-30 -z-10"></div>

                    <div class="p-8 relative z-10">
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
                                <div class="bg-gradient-to-br from-purple-500 to-pink-500 p-3 rounded-lg mr-4 shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-pink-600">Pilih Minat Anda</h3>
                                    <p class="text-gray-600">Tentukan tingkat minat Anda untuk setiap kategori (1-10)</p>
                                </div>
                            </div>
                            <div class="ml-14 pl-2 border-l-2 border-purple-300 mb-6">
                                <p class="text-sm text-gray-500">Semakin tinggi nilai yang Anda pilih, semakin banyak rekomendasi kursus yang akan Anda terima untuk kategori tersebut</p>
                            </div>
                        </div>

                        <form method="POST" action="{{ route('profile.interests.store') }}" id="interests-form">
                            @csrf

                            <div class="space-y-6 mb-10">
                                @foreach ($categories as $category)
                                    <div class="bg-gradient-to-r
                                        @if($loop->iteration % 5 == 1) from-purple-100 to-pink-50
                                        @elseif($loop->iteration % 5 == 2) from-pink-100 to-rose-50
                                        @elseif($loop->iteration % 5 == 3) from-blue-100 to-indigo-50
                                        @elseif($loop->iteration % 5 == 4) from-green-100 to-emerald-50
                                        @else from-amber-100 to-yellow-50
                                        @endif
                                        border border-gray-200 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 overflow-hidden">
                                        <div class="p-6">
                                            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                                <div class="flex-1">
                                                    <div class="flex items-center">
                                                        <div class="
                                                            @if($loop->iteration % 5 == 1) bg-gradient-to-br from-purple-500 to-pink-500
                                                            @elseif($loop->iteration % 5 == 2) bg-gradient-to-br from-pink-500 to-rose-500
                                                            @elseif($loop->iteration % 5 == 3) bg-gradient-to-br from-blue-500 to-indigo-500
                                                            @elseif($loop->iteration % 5 == 4) bg-gradient-to-br from-green-500 to-emerald-500
                                                            @else bg-gradient-to-br from-amber-500 to-yellow-500
                                                            @endif
                                                            p-3 rounded-lg mr-4 shadow-md
                                                        ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                @if($loop->iteration % 8 == 1)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                                @elseif($loop->iteration % 8 == 2)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                                                @elseif($loop->iteration % 8 == 3)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                                                @elseif($loop->iteration % 8 == 4)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                @elseif($loop->iteration % 8 == 5)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                                                @elseif($loop->iteration % 8 == 6)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                                                @elseif($loop->iteration % 8 == 7)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                                                @else
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                                                @endif
                                                            </svg>
                                                        </div>
                                                        <h3 class="text-xl font-bold
                                                            @if($loop->iteration % 5 == 1) text-purple-800
                                                            @elseif($loop->iteration % 5 == 2) text-pink-800
                                                            @elseif($loop->iteration % 5 == 3) text-blue-800
                                                            @elseif($loop->iteration % 5 == 4) text-green-800
                                                            @else text-amber-800
                                                            @endif
                                                        ">{{ $category->name }}</h3>
                                                    </div>
                                                    <p class="text-gray-600 mt-2 ml-16">{{ $category->description }}</p>
                                                </div>
                                                <div class="mt-4 md:mt-0 md:ml-6 bg-white p-5 rounded-lg shadow-md border border-gray-100">
                                                    <label for="interest-{{ $category->id }}" class="block text-sm font-medium text-gray-700 mb-2">Tingkat Minat</label>
                                                    <div class="relative">
                                                        <input
                                                            type="range"
                                                            id="interest-{{ $category->id }}"
                                                            name="interests[{{ $category->id }}]"
                                                            min="1"
                                                            max="10"
                                                            value="{{ $userInterests[$category->id] ?? 1 }}"
                                                            class="w-full h-3
                                                            @if($loop->iteration % 5 == 1) bg-purple-200
                                                            @elseif($loop->iteration % 5 == 2) bg-pink-200
                                                            @elseif($loop->iteration % 5 == 3) bg-blue-200
                                                            @elseif($loop->iteration % 5 == 4) bg-green-200
                                                            @else bg-amber-200
                                                            @endif
                                                            rounded-lg appearance-none cursor-pointer"
                                                            oninput="updateInterestValue(this, '{{ $category->id }}')"
                                                        >
                                                        <div class="flex justify-between text-xs text-gray-500 mt-2">
                                                            <span>1</span>
                                                            <span class="
                                                                @if($loop->iteration % 5 == 1) bg-gradient-to-r from-purple-500 to-pink-500
                                                                @elseif($loop->iteration % 5 == 2) bg-gradient-to-r from-pink-500 to-rose-500
                                                                @elseif($loop->iteration % 5 == 3) bg-gradient-to-r from-blue-500 to-indigo-500
                                                                @elseif($loop->iteration % 5 == 4) bg-gradient-to-r from-green-500 to-emerald-500
                                                                @else bg-gradient-to-r from-amber-500 to-yellow-500
                                                                @endif
                                                                text-white px-3 py-1 rounded-full text-xs font-bold shadow-sm"
                                                                id="interest-value-{{ $category->id }}">{{ $userInterests[$category->id] ?? 1 }}</span>
                                                            <span>10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="
                                            @if($loop->iteration % 5 == 1) bg-gradient-to-r from-purple-500 to-pink-500
                                            @elseif($loop->iteration % 5 == 2) bg-gradient-to-r from-pink-500 to-rose-500
                                            @elseif($loop->iteration % 5 == 3) bg-gradient-to-r from-blue-500 to-indigo-500
                                            @elseif($loop->iteration % 5 == 4) bg-gradient-to-r from-green-500 to-emerald-500
                                            @else bg-gradient-to-r from-amber-500 to-yellow-500
                                            @endif
                                            h-2
                                        "></div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Tombol Simpan yang Menonjol -->
                            <div class="sticky bottom-6">
                                <div class="flex justify-between items-center bg-gradient-to-r from-indigo-900 via-purple-900 to-pink-900 p-5 rounded-xl shadow-xl">
                                    <div class="text-white">
                                        <span class="font-medium" id="selection-count">0 dari {{ count($categories) }} kategori dipilih</span>
                                    </div>
                                    <button type="submit" class="relative overflow-hidden group px-8 py-4 text-base font-bold text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 rounded-xl shadow-xl hover:shadow-2xl focus:outline-none focus:ring-4 focus:ring-pink-500 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 animate-pulse-slow">
                                        <div class="absolute inset-0 w-full h-full bg-white/30 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                                        <div class="absolute inset-0 w-10 h-full bg-white/20 transform -skew-x-12 -translate-x-40 group-hover:translate-x-full transition-transform duration-700 delay-100"></div>
                                        <div class="flex items-center relative z-10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="tracking-wider">SIMPAN MINAT</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('interests-form');
            const ranges = document.querySelectorAll('input[type="range"]');
            const selectionCount = document.getElementById('selection-count');
            const profileProgress = document.getElementById('profile-progress');
            const profilePercentage = document.getElementById('profile-percentage');

            // Fungsi untuk memperbarui nilai yang ditampilkan
            window.updateInterestValue = function(input, categoryId) {
                const valueDisplay = document.getElementById(`interest-value-${categoryId}`);
                if (valueDisplay) {
                    valueDisplay.textContent = input.value;
                }
                updateSelectionCount();
            };

            // Fungsi untuk memperbarui jumlah kategori yang dipilih
            function updateSelectionCount() {
                let selectedCount = 0;
                let totalValue = 0;

                ranges.forEach(range => {
                    if (parseInt(range.value) > 1) selectedCount++;
                    totalValue += parseInt(range.value);
                });

                selectionCount.textContent = `${selectedCount} dari ${ranges.length} kategori dipilih`;

                // Update progress bar
                const progress = Math.min(100, Math.round((selectedCount / ranges.length) * 100));
                profileProgress.style.width = `${progress}%`;
                profilePercentage.textContent = `${progress}%`;
            }

            // Inisialisasi jumlah kategori yang dipilih
            updateSelectionCount();

            // Tambahkan event listener untuk setiap range input
            ranges.forEach(range => {
                range.addEventListener('input', function() {
                    // Highlight the parent card when value > 1
                    const card = this.closest('.bg-gradient-to-r');
                    if (parseInt(this.value) > 1) {
                        card.classList.add('ring-4', 'ring-purple-300');
                    } else {
                        card.classList.remove('ring-4', 'ring-purple-300');
                    }
                });

                // Trigger initial highlight
                if (parseInt(range.value) > 1) {
                    const card = range.closest('.bg-gradient-to-r');
                    card.classList.add('ring-4', 'ring-purple-300');
                }

                // Initialize value displays
                updateInterestValue(range, range.id.replace('interest-', ''));
            });

            // Animasi saat tombol simpan diklik
            form.addEventListener('submit', function() {
                const submitButton = form.querySelector('button[type="submit"]');
                submitButton.classList.add('scale-95');
                submitButton.classList.remove('animate-pulse-slow');
                submitButton.innerHTML = `
                    <div class="flex items-center justify-center">
                        <svg class="animate-spin -ml-1 mr-3 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span>MENYIMPAN...</span>
                    </div>
                `;
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

        @keyframes pulse-slow {
            0%, 100% {
                opacity: 1;
                transform: scale(1);
            }
            50% {
                opacity: 0.9;
                transform: scale(1.03);
            }
        }
        .animate-pulse-slow {
            animation: pulse-slow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        /* Custom styling for range inputs */
        input[type=range] {
            -webkit-appearance: none;
            height: 8px;
            border-radius: 5px;
        }

        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: linear-gradient(to right, #8b5cf6, #ec4899);
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        input[type=range]::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: linear-gradient(to right, #8b5cf6, #ec4899);
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            border: none;
        }
    </style>
</x-app-layout>
