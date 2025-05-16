<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kemampuan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('success'))
                        <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6">
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

                    <form method="POST" action="{{ route('profile.abilities.store') }}">
                        @csrf

                        <div class="mb-6">
                            <p class="text-gray-700 mb-2">Pilih tingkat kemampuan Anda untuk setiap kategori:</p>
                            <p class="text-sm text-gray-500 mb-4">Ini akan membantu kami merekomendasikan kursus yang sesuai dengan level Anda</p>

                            <div class="space-y-4">
                                @foreach ($categories as $category)
                                    <div class="border rounded-lg p-4">
                                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                            <div class="mb-2 md:mb-0">
                                                <h3 class="font-medium">{{ $category->name }}</h3>
                                                <p class="text-sm text-gray-500">{{ $category->description }}</p>
                                            </div>
                                            <div class="w-full md:w-64">
                                                <label for="ability-{{ $category->id }}" class="block text-sm font-medium text-gray-700 mb-1">Tingkat Kemampuan</label>
                                                <select
                                                    id="ability-{{ $category->id }}"
                                                    name="abilities[{{ $category->id }}]"
                                                    class="form-input"
                                                >
                                                    <option value="beginner" {{ ($userAbilities[$category->id] ?? '') == 'beginner' ? 'selected' : '' }}>Pemula</option>
                                                    <option value="intermediate" {{ ($userAbilities[$category->id] ?? '') == 'intermediate' ? 'selected' : '' }}>Menengah</option>
                                                    <option value="advanced" {{ ($userAbilities[$category->id] ?? '') == 'advanced' ? 'selected' : '' }}>Mahir</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="btn-primary">
                                Simpan Kemampuan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
