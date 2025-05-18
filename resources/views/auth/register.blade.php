<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-indigo-900 via-purple-800 to-pink-700 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute top-[10%] left-[15%] w-72 h-72 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute top-[40%] right-[15%] w-72 h-72 bg-gradient-to-r from-yellow-500 to-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
            <div class="absolute bottom-[10%] left-[35%] w-72 h-72 bg-gradient-to-r from-blue-500 to-teal-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>

            <!-- Floating particles -->
            <div class="particles absolute inset-0">
                @for ($i = 0; $i < 20; $i++)
                    <div class="particle absolute rounded-full bg-white opacity-60"
                        style="
                            top: {{ rand(5, 95) }}%;
                            left: {{ rand(5, 95) }}%;
                            width: {{ rand(2, 6) }}px;
                            height: {{ rand(2, 6) }}px;
                            animation: float {{ rand(15, 30) }}s linear infinite;
                            animation-delay: -{{ rand(1, 15) }}s;
                        "></div>
                @endfor
            </div>
        </div>

        <!-- Register Container -->
        <div class="max-w-md w-full space-y-8 relative z-10">
            <!-- Register Form Card -->
            <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-2xl shadow-2xl overflow-hidden border border-white border-opacity-20">
                <!-- Card Header with Logo -->
                <div class="relative h-24 bg-gradient-to-r from-purple-600 to-pink-600 flex items-center justify-center">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-white bg-opacity-10 rounded-full -mt-10 -mr-10"></div>
                    <div class="absolute bottom-0 left-0 w-16 h-16 bg-white bg-opacity-10 rounded-full -mb-8 -ml-8"></div>

                    <!-- Logo or Text -->
                    <div class="text-center relative z-10">
                        <h1 class="text-2xl font-bold text-white">KursusFinder</h1>
                    </div>
                </div>

                <div class="px-8 py-6">
                    <h2 class="text-2xl font-extrabold text-center text-white mb-1">Buat Akun Baru</h2>
                    <p class="text-center text-gray-200 mb-6">Mulai perjalanan belajarmu sekarang</p>

                    <form method="POST" action="{{ route('register') }}" class="space-y-6">
                        @csrf

                        <!-- Name -->
                        <div class="relative">
                            <div class="group">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-300 group-focus-within:text-pink-400 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                                    class="block w-full pl-10 pr-3 py-3 border-0 text-white bg-white bg-opacity-10 backdrop-filter backdrop-blur-sm rounded-xl focus:ring-2 focus:ring-pink-500 focus:bg-opacity-20 transition-all duration-300 placeholder-gray-300"
                                    placeholder="Nama lengkap">
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-pink-300" />
                        </div>

                        <!-- Email Address -->
                        <div class="relative">
                            <div class="group">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-300 group-focus-within:text-pink-400 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                                    class="block w-full pl-10 pr-3 py-3 border-0 text-white bg-white bg-opacity-10 backdrop-filter backdrop-blur-sm rounded-xl focus:ring-2 focus:ring-pink-500 focus:bg-opacity-20 transition-all duration-300 placeholder-gray-300"
                                    placeholder="nama@email.com">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-pink-300" />
                        </div>

                        <!-- Password -->
                        <div class="relative" x-data="{ show: false }">
                            <div class="group">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-300 group-focus-within:text-pink-400 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <input id="password"
                                    :type="show ? 'text' : 'password'"
                                    name="password"
                                    required autocomplete="new-password"
                                    class="block w-full pl-10 pr-10 py-3 border-0 text-white bg-white bg-opacity-10 backdrop-filter backdrop-blur-sm rounded-xl focus:ring-2 focus:ring-pink-500 focus:bg-opacity-20 transition-all duration-300 placeholder-gray-300"
                                    placeholder="Minimal 8 karakter">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <button type="button" @click="show = !show" class="text-purple-300 hover:text-pink-400 focus:outline-none transition-colors duration-300">
                                        <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-pink-300" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="relative" x-data="{ show: false }">
                            <div class="group">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-300 group-focus-within:text-pink-400 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <input id="password_confirmation"
                                    :type="show ? 'text' : 'password'"
                                    name="password_confirmation"
                                    required autocomplete="new-password"
                                    class="block w-full pl-10 pr-10 py-3 border-0 text-white bg-white bg-opacity-10 backdrop-filter backdrop-blur-sm rounded-xl focus:ring-2 focus:ring-pink-500 focus:bg-opacity-20 transition-all duration-300 placeholder-gray-300"
                                    placeholder="Ulangi password">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <button type="button" @click="show = !show" class="text-purple-300 hover:text-pink-400 focus:outline-none transition-colors duration-300">
                                        <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-pink-300" />
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" name="terms" type="checkbox" required class="rounded-md border-0 bg-white bg-opacity-10 text-pink-600 focus:ring-pink-500 focus:ring-offset-0">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="text-gray-200">
                                    Saya menyetujui <a href="#" class="text-purple-300 hover:text-pink-400 transition-colors duration-300">Syarat dan Ketentuan</a> serta <a href="#" class="text-purple-300 hover:text-pink-400 transition-colors duration-300">Kebijakan Privasi</a>
                                </label>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent rounded-xl text-white bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-purple-300 group-hover:text-pink-300 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                </span>
                                {{ __('Daftar') }}
                            </button>
                        </div>

                        <div class="relative my-6">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-white border-opacity-20"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white bg-opacity-10 backdrop-filter backdrop-blur-sm text-gray-200 rounded-md">Atau daftar dengan</span>
                            </div>
                        </div>

                       

                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-200">
                                {{ __('Sudah punya akun?') }}
                                <a href="{{ route('login') }}" class="font-medium text-purple-300 hover:text-pink-400 transition-colors duration-300">
                                    {{ __('Masuk') }}
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
