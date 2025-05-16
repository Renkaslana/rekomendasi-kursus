<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-primary-50 to-white">
        <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-xl overflow-hidden sm:rounded-xl">
            <div class="mb-8 text-center">
                <a href="/" class="flex justify-center mb-4">
                    <x-application-logo class="w-20 h-20" />
                </a>
                <h2 class="text-2xl font-bold text-gray-900 mb-1">Verifikasi Email</h2>
                <p class="text-gray-600">Silakan verifikasi email Anda untuk melanjutkan</p>
            </div>

            <div class="mb-6 text-sm text-gray-600">
                {{ __('Terima kasih telah mendaftar! Sebelum memulai, bisakah Anda memverifikasi alamat email Anda dengan mengklik tautan yang baru saja kami kirimkan melalui email kepada Anda? Jika Anda tidak menerima email tersebut, kami akan dengan senang hati mengirimkan email lainnya.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-6 p-4 bg-green-50 rounded-md">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">
                                {{ __('Tautan verifikasi baru telah dikirim ke alamat email yang Anda berikan saat pendaftaran.') }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="flex items-center justify-between mt-6">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button type="submit" class="flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition transform hover:scale-[1.02] duration-200">
                            {{ __('Kirim Ulang Email Verifikasi') }}
                        </button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="text-sm text-primary-600 hover:text-primary-800 transition">
                        {{ __('Keluar') }}
                    </button>
                </form>
            </div>

            <div class="mt-8 p-4 bg-blue-50 rounded-md">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-blue-800">Informasi</h3>
                        <div class="mt-2 text-sm text-blue-700">
                            <p>Jika Anda tidak menerima email verifikasi, silakan periksa folder spam atau junk di kotak masuk email Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative elements -->
        <div class="hidden lg:block absolute top-0 right-0 mt-16 mr-16">
            <div class="w-32 h-32 bg-primary-400 rounded-full opacity-20 animate-blob"></div>
        </div>
        <div class="hidden lg:block absolute bottom-0 left-0 mb-16 ml-16">
            <div class="w-32 h-32 bg-primary-600 rounded-full opacity-20 animate-blob animation-delay-4000"></div>
        </div>
    </div>
</x-guest-layout>
