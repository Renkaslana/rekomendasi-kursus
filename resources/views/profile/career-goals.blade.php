<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tujuan Karir') }}
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

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-4">Tujuan Karir Anda</h3>

                        @if ($careerGoals->isEmpty())
                            <p class="text-gray-500 mb-4">Anda belum menambahkan tujuan karir. Tambahkan tujuan karir untuk mendapatkan rekomendasi kursus yang lebih relevan.</p>
                        @else
                            <div class="space-y-4">
                                @foreach ($careerGoals as $goal)
                                    <div class="border rounded-lg p-4">
                                        <div class="flex justify-between">
                                            <div>
                                                <h4 class="font-medium">{{ $goal->title }}</h4>
                                                <p class="text-sm text-gray-500">{{ $goal->description }}</p>
                                                <div class="mt-2 flex items-center">
                                                    <span class="text-sm text-gray-500">Prioritas: {{ $goal->priority }}/10</span>
                                                </div>
                                            </div>
                                            <form method="POST" action="{{ route('profile.career-goals.destroy', $goal) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Apakah Anda yakin ingin menghapus tujuan karir ini?')">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-semibold mb-4">Tambah Tujuan Karir Baru</h3>

                        <form method="POST" action="{{ route('profile.career-goals.store') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                                <input type="text" id="title" name="title" class="form-input" required>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                                <textarea id="description" name="description" rows="3" class="form-input"></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="priority" class="block text-sm font-medium text-gray-700 mb-1">Prioritas (1-10)</label>
                                <input
                                    type="range"
                                    id="priority"
                                    name="priority"
                                    min="1"
                                    max="10"
                                    value="5"
                                    class="w-full"
                                    oninput="document.getElementById('priority-value').textContent = this.value"
                                >
                                <div class="flex justify-between text-xs text-gray-500">
                                    <span>1</span>
                                    <span id="priority-value">5</span>
                                    <span>10</span>
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit" class="btn-primary">
                                    Tambah Tujuan Karir
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
