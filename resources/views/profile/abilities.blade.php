<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <div class="bg-gradient-to-r from-green-600 to-teal-600 p-2 rounded-lg mr-3 shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
            </div>
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                {{ __('Kemampuan & Keahlian') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-b from-green-50 via-teal-50 to-emerald-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Progress Tracker -->
            <div class="mb-8 px-4 sm:px-0">
                <div class="flex justify-between mb-2">
                    <span class="text-sm font-medium text-gray-700">Profil Lengkap</span>
                    <span class="text-sm font-medium text-gray-700" id="profile-percentage">0%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5 shadow-inner">
                    <div class="bg-gradient-to-r from-green-600 to-teal-600 h-2.5 rounded-full shadow-sm" style="width: 0%" id="profile-progress"></div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-white via-green-50 to-teal-50 overflow-hidden shadow-xl sm:rounded-xl border border-green-100">
                <div class="relative">
                    <!-- Decorative Elements -->
                    <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-teal-200 to-green-200 rounded-bl-full opacity-30 -z-10"></div>
                    <div class="absolute bottom-0 left-0 w-40 h-40 bg-gradient-to-tr from-emerald-200 to-teal-200 rounded-tr-full opacity-30 -z-10"></div>

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
                                <div class="bg-gradient-to-br from-green-500 to-teal-500 p-3 rounded-lg mr-4 shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-green-600 to-teal-600">Tingkat Kemampuan Anda</h3>
                                    <p class="text-gray-600">Pilih tingkat kemampuan Anda untuk setiap kategori</p>
                                </div>
                            </div>
                            <div class="ml-14 pl-2 border-l-2 border-green-300 mb-6">
                                <p class="text-sm text-gray-500">Ini akan membantu kami merekomendasikan kursus yang sesuai dengan level kemampuan Anda saat ini</p>
                            </div>
                        </div>

                        <form method="POST" action="{{ route('profile.abilities.store') }}" id="abilities-form">
                            @csrf

                            <div class="space-y-6 mb-10">
                                @foreach ($categories as $category)
                                    <div class="bg-gradient-to-r
                                        @if($loop->iteration % 5 == 1) from-green-100 to-teal-50
                                        @elseif($loop->iteration % 5 == 2) from-teal-100 to-emerald-50
                                        @elseif($loop->iteration % 5 == 3) from-emerald-100 to-green-50
                                        @elseif($loop->iteration % 5 == 4) from-cyan-100 to-teal-50
                                        @else from-lime-100 to-green-50
                                        @endif
                                        border border-gray-200 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 overflow-hidden">
                                        <div class="p-6">
                                            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                                <div class="flex-1">
                                                    <div class="flex items-center">
                                                        <div class="
                                                            @if($loop->iteration % 5 == 1) bg-gradient-to-br from-green-500 to-teal-500
                                                            @elseif($loop->iteration % 5 == 2) bg-gradient-to-br from-teal-500 to-emerald-500
                                                            @elseif($loop->iteration % 5 == 3) bg-gradient-to-br from-emerald-500 to-green-500
                                                            @elseif($loop->iteration % 5 == 4) bg-gradient-to-br from-cyan-500 to-teal-500
                                                            @else bg-gradient-to-br from-lime-500 to-green-500
                                                            @endif
                                                            p-3 rounded-lg mr-4 shadow-md
                                                        ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                @if($loop->iteration % 8 == 1)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                                                @elseif($loop->iteration % 8 == 2)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                                                @elseif($loop->iteration % 8 == 3)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                                @elseif($loop->iteration % 8 == 4)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                                @elseif($loop->iteration % 8 == 5)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                                                @elseif($loop->iteration % 8 == 6)
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                                                @else
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                                                @endif
                                                            </svg>
                                                        </div>
                                                        <h3 class="text-xl font-bold
                                                            @if($loop->iteration % 5 == 1) text-green-800
                                                            @elseif($loop->iteration % 5 == 2) text-teal-800
                                                            @elseif($loop->iteration % 5 == 3) text-emerald-800
                                                            @elseif($loop->iteration % 5 == 4) text-cyan-800
                                                            @else text-lime-800
                                                            @endif
                                                        ">{{ $category->name }}</h3>
                                                    </div>
                                                    <p class="text-gray-600 mt-2 ml-16">{{ $category->description }}</p>
                                                </div>
                                                <div class="mt-4 md:mt-0 md:ml-6 bg-white p-5 rounded-lg shadow-md border border-gray-100">
                                                    <label for="ability-{{ $category->id }}" class="block text-sm font-medium text-gray-700 mb-2">Tingkat Kemampuan</label>
                                                    <select
                                                        id="ability-{{ $category->id }}"
                                                        name="abilities[{{ $category->id }}]"
                                                        class="w-full px-4 py-3 border
                                                        @if($loop->iteration % 5 == 1) border-green-200
                                                        @elseif($loop->iteration % 5 == 2) border-teal-200
                                                        @elseif($loop->iteration % 5 == 3) border-emerald-200
                                                        @elseif($loop->iteration % 5 == 4) border-cyan-200
                                                        @else border-lime-200
                                                        @endif
                                                        rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 ability-select bg-white"
                                                        onchange="updateAbilityBadge(this, '{{ $category->id }}')"
                                                    >
                                                        <option value="beginner" {{ ($userAbilities[$category->id] ?? '') == 'beginner' ? 'selected' : '' }}>Pemula</option>
                                                        <option value="intermediate" {{ ($userAbilities[$category->id] ?? '') == 'intermediate' ? 'selected' : '' }}>Menengah</option>
                                                        <option value="advanced" {{ ($userAbilities[$category->id] ?? '') == 'advanced' ? 'selected' : '' }}>Mahir</option>
                                                    </select>
                                                    <div class="mt-3 text-center">
                                                        <span id="ability-badge-{{ $category->id }}" class="inline-block px-4 py-2 rounded-full text-sm font-bold shadow-sm
                                                            @if(($userAbilities[$category->id] ?? '') == 'beginner') bg-gradient-to-r from-yellow-400 to-orange-400 text-white
                                                            @elseif(($userAbilities[$category->id] ?? '') == 'intermediate') bg-gradient-to-r from-blue-400 to-indigo-400 text-white
                                                            @elseif(($userAbilities[$category->id] ?? '') == 'advanced') bg-gradient-to-r from-green-400 to-teal-400 text-white
                                                            @else bg-gradient-to-r from-gray-400 to-gray-500 text-white
                                                            @endif
                                                        ">
                                                            @if(($userAbilities[$category->id] ?? '') == 'beginner') Pemula
                                                            @elseif(($userAbilities[$category->id] ?? '') == 'intermediate') Menengah
                                                            @elseif(($userAbilities[$category->id] ?? '') == 'advanced') Mahir
                                                            @else Tidak Dipilih
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="
                                            @if($loop->iteration % 5 == 1) bg-gradient-to-r from-green-500 to-teal-500
                                            @elseif($loop->iteration % 5 == 2) bg-gradient-to-r from-teal-500 to-emerald-500
                                            @elseif($loop->iteration % 5 == 3) bg-gradient-to-r from-emerald-500 to-green-500
                                            @elseif($loop->iteration % 5 == 4) bg-gradient-to-r from-cyan-500 to-teal-500
                                            @else bg-gradient-to-r from-lime-500 to-green-500
                                            @endif
                                            h-2
                                        "></div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Tombol Simpan yang Menonjol -->
                            <div class="sticky bottom-6">
                                <div class="flex justify-between items-center bg-gradient-to-r from-teal-900 via-green-900 to-emerald-900 p-5 rounded-xl shadow-xl">
                                    <div class="text-white">
                                        <span class="font-medium" id="selection-count">{{ count($categories) }} kategori kemampuan</span>
                                    </div>
                                    <button type="submit" class="relative overflow-hidden group px-8 py-4 text-base font-bold text-white bg-gradient-to-r from-green-500 via-teal-500 to-emerald-500 rounded-xl shadow-xl hover:shadow-2xl focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 animate-pulse-slow">
                                        <div class="absolute inset-0 w-full h-full bg-white/30 transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                                        <div class="absolute inset-0 w-10 h-full bg-white/20 transform -skew-x-12 -translate-x-40 group-hover:translate-x-full transition-transform duration-700 delay-100"></div>
                                        <div class="flex items-center relative z-10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="tracking-wider">SIMPAN KEMAMPUAN</span>
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
            const form = document.getElementById('abilities-form');
            const selects = document.querySelectorAll('.ability-select');
            const profileProgress = document.getElementById('profile-progress');
            const profilePercentage = document.getElementById('profile-percentage');

            // Inisialisasi progress bar
            updateProgress();

            // Fungsi untuk memperbarui progress bar
            function updateProgress() {
                let filledCount = 0;
                selects.forEach(select => {
                    if (select.value) filledCount++;
                });

                const progress = Math.min(100, Math.round((filledCount / selects.length) * 100));
                profileProgress.style.width = `${progress}%`;
                profilePercentage.textContent = `${progress}%`;
            }

            // Fungsi untuk memperbarui badge kemampuan
            window.updateAbilityBadge = function(select, categoryId) {
                const badge = document.getElementById(`ability-badge-${categoryId}`);
                if (badge) {
                    // Remove all existing classes
                    badge.className = 'inline-block px-4 py-2 rounded-full text-sm font-bold shadow-sm';

                    // Add new classes based on selection
                    if (select.value === 'beginner') {
                        badge.classList.add('bg-gradient-to-r', 'from-yellow-400', 'to-orange-400', 'text-white');
                        badge.textContent = 'Pemula';
                    } else if (select.value === 'intermediate') {
                        badge.classList.add('bg-gradient-to-r', 'from-blue-400', 'to-indigo-400', 'text-white');
                        badge.textContent = 'Menengah';
                    } else if (select.value === 'advanced') {
                        badge.classList.add('bg-gradient-to-r', 'from-green-400', 'to-teal-400', 'text-white');
                        badge.textContent = 'Mahir';
                    }

                    // Highlight the parent card
                    const card = select.closest('.bg-gradient-to-r');
                    card.classList.add('ring-4', 'ring-green-300');

                    // Update progress
                    updateProgress();
                }
            };

            // Highlight cards with selected abilities
            selects.forEach(select => {
                if (select.value) {
                    const card = select.closest('.bg-gradient-to-r');
                    card.classList.add('ring-4', 'ring-green-300');
                }

                select.addEventListener('change', function() {
                    const card = this.closest('.bg-gradient-to-r');
                    card.classList.add('ring-4', 'ring-green-300');
                });
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

        /* Custom styling for select inputs */
        select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
    </style>
</x-app-layout>
