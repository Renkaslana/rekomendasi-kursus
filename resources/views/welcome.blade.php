<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'KursusFinder') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- AOS - Animate On Scroll -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .gradient-text {
            background: linear-gradient(90deg, #0284c7 0%, #0ea5e9 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-pattern {
            background-color: #0284c7;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .swiper-pagination-bullet-active {
            background-color: #0284c7 !important;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        .animate-pulse-slow {
            animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.8;
            }
        }
    </style>
</head>
<body class="antialiased">
    <div x-data="{ mobileMenuOpen: false }">
        <header class="bg-white shadow-sm fixed w-full z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-primary-600">
                                <path d="M20 5C11.7157 5 5 11.7157 5 20C5 28.2843 11.7157 35 20 35C28.2843 35 35 28.2843 35 20C35 11.7157 28.2843 5 20 5Z" stroke="currentColor" stroke-width="2"/>
                                <path d="M15 14C15 12.8954 15.8954 12 17 12H29C30.1046 12 31 12.8954 31 14V26C31 27.1046 30.1046 28 29 28H17C15.8954 28 15 27.1046 15 26V14Z" fill="currentColor"/>
                                <path d="M9 18C9 16.8954 9.89543 16 11 16H23C24.1046 16 25 16.8954 25 18V30C25 31.1046 24.1046 32 23 32H11C9.89543 32 9 31.1046 9 30V18Z" fill="currentColor" fill-opacity="0.6"/>
                            </svg>
                            <span class="ml-2 text-2xl font-bold text-primary-600">KursusFinder</span>
                        </div>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:items-center sm:space-x-8">
                        <a href="#features" class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out">Fitur</a>
                        <a href="#how-it-works" class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out">Cara Kerja</a>
                        <a href="#testimonials" class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out">Testimonial</a>
                        <a href="#faq" class="text-gray-700 hover:text-primary-600 px-3 py-2 text-sm font-medium transition duration-150 ease-in-out">FAQ</a>
                    </div>
                    <div class="flex items-center">
                        @if (Route::has('login'))
                            <div class="space-x-4">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-primary-600 hover:text-primary-800 transition font-medium">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="hidden sm:inline-flex text-gray-700 hover:text-primary-600 transition font-medium">Login</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn-primary">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                        <!-- Mobile menu button -->
                        <div class="flex items-center sm:hidden ml-4">
                            <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500" aria-controls="mobile-menu" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="h-6 w-6" x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                                <svg class="h-6 w-6" x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" style="display: none;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="mobileMenuOpen" class="sm:hidden" id="mobile-menu" style="display: none;">
                <div class="pt-2 pb-3 space-y-1">
                    <a href="#features" @click="mobileMenuOpen = false" class="text-gray-700 hover:text-primary-600 block px-3 py-2 text-base font-medium transition duration-150 ease-in-out">Fitur</a>
                    <a href="#how-it-works" @click="mobileMenuOpen = false" class="text-gray-700 hover:text-primary-600 block px-3 py-2 text-base font-medium transition duration-150 ease-in-out">Cara Kerja</a>
                    <a href="#testimonials" @click="mobileMenuOpen = false" class="text-gray-700 hover:text-primary-600 block px-3 py-2 text-base font-medium transition duration-150 ease-in-out">Testimonial</a>
                    <a href="#faq" @click="mobileMenuOpen = false" class="text-gray-700 hover:text-primary-600 block px-3 py-2 text-base font-medium transition duration-150 ease-in-out">FAQ</a>
                    @guest
                        <a href="{{ route('login') }}" class="text-primary-600 hover:text-primary-800 block px-3 py-2 text-base font-medium transition duration-150 ease-in-out">Login</a>
                    @endguest
                </div>
            </div>
        </header>

        <main>
            <!-- Hero Section -->
            <section class="pt-24 pb-20 hero-pattern relative overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                        <div data-aos="fade-right">
                            <h1 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl leading-tight">
                                Temukan <span class="text-primary-200">Kursus Terbaik</span> untuk Karirmu
                            </h1>
                            <p class="mt-6 text-xl text-primary-100 max-w-3xl">
                                Sistem rekomendasi kursus online berbasis minat dan kemampuan untuk membantu kamu mencapai tujuan karir.
                            </p>
                            <div class="mt-10 flex flex-wrap gap-4">
                                <a href="{{ route('register') }}" class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-700 bg-white hover:bg-primary-50 md:py-4 md:text-lg md:px-10 transition transform hover:scale-105 duration-200 shadow-lg">
                                    Mulai Sekarang
                                </a>
                                <a href="#features" class="px-8 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-white hover:bg-opacity-10 md:py-4 md:text-lg md:px-10 transition transform hover:scale-105 duration-200">
                                    Pelajari Lebih Lanjut
                                </a>
                            </div>

                            <div class="mt-10 flex items-center space-x-6">
                                <div class="flex -space-x-2">
                                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                                </div>
                                <span class="text-sm text-primary-100">Bergabung dengan <span class="font-bold">1,000+</span> pengguna lainnya</span>
                            </div>
                        </div>
                        <div class="hidden md:block" data-aos="fade-left">
                            <div class="relative">
                                <div class="absolute -top-4 -left-4 w-72 h-72 bg-primary-400 rounded-full mix-blend-multiply filter blur-2xl opacity-70 animate-blob"></div>
                                <div class="absolute -bottom-8 right-4 w-72 h-72 bg-primary-300 rounded-full mix-blend-multiply filter blur-2xl opacity-70 animate-blob animation-delay-2000"></div>
                                <div class="absolute -bottom-8 -left-20 w-72 h-72 bg-primary-500 rounded-full mix-blend-multiply filter blur-2xl opacity-70 animate-blob animation-delay-4000"></div>
                                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="Students learning" class="rounded-lg shadow-2xl relative z-10 animate-float">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 -mt-16 -mr-16 w-80 h-80 bg-primary-500 rounded-full opacity-20"></div>
                <div class="absolute bottom-0 left-0 -mb-16 -ml-16 w-80 h-80 bg-primary-500 rounded-full opacity-20"></div>

                <div class="absolute bottom-0 left-0 right-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full h-auto">
                        <path fill="#f9fafb" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,149.3C960,160,1056,160,1152,138.7C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                    </svg>
                </div>
            </section>

            <!-- Trusted By Section -->
            <section class="py-12 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <p class="text-base font-medium text-gray-500 uppercase tracking-wider">Dipercaya oleh platform kursus terkemuka</p>
                        <div class="mt-8 flex flex-wrap justify-center gap-8 md:gap-16 grayscale opacity-60">
                            <div class="flex items-center justify-center">
                                <svg class="h-8" viewBox="0 0 124 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5 4.5C13.5 6.98528 11.4853 9 9 9C6.51472 9 4.5 6.98528 4.5 4.5C4.5 2.01472 6.51472 0 9 0C11.4853 0 13.5 2.01472 13.5 4.5Z" fill="currentColor"/>
                                    <path d="M22.5 4.5C22.5 6.98528 20.4853 9 18 9C15.5147 9 13.5 6.98528 13.5 4.5C13.5 2.01472 15.5147 0 18 0C20.4853 0 22.5 2.01472 22.5 4.5Z" fill="currentColor"/>
                                    <path d="M4.5 13.5C4.5 11.0147 6.51472 9 9 9C11.4853 9 13.5 11.0147 13.5 13.5C13.5 15.9853 11.4853 18 9 18C6.51472 18 4.5 15.9853 4.5 13.5Z" fill="currentColor"/>
                                    <path d="M13.5 13.5C13.5 11.0147 15.5147 9 18 9C20.4853 9 22.5 11.0147 22.5 13.5C22.5 15.9853 20.4853 18 18 18C15.5147 18 13.5 15.9853 13.5 13.5Z" fill="currentColor"/>
                                    <path d="M0 22.5C0 20.0147 2.01472 18 4.5 18H13.5C15.9853 18 18 20.0147 18 22.5C18 24.9853 15.9853 27 13.5 27H4.5C2.01472 27 0 24.9853 0 22.5Z" fill="currentColor"/>
                                    <path d="M18 22.5C18 20.0147 20.0147 18 22.5 18H31.5C33.9853 18 36 20.0147 36 22.5C36 24.9853 33.9853 27 31.5 27H22.5C20.0147 27 18 24.9853 18 22.5Z" fill="currentColor"/>
                                    <path d="M44.5 8.00977H48.5V24.0098H44.5V8.00977Z" fill="currentColor"/>
                                    <path d="M61.5 8.00977L55.5 24.0098H51.5L57.5 8.00977H61.5Z" fill="currentColor"/>
                                    <path d="M63.5 8.00977H67.5V24.0098H63.5V8.00977Z" fill="currentColor"/>
                                    <path d="M69.5 8.00977H73.5V24.0098H69.5V8.00977Z" fill="currentColor"/>
                                    <path d="M84.5 20.0098H88.5V24.0098H84.5V20.0098Z" fill="currentColor"/>
                                    <path d="M90.5 8.00977H94.5V24.0098H90.5V8.00977Z" fill="currentColor"/>
                                    <path d="M96.5 8.00977H100.5V24.0098H96.5V8.00977Z" fill="currentColor"/>
                                    <path d="M102.5 8.00977H106.5V24.0098H102.5V8.00977Z" fill="currentColor"/>
                                    <path d="M108.5 8.00977H112.5V24.0098H108.5V8.00977Z" fill="currentColor"/>
                                    <path d="M114.5 8.00977H118.5V24.0098H114.5V8.00977Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-center">
                                <svg class="h-8" viewBox="0 0 124 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.5 4.00977C23.5 2.35291 22.1569 1.00977 20.5 1.00977H3.5C1.84315 1.00977 0.5 2.35291 0.5 4.00977V21.0098C0.5 22.6666 1.84315 24.0098 3.5 24.0098H20.5C22.1569 24.0098 23.5 22.6666 23.5 21.0098V4.00977Z" fill="currentColor"/>
                                    <path d="M18.5 7.00977C18.5 8.6666 17.1569 10.0098 15.5 10.0098C13.8431 10.0098 12.5 8.6666 12.5 7.00977C12.5 5.35291 13.8431 4.00977 15.5 4.00977C17.1569 4.00977 18.5 5.35291 18.5 7.00977Z" fill="white"/>
                                    <path d="M8.5 7.00977C8.5 8.6666 7.15685 10.0098 5.5 10.0098C3.84315 10.0098 2.5 8.6666 2.5 7.00977C2.5 5.35291 3.84315 4.00977 5.5 4.00977C7.15685 4.00977 8.5 5.35291 8.5 7.00977Z" fill="white"/>
                                    <path d="M18.5 17.0098C18.5 18.6666 17.1569 20.0098 15.5 20.0098C13.8431 20.0098 12.5 18.6666 12.5 17.0098C12.5 15.3529 13.8431 14.0098 15.5 14.0098C17.1569 14.0098 18.5 15.3529 18.5 17.0098Z" fill="white"/>
                                    <path d="M8.5 17.0098C8.5 18.6666 7.15685 20.0098 5.5 20.0098C3.84315 20.0098 2.5 18.6666 2.5 17.0098C2.5 15.3529 3.84315 14.0098 5.5 14.0098C7.15685 14.0098 8.5 15.3529 8.5 17.0098Z" fill="white"/>
                                    <path d="M36.5 4.00977H32.5V21.0098H36.5V4.00977Z" fill="currentColor"/>
                                    <path d="M48.5 4.00977H44.5V21.0098H48.5V4.00977Z" fill="currentColor"/>
                                    <path d="M40.5 4.00977H44.5V21.0098H40.5V4.00977Z" fill="currentColor"/>
                                    <path d="M52.5 4.00977H56.5V21.0098H52.5V4.00977Z" fill="currentColor"/>
                                    <path d="M60.5 4.00977H64.5V21.0098H60.5V4.00977Z" fill="currentColor"/>
                                    <path d="M68.5 4.00977H72.5V21.0098H68.5V4.00977Z" fill="currentColor"/>
                                    <path d="M76.5 4.00977H80.5V21.0098H76.5V4.00977Z" fill="currentColor"/>
                                    <path d="M84.5 4.00977H88.5V21.0098H84.5V4.00977Z" fill="currentColor"/>
                                    <path d="M92.5 4.00977H96.5V21.0098H92.5V4.00977Z" fill="currentColor"/>
                                    <path d="M100.5 4.00977H104.5V21.0098H100.5V4.00977Z" fill="currentColor"/>
                                    <path d="M108.5 4.00977H112.5V21.0098H108.5V4.00977Z" fill="currentColor"/>
                                    <path d="M116.5 4.00977H120.5V21.0098H116.5V4.00977Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-center">
                                <svg class="h-8" viewBox="0 0 124 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.5 12.0098C24.5 18.6366 19.1269 24.0098 12.5 24.0098C5.87314 24.0098 0.5 18.6366 0.5 12.0098C0.5 5.38291 5.87314 0.00976562 12.5 0.00976562C19.1269 0.00976562 24.5 5.38291 24.5 12.0098Z" fill="currentColor"/>
                                    <path d="M12.5 17.0098C15.2614 17.0098 17.5 14.7712 17.5 12.0098C17.5 9.24833 15.2614 7.00977 12.5 7.00977C9.73858 7.00977 7.5 9.24833 7.5 12.0098C7.5 14.7712 9.73858 17.0098 12.5 17.0098Z" fill="white"/>
                                    <path d="M36.5 4.00977H32.5V21.0098H36.5V4.00977Z" fill="currentColor"/>
                                    <path d="M48.5 4.00977H44.5V21.0098H48.5V4.00977Z" fill="currentColor"/>
                                    <path d="M40.5 4.00977H44.5V21.0098H40.5V4.00977Z" fill="currentColor"/>
                                    <path d="M52.5 4.00977H56.5V21.0098H52.5V4.00977Z" fill="currentColor"/>
                                    <path d="M60.5 4.00977H64.5V21.0098H60.5V4.00977Z" fill="currentColor"/>
                                    <path d="M68.5 4.00977H72.5V21.0098H68.5V4.00977Z" fill="currentColor"/>
                                    <path d="M76.5 4.00977H80.5V21.0098H76.5V4.00977Z" fill="currentColor"/>
                                    <path d="M84.5 4.00977H88.5V21.0098H84.5V4.00977Z" fill="currentColor"/>
                                    <path d="M92.5 4.00977H96.5V21.0098H92.5V4.00977Z" fill="currentColor"/>
                                    <path d="M100.5 4.00977H104.5V21.0098H100.5V4.00977Z" fill="currentColor"/>
                                    <path d="M108.5 4.00977H112.5V21.0098H108.5V4.00977Z" fill="currentColor"/>
                                    <path d="M116.5 4.00977H120.5V21.0098H116.5V4.00977Z" fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-center">
                                <svg class="h-8" viewBox="0 0 124 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.5 1.00977H3.5C1.84315 1.00977 0.5 2.35291 0.5 4.00977V21.0098C0.5 22.6666 1.84315 24.0098 3.5 24.0098H20.5C22.1569 24.0098 23.5 22.6666 23.5 21.0098V4.00977C23.5 2.35291 22.1569 1.00977 20.5 1.00977Z" fill="currentColor"/>
                                    <path d="M12 18.0098C15.3137 18.0098 18 15.3235 18 12.0098C18 8.69604 15.3137 6.00977 12 6.00977C8.68629 6.00977 6 8.69604 6 12.0098C6 15.3235 8.68629 18.0098 12 18.0098Z" fill="white"/>
                                    <path d="M36.5 4.00977H32.5V21.0098H36.5V4.00977Z" fill="currentColor"/>
                                    <path d="M48.5 4.00977H44.5V21.0098H48.5V4.00977Z" fill="currentColor"/>
                                    <path d="M40.5 4.00977H44.5V21.0098H40.5V4.00977Z" fill="currentColor"/>
                                    <path d="M52.5 4.00977H56.5V21.0098H52.5V4.00977Z" fill="currentColor"/>
                                    <path d="M60.5 4.00977H64.5V21.0098H60.5V4.00977Z" fill="currentColor"/>
                                    <path d="M68.5 4.00977H72.5V21.0098H68.5V4.00977Z" fill="currentColor"/>
                                    <path d="M76.5 4.00977H80.5V21.0098H76.5V4.00977Z" fill="currentColor"/>
                                    <path d="M84.5 4.00977H88.5V21.0098H84.5V4.00977Z" fill="currentColor"/>
                                    <path d="M92.5 4.00977H96.5V21.0098H92.5V4.00977Z" fill="currentColor"/>
                                    <path d="M100.5 4.00977H104.5V21.0098H100.5V4.00977Z" fill="currentColor"/>
                                    <path d="M108.5 4.00977H112.5V21.0098H108.5V4.00977Z" fill="currentColor"/>
                                    <path d="M116.5 4.00977H120.5V21.0098H116.5V4.00977Z" fill="currentColor"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section id="features" class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center" data-aos="fade-up">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            <span class="gradient-text">Fitur Unggulan</span>
                        </h2>
                        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                            Temukan kursus yang sesuai dengan minat, kemampuan, dan tujuan karirmu dengan teknologi rekomendasi canggih.
                        </p>
                    </div>

                    <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Feature 1 -->
                        <div class="bg-white rounded-lg shadow-lg p-8 transition hover:shadow-xl transform hover:-translate-y-1 duration-300" data-aos="fade-up" data-aos-delay="100">
                            <div class="w-14 h-14 bg-primary-100 rounded-lg flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Rekomendasi Berbasis Minat</h3>
                            <p class="text-gray-600 mb-4">
                                Dapatkan rekomendasi kursus yang sesuai dengan minat dan passion kamu menggunakan algoritma Content-Based Filtering.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Analisis preferensi pengguna</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Pencocokan kategori kursus</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Feature 2 -->
                        <div class="bg-white rounded-lg shadow-lg p-8 transition hover:shadow-xl transform hover:-translate-y-1 duration-300" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-14 h-14 bg-primary-100 rounded-lg flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Sesuai Kemampuan</h3>
                            <p class="text-gray-600 mb-4">
                                Kursus yang direkomendasikan disesuaikan dengan level kemampuanmu, dari pemula hingga mahir.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Penilaian level kemampuan</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Jalur belajar yang terstruktur</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Feature 3 -->
                        <div class="bg-white rounded-lg shadow-lg p-8 transition hover:shadow-xl transform hover:-translate-y-1 duration-300" data-aos="fade-up" data-aos-delay="300">
                            <div class="w-14 h-14 bg-primary-100 rounded-lg flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Prioritas Tujuan Karir</h3>
                            <p class="text-gray-600 mb-4">
                                Algoritma AHP membantu menentukan prioritas kursus berdasarkan tujuan karir yang ingin kamu capai.
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Pemetaan jalur karir</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Rekomendasi berbasis industri</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Additional Features -->
                    <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Feature 4 -->
                        <div class="bg-white rounded-lg shadow-lg p-8 transition hover:shadow-xl transform hover:-translate-y-1 duration-300" data-aos="fade-up" data-aos-delay="400">
                            <div class="flex items-start">
                                <div class="w-14 h-14 bg-primary-100 rounded-lg flex items-center justify-center mr-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Pelacakan Kemajuan</h3>
                                    <p class="text-gray-600 mb-4">
                                        Pantau kemajuan belajarmu dengan dashboard yang intuitif dan visualisasi data yang jelas.
                                    </p>
                                    <ul class="space-y-2">
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-gray-600">Statistik belajar real-time</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-gray-600">Pencapaian dan sertifikat</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 5 -->
                        <div class="bg-white rounded-lg shadow-lg p-8 transition hover:shadow-xl transform hover:-translate-y-1 duration-300" data-aos="fade-up" data-aos-delay="500">
                            <div class="flex items-start">
                                <div class="w-14 h-14 bg-primary-100 rounded-lg flex items-center justify-center mr-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Komunitas Belajar</h3>
                                    <p class="text-gray-600 mb-4">
                                        Terhubung dengan pengguna lain yang memiliki minat dan tujuan karir yang sama.
                                    </p>
                                    <ul class="space-y-2">
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-gray-600">Forum diskusi per kursus</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-600 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span class="text-gray-600">Grup belajar kolaboratif</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How It Works Section -->
            <section id="how-it-works" class="py-20 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center" data-aos="fade-up">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            <span class="gradient-text">Cara Kerja</span>
                        </h2>
                        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                            Sistem rekomendasi kami menggunakan algoritma canggih untuk memberikan saran kursus terbaik.
                        </p>
                    </div>

                    <div class="mt-16">
                        <div class="relative">
                            <!-- Steps -->
                            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-primary-200"></div>

                            <!-- Step 1 -->
                            <div class="relative mb-12 md:mb-20" data-aos="fade-up">
                                <div class="flex flex-col md:flex-row items-center">
                                    <div class="flex-1 md:pr-16 text-center md:text-right order-2 md:order-1">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Lengkapi Profil</h3>
                                        <p class="text-gray-600">
                                            Isi profil dengan minat, kemampuan, dan tujuan karir kamu untuk mendapatkan rekomendasi yang akurat.
                                        </p>
                                        <div class="mt-4 hidden md:block">
                                            <a href="{{ route('register') }}" class="inline-flex items-center text-primary-600 hover:text-primary-800 font-medium">
                                                <span>Buat Akun Sekarang</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="md:mx-auto flex items-center justify-center order-1 md:order-2 mb-6 md:mb-0">
                                        <div class="w-14 h-14 rounded-full bg-primary-600 flex items-center justify-center text-white font-bold text-xl z-10 shadow-lg">
                                            1
                                        </div>
                                    </div>
                                    <div class="flex-1 md:pl-16 text-center md:text-left order-3">
                                        <div class="bg-white p-2 rounded-lg shadow-lg">
                                            <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Complete Profile" class="rounded-lg w-full max-w-xs mx-auto md:mx-0">
                                        </div>
                                        <div class="mt-4 md:hidden">
                                            <a href="{{ route('register') }}" class="inline-flex items-center text-primary-600 hover:text-primary-800 font-medium">
                                                <span>Buat Akun Sekarang</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="relative mb-12 md:mb-20" data-aos="fade-up" data-aos-delay="100">
                                <div class="flex flex-col md:flex-row items-center">
                                    <div class="flex-1 md:pr-16 text-center md:text-right order-2 md:order-3">
                                        <div class="bg-white p-2 rounded-lg shadow-lg">
                                            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Get Recommendations" class="rounded-lg w-full max-w-xs mx-auto md:mx-0">
                                        </div>
                                    </div>
                                    <div class="md:mx-auto flex items-center justify-center order-1 md:order-2 mb-6 md:mb-0">
                                        <div class="w-14 h-14 rounded-full bg-primary-600 flex items-center justify-center text-white font-bold text-xl z-10 shadow-lg">
                                            2
                                        </div>
                                    </div>
                                    <div class="flex-1 md:pl-16 text-center md:text-left order-3 md:order-1">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Dapatkan Rekomendasi</h3>
                                        <p class="text-gray-600">
                                            Algoritma kami akan menganalisis profilmu dan memberikan rekomendasi kursus yang paling sesuai menggunakan Content-Based Filtering dan AHP.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="relative" data-aos="fade-up" data-aos-delay="200">
                                <div class="flex flex-col md:flex-row items-center">
                                    <div class="flex-1 md:pr-16 text-center md:text-right order-2 md:order-1">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Ikuti Kursus</h3>
                                        <p class="text-gray-600">
                                            Pilih kursus yang kamu minati, ikuti, dan berikan ulasan untuk meningkatkan rekomendasi di masa depan.
                                        </p>
                                    </div>
                                    <div class="md:mx-auto flex items-center justify-center order-1 md:order-2 mb-6 md:mb-0">
                                        <div class="w-14 h-14 rounded-full bg-primary-600 flex items-center justify-center text-white font-bold text-xl z-10 shadow-lg">
                                            3
                                        </div>
                                    </div>
                                    <div class="flex-1 md:pl-16 text-center md:text-left order-3">
                                        <div class="bg-white p-2 rounded-lg shadow-lg">
                                            <img src="https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="Take Courses" class="rounded-lg w-full max-w-xs mx-auto md:mx-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section id="testimonials" class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center" data-aos="fade-up">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            <span class="gradient-text">Apa Kata Mereka</span>
                        </h2>
                        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                            Dengarkan pengalaman pengguna yang telah menemukan kursus terbaik melalui platform kami.
                        </p>
                    </div>

                    <div class="mt-16 relative" x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
                        loop: true,
                        slidesPerView: 1,
                        spaceBetween: 32,
                        autoplay: {
                            delay: 5000,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 1,
                                spaceBetween: 20,
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 30,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 40,
                            },
                        }
                    })">
                        <div class="swiper-container" x-ref="container">
                            <div class="swiper-wrapper">
                                <!-- Testimonial 1 -->
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-lg shadow-lg p-8 h-full flex flex-col">
                                        <div class="flex items-center mb-4">
                                            <div class="flex">
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 italic mb-6 flex-1">
                                            "KursusFinder benar-benar membantu saya menemukan kursus yang sesuai dengan minat dan kemampuan saya. Rekomendasi yang diberikan sangat akurat!"
                                        </p>
                                        <div class="flex items-center">
                                            <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User avatar">
                                            <div>
                                                <h4 class="font-semibold text-gray-900">Sarah Johnson</h4>
                                                <p class="text-gray-500 text-sm">Web Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 2 -->
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-lg shadow-lg p-8 h-full flex flex-col">
                                        <div class="flex items-center mb-4">
                                            <div class="flex">
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 italic mb-6 flex-1">
                                            "Algoritma AHP benar-benar membantu saya menentukan prioritas kursus yang sesuai dengan tujuan karir saya. Sekarang saya sudah bekerja di perusahaan impian!"
                                        </p>
                                        <div class="flex items-center">
                                            <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="User avatar">
                                            <div>
                                                <h4 class="font-semibold text-gray-900">Michael Chen</h4>
                                                <p class="text-gray-500 text-sm">Data Scientist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 3 -->
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-lg shadow-lg p-8 h-full flex flex-col">
                                        <div class="flex items-center mb-4">
                                            <div class="flex">
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 italic mb-6 flex-1">
                                            "Saya suka bagaimana KursusFinder menyesuaikan rekomendasi berdasarkan kemampuan saya. Saya tidak merasa kewalahan dengan kursus yang terlalu sulit atau bosan dengan yang terlalu mudah."
                                        </p>
                                        <div class="flex items-center">
                                            <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User avatar">
                                            <div>
                                                <h4 class="font-semibold text-gray-900">Anita Patel</h4>
                                                <p class="text-gray-500 text-sm">UI/UX Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 4 -->
                                <div class="swiper-slide">
                                    <div class="bg-white rounded-lg shadow-lg p-8 h-full flex flex-col">
                                        <div class="flex items-center mb-4">
                                            <div class="flex">
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 italic mb-6 flex-1">
                                            "Berkat KursusFinder, saya berhasil beralih karir dari marketing ke data science. Rekomendasi kursus yang diberikan sangat tepat sasaran dan membantu saya membangun portofolio yang kuat."
                                        </p>
                                        <div class="flex items-center">
                                            <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User avatar">
                                            <div>
                                                <h4 class="font-semibold text-gray-900">David Wilson</h4>
                                                <p class="text-gray-500 text-sm">Data Analyst</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination mt-10"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section id="faq" class="py-20 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center" data-aos="fade-up">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            <span class="gradient-text">Pertanyaan yang Sering Diajukan</span>
                        </h2>
                        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                            Temukan jawaban untuk pertanyaan umum tentang KursusFinder dan cara kerjanya.
                        </p>
                    </div>

                    <div class="mt-16 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                        <div class="space-y-8">
                            <!-- FAQ Item 1 -->
                            <div x-data="{ open: false }" class="bg-white rounded-lg shadow-md overflow-hidden">
                                <button @click="open = !open" class="flex justify-between items-center w-full px-6 py-4 text-left">
                                    <span class="text-lg font-medium text-gray-900">Bagaimana cara kerja algoritma rekomendasi?</span>
                                    <svg class="h-5 w-5 text-primary-500 transform transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="open" x-transition class="px-6 pb-4 pt-0" style="display: none;">
                                    <p class="text-gray-600">
                                        KursusFinder menggunakan dua algoritma utama: Content-Based Filtering dan Analytical Hierarchy Process (AHP). Content-Based Filtering menganalisis minat dan preferensi Anda untuk menemukan kursus dengan karakteristik serupa, sementara AHP membantu menentukan prioritas kursus berdasarkan berbagai kriteria seperti kesesuaian dengan minat, kemampuan, tujuan karir, harga, dan durasi.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 2 -->
                            <div x-data="{ open: false }" class="bg-white rounded-lg shadow-md overflow-hidden">
                                <button @click="open = !open" class="flex justify-between items-center w-full px-6 py-4 text-left">
                                    <span class="text-lg font-medium text-gray-900">Apakah KursusFinder gratis?</span>
                                    <svg class="h-5 w-5 text-primary-500 transform transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="open" x-transition class="px-6 pb-4 pt-0" style="display: none;">
                                    <p class="text-gray-600">
                                        Ya, KursusFinder sepenuhnya gratis untuk digunakan. Anda dapat membuat akun, mendapatkan rekomendasi kursus, dan melacak kemajuan belajar tanpa biaya apapun. Namun, kursus yang direkomendasikan mungkin memiliki biaya tersendiri tergantung pada platform penyedia kursus.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 3 -->
                            <div x-data="{ open: false }" class="bg-white rounded-lg shadow-md overflow-hidden">
                                <button @click="open = !open" class="flex justify-between items-center w-full px-6 py-4 text-left">
                                    <span class="text-lg font-medium text-gray-900">Bagaimana cara mendapatkan rekomendasi yang akurat?</span>
                                    <svg class="h-5 w-5 text-primary-500 transform transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="open" x-transition class="px-6 pb-4 pt-0" style="display: none;">
                                    <p class="text-gray-600">
                                        Untuk mendapatkan rekomendasi yang akurat, pastikan untuk melengkapi profil Anda dengan informasi minat, kemampuan, dan tujuan karir yang spesifik. Semakin lengkap profil Anda, semakin akurat rekomendasi yang akan diberikan. Selain itu, berikan ulasan dan rating untuk kursus yang telah Anda selesaikan untuk meningkatkan akurasi rekomendasi di masa depan.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 4 -->
                            <div x-data="{ open: false }" class="bg-white rounded-lg shadow-md overflow-hidden">
                                <button @click="open = !open" class="flex justify-between items-center w-full px-6 py-4 text-left">
                                    <span class="text-lg font-medium text-gray-900">Apakah KursusFinder menyediakan kursus sendiri?</span>
                                    <svg class="h-5 w-5 text-primary-500 transform transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="open" x-transition class="px-6 pb-4 pt-0" style="display: none;">
                                    <p class="text-gray-600">
                                        Tidak, KursusFinder adalah platform rekomendasi kursus yang menghubungkan Anda dengan kursus dari berbagai penyedia. Kami bekerja sama dengan platform kursus terkemuka untuk memberikan rekomendasi terbaik sesuai dengan profil Anda. Kami tidak menyediakan konten kursus sendiri.
                                    </p>
                                </div>
                            </div>

                            <!-- FAQ Item 5 -->
                            <div x-data="{ open: false }" class="bg-white rounded-lg shadow-md overflow-hidden">
                                <button @click="open = !open" class="flex justify-between items-center w-full px-6 py-4 text-left">
                                    <span class="text-lg font-medium text-gray-900">Bagaimana cara mengubah preferensi rekomendasi?</span>
                                    <svg class="h-5 w-5 text-primary-500 transform transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="open" x-transition class="px-6 pb-4 pt-0" style="display: none;">
                                    <p class="text-gray-600">
                                        Anda dapat mengubah preferensi rekomendasi kapan saja dengan mengakses halaman profil Anda. Di sana, Anda dapat memperbarui minat, kemampuan, dan tujuan karir Anda. Perubahan ini akan langsung memengaruhi rekomendasi kursus yang Anda terima.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="bg-primary-700 py-16 relative overflow-hidden">
                <div class="absolute top-0 right-0 -mt-16 -mr-16 w-80 h-80 bg-primary-500 rounded-full opacity-20"></div>
                <div class="absolute bottom-0 left-0 -mb-16 -ml-16 w-80 h-80 bg-primary-500 rounded-full opacity-20"></div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="text-center" data-aos="fade-up">
                        <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                            Siap Menemukan Kursus Terbaikmu?
                        </h2>
                        <p class="mt-4 text-xl text-primary-100 max-w-2xl mx-auto">
                            Daftar sekarang dan mulai perjalanan belajarmu dengan rekomendasi kursus yang dipersonalisasi.
                        </p>
                        <div class="mt-8 flex justify-center">
                            <a href="{{ route('register') }}" class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-700 bg-white hover:bg-primary-50 md:py-4 md:text-lg md:px-10 transition transform hover:scale-105 duration-200 shadow-lg">
                                Daftar Gratis
                            </a>
                        </div>

                        <div class="mt-10 flex items-center justify-center space-x-6">
                            <div class="flex -space-x-2">
                                <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                            </div>
                            <span class="text-sm text-primary-100">Bergabung dengan <span class="font-bold">1,000+</span> pengguna lainnya</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-gray-800 text-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="col-span-1 md:col-span-2">
                        <div class="flex items-center mb-4">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-white">
                                <path d="M20 5C11.7157 5 5 11.7157 5 20C5 28.2843 11.7157 35 20 35C28.2843 35 35 28.2843 35 20C35 11.7157 28.2843 5 20 5Z" stroke="currentColor" stroke-width="2"/>
                                <path d="M15 14C15 12.8954 15.8954 12 17 12H29C30.1046 12 31 12.8954 31 14V26C31 27.1046 30.1046 28 29 28H17C15.8954 28 15 27.1046 15 26V14Z" fill="currentColor"/>
                                <path d="M9 18C9 16.8954 9.89543 16 11 16H23C24.1046 16 25 16.8954 25 18V30C25 31.1046 24.1046 32 23 32H11C9.89543 32 9 31.1046 9 30V18Z" fill="currentColor" fill-opacity="0.6"/>
                            </svg>
                            <span class="ml-2 text-2xl font-bold text-white">KursusFinder</span>
                        </div>
                        <p class="text-gray-300 mb-4">
                            Sistem rekomendasi kursus online berbasis minat dan kemampuan untuk membantu kamu mencapai tujuan karir.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white transition">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Navigasi</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Beranda</a></li>
                            <li><a href="#features" class="text-gray-300 hover:text-white transition">Fitur</a></li>
                            <li><a href="#how-it-works" class="text-gray-300 hover:text-white transition">Cara Kerja</a></li>
                            <li><a href="#testimonials" class="text-gray-300 hover:text-white transition">Testimonial</a></li>
                            <li><a href="#faq" class="text-gray-300 hover:text-white transition">FAQ</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>info@kursusfinder.com</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span>+62 123 4567 890</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Jakarta, Indonesia</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
                    <p>&copy; {{ date('Y') }} KursusFinder. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
        });
    </script>
</body>
</html>
