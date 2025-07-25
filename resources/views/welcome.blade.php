<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jejak Tontonanku</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm py-4 sticky top-0 z-50 transition duration-300 ease-in-out">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <a href="/" class="text-2xl font-bold text-teal-600">Jejak Tontonanku</a>
                 <x-application-logo class="block h-9 w-auto fill-current text-indigo-800" />
            </div>

            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="bg-teal-600 hover:bg-teal-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="bg-teal-600 hover:bg-teal-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="bg-teal-600 hover:bg-teal-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300 ease-in-out">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-purple-600 to-teal-600 text-white py-20 md:py-32">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                Catat tontonanmu di Jejak Tontonanku
            </h1>
            <p class="text-lg md:text-xl mb-10 max-w-2xl mx-auto">
                Catat, organisir, dan selesaikan semua tontonanmu dengan efisiensi dan kemudahan.
            </p>
            <a class="bg-white text-teal-600 hover:bg-teal-50 hover:text-teal-700 font-bold py-3 px-8 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1"
                href="{{ url('/dashboard') }}">Mulai Sekarang</a>
        </div>
    </section>

    <!-- Project Description Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900">
                Apa yang kami tawarkan?
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center">
                    <div class="text-teal-500 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m10.607 10.607l-.707.707M12 21v-1m-4.673-4.673l-.707.707M3 12l-.707.707">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Intuitive Dashboard</h3>
                    <p class="text-gray-600">Kelola catatan anda dengan kemudahan.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center">
                    <div class="text-teal-500 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Blazing Fast Performance</h3>
                    <p class="text-gray-600">Cepat, efisien, dan nyaman. Catat tontonanmu dengan nyaman.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center">
                    <div class="text-teal-500 mb-4">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Scalable Solutions</h3>
                    <p class="text-gray-600">Our platform grows with your needs, offering flexible solutions for
                        individuals and large teams alike.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Jejak Tontonanku. All rights reserved.</p>

        </div>
    </footer>
</body>

</html>
