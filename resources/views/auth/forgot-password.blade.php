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

        <!-- Forgot Password Container -->
        <div class="max-w-md w-full space-y-8 relative z-10">
            <!-- Forgot Password Form Card -->
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
                    <h2 class="text-2xl font-extrabold text-center text-white mb-1">Lupa Password?</h2>
                    <p class="text-center text-gray-200 mb-6">Masukkan email Anda dan kami akan mengirimkan tautan untuk reset password</p>

                    <!-- Session Status -->
                    <div class="mb-4 text-sm text-gray-200">
                        {{ __('Lupa password Anda? Tidak masalah. Cukup beri tahu kami alamat email Anda dan kami akan mengirimkan tautan reset password yang memungkinkan Anda memilih yang baru.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                        @csrf

                        <!-- Email Address -->
                        <div class="relative">
                            <div class="group">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-300 group-focus-within:text-pink-400 transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                                    class="block w-full pl-10 pr-3 py-3 border-0 text-white bg-white bg-opacity-10 backdrop-filter backdrop-blur-sm rounded-xl focus:ring-2 focus:ring-pink-500 focus:bg-opacity-20 transition-all duration-300 placeholder-gray-300"
                                    placeholder="nama@email.com">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-pink-300" />
                        </div>

                        <div>
                            <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent rounded-xl text-white bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-purple-300 group-hover:text-pink-300 transition-colors duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </span>
                                {{ __('Kirim Tautan Reset Password') }}
                            </button>
                        </div>

                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-200">
                                <a href="{{ route('login') }}" class="font-medium text-purple-300 hover:text-pink-400 transition-colors duration-300 inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                    </svg>
                                    {{ __('Kembali ke halaman login') }}
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
