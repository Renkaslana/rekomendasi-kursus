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
                    <div class="text-center py-8">
                        <svg class="w-16 h-16 text-yellow-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Profil Belum Lengkap</h3>
                        <p class="text-gray-600 mb-6">Untuk mendapatkan rekomendasi kursus yang sesuai, Anda perlu melengkapi profil Anda terlebih dahulu.</p>

                        <div class="flex flex-col sm:flex-row justify-center gap-4">
                            @if (!$hasInterests)
                                <a href="{{ route('profile.interests') }}" class="btn-primary">
                                    Tambahkan Minat
                                </a>
                            @endif

                            @if (!$hasAbilities)
                                <a href="{{ route('profile.abilities') }}" class="btn-primary">
                                    Tambahkan Kemampuan
                                </a>
                            @endif

                            @if (!$hasCareerGoals)
                                <a href="{{ route('profile.career-goals') }}" class="btn-primary">
                                    Tambahkan Tujuan Karir
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
