<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Manajemen Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0% { transform: translateY(0px);}
            50% { transform: translateY(-18px);}
            100% { transform: translateY(0px);}
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        .gradient-text {
            background: linear-gradient(90deg, #2563eb 0%, #9333ea 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-indigo-100 min-h-screen relative overflow-x-hidden">
    <!-- Decorative Blobs -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-2xl opacity-40 animate-float"></div>
    <div class="absolute top-20 right-0 w-80 h-80 bg-purple-200 rounded-full mix-blend-multiply filter blur-2xl opacity-40 animate-float" style="animation-delay:2s"></div>
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-96 h-96 bg-pink-200 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-float" style="animation-delay:4s"></div>

    <!-- Navigation -->
    <nav class="flex justify-end items-center p-8 z-10 relative">
        <a href="{{ route('login') }}" class="px-5 py-2 rounded-lg text-blue-700 font-semibold hover:bg-blue-100 transition-colors duration-200 mr-2 shadow-sm">Login</a>
        <a href="{{ route('register') }}" class="px-5 py-2 rounded-lg bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold shadow-md hover:from-blue-700 hover:to-indigo-700 transition-colors duration-200">Register</a>
    </nav>

    <!-- Hero Section -->
    <section class="relative z-10 pt-20 pb-10">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-extrabold mb-6 gradient-text drop-shadow-lg">
                    Sistem Manajemen Siswa
                </h1>
                <p class="text-xl text-gray-700 mb-10 font-medium">
                    Platform modern untuk <span class="text-blue-600 font-semibold">mengelola data siswa</span> secara efisien, mudah, dan terintegrasi untuk sekolah dan institusi pendidikan.
                </p>
                <a href="{{ route('siswas.index') }}" class="inline-flex items-center px-8 py-4 text-lg font-semibold rounded-xl text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 shadow-lg shadow-blue-500/30 transition-all duration-300">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Mulai Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="relative z-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto mb-16">
                <div class="bg-white/80 rounded-2xl shadow-lg p-6 text-center hover:-translate-y-2 transition-all duration-300 border-t-4 border-blue-400">
                    <div class="text-3xl font-bold text-blue-600 mb-1">500+</div>
                    <div class="text-gray-600 font-medium">Siswa Aktif</div>
                </div>
                <div class="bg-white/80 rounded-2xl shadow-lg p-6 text-center hover:-translate-y-2 transition-all duration-300 border-t-4 border-green-400">
                    <div class="text-3xl font-bold text-green-600 mb-1">15+</div>
                    <div class="text-gray-600 font-medium">Kelas</div>
                </div>
                <div class="bg-white/80 rounded-2xl shadow-lg p-6 text-center hover:-translate-y-2 transition-all duration-300 border-t-4 border-purple-400">
                    <div class="text-3xl font-bold text-purple-600 mb-1">98%</div>
                    <div class="text-gray-600 font-medium">Kehadiran</div>
                </div>
                <div class="bg-white/80 rounded-2xl shadow-lg p-6 text-center hover:-translate-y-2 transition-all duration-300 border-t-4 border-pink-400">
                    <div class="text-3xl font-bold text-pink-600 mb-1">24/7</div>
                    <div class="text-gray-600 font-medium">Akses Sistem</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="relative z-10 pb-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white/90 p-8 rounded-2xl shadow-xl border border-blue-100 hover:shadow-2xl transition-shadow group">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 gradient-text">Manajemen Data Siswa</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-center"><span class="mr-2 text-blue-500">✔</span> Pendaftaran & update data siswa</li>
                        <li class="flex items-center"><span class="mr-2 text-blue-500">✔</span> Riwayat akademik & dokumen</li>
                        <li class="flex items-center"><span class="mr-2 text-blue-500">✔</span> Data terpusat & aman</li>
                    </ul>
                </div>
                <div class="bg-white/90 p-8 rounded-2xl shadow-xl border border-green-100 hover:shadow-2xl transition-shadow group">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 gradient-text">Administrasi Kelas</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> Pembagian kelas & jadwal</li>
                        <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> Presensi digital & monitoring</li>
                        <li class="flex items-center"><span class="mr-2 text-green-500">✔</span> Pengelolaan ekstrakurikuler</li>
                    </ul>
                </div>
                <div class="bg-white/90 p-8 rounded-2xl shadow-xl border border-purple-100 hover:shadow-2xl transition-shadow group">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 gradient-text">Laporan & Analisis</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-center"><span class="mr-2 text-purple-500">✔</span> Laporan akademik otomatis</li>
                        <li class="flex items-center"><span class="mr-2 text-purple-500">✔</span> Statistik & grafik perkembangan</li>
                        <li class="flex items-center"><span class="mr-2 text-purple-500">✔</span> Export data mudah</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="relative z-10 text-center py-8 text-gray-500 bg-transparent">
        <p>© {{ date('Y') }} Sistem Manajemen Siswa. All rights reserved.</p>
    </footer>
</body>
</html>