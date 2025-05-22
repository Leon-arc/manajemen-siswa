<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Manajemen Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .bg-dots {
            background-image: radial-gradient(rgba(37, 99, 235, 0.1) 1px, transparent 1px);
            background-size: 25px 25px;
        }
        
        .animate-pulse-slow {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        @keyframes shine {
            from {
                mask-position: 150%;
            }
            to {
                mask-position: -50%;
            }
        }
        
        .shine {
            position: relative;
            overflow: hidden;
        }
        
        .shine::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask-composite: exclude;
            transform: translateX(-100%) rotate(35deg);
            animation: shine 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-indigo-100 min-h-screen relative overflow-x-hidden bg-dots">
    <!-- Improved Decorative Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-gradient-to-br from-blue-200 to-blue-300 rounded-full mix-blend-multiply filter blur-2xl opacity-40 animate-float"></div>
    <div class="absolute top-20 right-0 w-80 h-80 bg-gradient-to-br from-purple-200 to-violet-300 rounded-full mix-blend-multiply filter blur-2xl opacity-40 animate-float" style="animation-delay:2s"></div>
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-96 h-96 bg-gradient-to-br from-pink-200 to-rose-300 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-float" style="animation-delay:4s"></div>
    
    <!-- Decorative shapes -->
    <div class="absolute top-1/4 right-1/4 w-12 h-12 border-4 border-indigo-300/30 rounded-lg rotate-12 animate-float" style="animation-delay:1s"></div>
    <div class="absolute bottom-1/3 left-1/4 w-8 h-8 bg-gradient-to-br from-amber-400/20 to-yellow-400/20 rounded-full animate-float" style="animation-delay:3s"></div>
    <div class="absolute top-1/2 right-10 w-6 h-6 bg-gradient-to-br from-emerald-400/20 to-green-400/20 rounded-md rotate-45 animate-float" style="animation-delay:5s"></div>

    <!-- Enhanced Navigation -->
    <nav class="flex justify-between items-center p-6 lg:p-8 z-10 relative">
        <div class="flex items-center space-x-2">
            <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-lg flex items-center justify-center shadow-md shadow-blue-600/20">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <span class="font-bold text-xl text-indigo-900">SiswaManager</span>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('login') }}" class="px-5 py-2.5 rounded-xl text-blue-700 font-semibold hover:bg-blue-100 transition-all duration-200 mr-2 shadow-sm border border-blue-200/50 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
                Login
            </a>
            <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold shadow-md hover:shadow-lg hover:shadow-blue-500/30 transition-all duration-300 flex items-center group">
                <svg class="w-4 h-4 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                Register
            </a>
        </div>
    </nav>

    <!-- Enhanced Hero Section with Illustration -->
    <section class="relative z-10 pt-10 pb-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <div class="lg:w-1/2 text-center lg:text-left">
                    <div class="relative inline-block mb-2">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 border border-indigo-200">
                            <span class="animate-pulse mr-2 h-2 w-2 rounded-full bg-indigo-600"></span>
                            Platform Pendidikan #1
                        </span>
                    </div>
                    
                    <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
                        <span class="block gradient-text drop-shadow-lg">Sistem Manajemen</span>
                        <span class="text-gray-800">Siswa Modern</span>
                    </h1>
                    
                    <p class="text-xl text-gray-700 mb-10 font-medium max-w-xl mx-auto lg:mx-0">
                        Platform modern untuk <span class="text-blue-600 font-semibold">mengelola data siswa</span> secara efisien, mudah, dan terintegrasi untuk sekolah dan institusi pendidikan.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('siswas.index') }}" class="inline-flex items-center px-8 py-4 text-lg font-semibold rounded-xl text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 shadow-lg hover:shadow-xl shadow-blue-500/30 hover:shadow-blue-600/40 transition-all duration-300 transform hover:translate-y-[-2px] shine">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            Mulai Sekarang
                        </a>
                        
                        <a href="#features" class="inline-flex items-center px-8 py-4 text-lg font-semibold rounded-xl text-indigo-700 border-2 border-indigo-300 hover:border-indigo-400 bg-white/80 backdrop-blur-sm shadow-sm hover:shadow-md transition-all duration-300 transform hover:translate-y-[-2px]">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                    
                    <!-- Trust Badges -->
                    <div class="mt-10 flex items-center justify-center lg:justify-start">
                        <p class="text-gray-500 mr-4 text-sm font-medium">Dipercaya oleh:</p>
                        <div class="flex space-x-4">
                            <div class="w-auto h-8 opacity-70 grayscale hover:grayscale-0 hover:opacity-100 transition-all">
                                <svg class="h-full" viewBox="0 0 100 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 5H5V20H20V5Z" fill="#4285F4"/>
                                    <path d="M40 5H25V20H40V5Z" fill="#EA4335"/>
                                    <path d="M60 5H45V20H60V5Z" fill="#FBBC05"/>
                                    <path d="M80 5H65V20H80V5Z" fill="#34A853"/>
                                    <path d="M20 25H5V30H20V25Z" fill="#4285F4"/>
                                    <path d="M40 25H25V30H40V25Z" fill="#EA4335"/>
                                    <path d="M60 25H45V30H60V25Z" fill="#FBBC05"/>
                                    <path d="M80 25H65V30H80V25Z" fill="#34A853"/>
                                </svg>
                            </div>
                            <div class="w-auto h-8 opacity-70 grayscale hover:grayscale-0 hover:opacity-100 transition-all">
                                <svg class="h-full" viewBox="0 0 100 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M70 15C70 23.2843 63.2843 30 55 30C46.7157 30 40 23.2843 40 15C40 6.71573 46.7157 0 55 0C63.2843 0 70 6.71573 70 15Z" fill="#FF6C37"/>
                                    <path d="M30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15Z" fill="#FF6C37"/>
                                    <path d="M100 15C100 23.2843 93.2843 30 85 30C76.7157 30 70 23.2843 70 15C70 6.71573 76.7157 0 85 0C93.2843 0 100 6.71573 100 15Z" fill="#FF6C37"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2">
                    <div class="relative">
                        <!-- Decorative elements for the illustration -->
                        <div class="absolute -top-6 -left-6 w-20 h-20 bg-blue-200/50 rounded-full filter blur-md animate-pulse-slow"></div>
                        <div class="absolute -bottom-6 -right-6 w-20 h-20 bg-purple-200/50 rounded-full filter blur-md animate-pulse-slow" style="animation-delay: 1s"></div>
                        
                        <!-- Main illustration -->
                        <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-xl border border-indigo-100 relative z-10">
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <!-- Student Card Preview -->
                                <div class="sm:col-span-2 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl shadow-lg p-4 transform hover:rotate-1 transition-transform hover:scale-105">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h3 class="text-white font-bold">Profil Siswa</h3>
                                            <p class="text-indigo-100 text-xs mt-1">ID: 2025-06-789</p>
                                        </div>
                                        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mt-6 flex items-center space-x-3">
                                        <div class="w-14 h-14 bg-gray-300 rounded-full overflow-hidden">
                                            <!-- Placeholder for student photo -->
                                            <div class="w-full h-full bg-gradient-to-br from-gray-200 to-gray-300"></div>
                                        </div>
                                        <div>
                                            <h4 class="text-white font-semibold">Ahmad Rizki</h4>
                                            <p class="text-indigo-100 text-xs">Kelas XI RPL</p>
                                        </div>
                                    </div>
                                    <div class="mt-4 grid grid-cols-2 gap-2 text-xs">
                                        <div class="bg-white/10 p-2 rounded-lg">
                                            <p class="text-indigo-100">Nilai Rata-rata</p>
                                            <p class="text-white font-bold text-lg">85.4</p>
                                        </div>
                                        <div class="bg-white/10 p-2 rounded-lg">
                                            <p class="text-indigo-100">Kehadiran</p>
                                            <p class="text-white font-bold text-lg">98%</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Sidebar elements -->
                                <div class="space-y-4">
                                    <div class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl p-4 shadow-lg transform hover:-rotate-1 transition-transform hover:scale-105">
                                        <div class="flex justify-between items-center">
                                            <h3 class="text-white font-bold text-sm">Kelas</h3>
                                            <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-amber-100 text-xs mt-3">Total Kelas Aktif</p>
                                        <p class="text-white font-bold text-xl">15</p>
                                    </div>
                                    
                                    <div class="bg-gradient-to-br from-emerald-500 to-green-600 rounded-xl p-4 shadow-lg transform hover:-rotate-1 transition-transform hover:scale-105">
                                        <div class="flex justify-between items-center">
                                            <h3 class="text-white font-bold text-sm">Aktivitas</h3>
                                            <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-green-100 text-xs mt-3">Update Terakhir</p>
                                        <p class="text-white font-bold text-sm">Hari Ini, 10:45</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Analytics Preview -->
                            <div class="mt-4 bg-gradient-to-r from-gray-50 to-slate-100 rounded-xl p-4 border border-gray-200 transform hover:scale-[1.02] transition-transform">
                                <div class="flex justify-between items-center mb-3">
                                    <h3 class="font-bold text-gray-700">Statistik Bulanan</h3>
                                    <div class="flex space-x-1">
                                        <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                        <div class="w-2 h-2 rounded-full bg-amber-500"></div>
                                    </div>
                                </div>
                                <div class="h-12 flex items-end space-x-2">
                                    <div class="w-1/12 h-4 bg-blue-500 rounded-t"></div>
                                    <div class="w-1/12 h-6 bg-blue-500 rounded-t"></div>
                                    <div class="w-1/12 h-8 bg-blue-500 rounded-t"></div>
                                    <div class="w-1/12 h-5 bg-blue-500 rounded-t"></div>
                                    <div class="w-1/12 h-7 bg-blue-500 rounded-t"></div>
                                    <div class="w-1/12 h-9 bg-blue-500 rounded-t"></div>
                                    <div class="w-1/12 h-11 bg-blue-500 rounded-t"></div>
                                    <div class="w-1/12 h-8 bg-blue-500 rounded-t"></div>
                                    <div class="w-1/12 h-10 bg-blue-500 rounded-t"></div>
                                    <div class="w-1/12 h-12 bg-blue-500 rounded-t"></div>
                                    <div class="w-1/12 h-9 bg-blue-500 rounded-t"></div>
                                    <div class="w-1/12 h-7 bg-blue-500 rounded-t"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Stats Section with Animations -->
    <section class="relative z-10 py-16" id="stats">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl font-bold mb-4">
                    <span class="gradient-text">Statistik & Pencapaian</span>
                </h2>
                <p class="text-gray-600">Platform kami terus berkembang dan membantu institusi pendidikan di seluruh Indonesia</p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full mx-auto mt-6"></div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-5xl mx-auto">
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:-translate-y-2 transition-all duration-300 border-t-4 border-blue-400 relative overflow-hidden group">
                    <div class="absolute -right-6 -top-6 w-16 h-16 bg-blue-100 rounded-full opacity-60 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative">
                        <div class="inline-flex w-16 h-16 items-center justify-center bg-blue-100 text-blue-600 rounded-xl mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-blue-600 mb-1 group-hover:scale-110 transition-transform">500+</div>
                        <div class="text-gray-600 font-medium">Siswa Aktif</div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:-translate-y-2 transition-all duration-300 border-t-4 border-green-400 relative overflow-hidden group">
                    <div class="absolute -right-6 -top-6 w-16 h-16 bg-green-100 rounded-full opacity-60 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative">
                        <div class="inline-flex w-16 h-16 items-center justify-center bg-green-100 text-green-600 rounded-xl mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-green-600 mb-1 group-hover:scale-110 transition-transform">15+</div>
                        <div class="text-gray-600 font-medium">Kelas</div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:-translate-y-2 transition-all duration-300 border-t-4 border-purple-400 relative overflow-hidden group">
                    <div class="absolute -right-6 -top-6 w-16 h-16 bg-purple-100 rounded-full opacity-60 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative">
                        <div class="inline-flex w-16 h-16 items-center justify-center bg-purple-100 text-purple-600 rounded-xl mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-purple-600 mb-1 group-hover:scale-110 transition-transform">98%</div>
                        <div class="text-gray-600 font-medium">Kehadiran</div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:-translate-y-2 transition-all duration-300 border-t-4 border-pink-400 relative overflow-hidden group">
                    <div class="absolute -right-6 -top-6 w-16 h-16 bg-pink-100 rounded-full opacity-60 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative">
                        <div class="inline-flex w-16 h-16 items-center justify-center bg-pink-100 text-pink-600 rounded-xl mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-pink-600 mb-1 group-hover:scale-110 transition-transform">24/7</div>
                        <div class="text-gray-600 font-medium">Akses Sistem</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Features Section -->
    <section id="features" class="relative z-10 py-16 bg-gradient-to-b from-transparent to-indigo-50/50">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center px-4 py-1 bg-indigo-100 rounded-full text-indigo-800 text-sm font-medium mb-4">
                    <svg class="w-4 h-4 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    Fitur Unggulan
                </div>
                <h2 class="text-4xl font-bold mb-4">
                    <span class="gradient-text">Semua yang Anda Butuhkan</span>
                </h2>
                <p class="text-gray-600 md:text-lg">Sistem manajemen siswa kami menyediakan berbagai fitur untuk memudahkan dan mengoptimalkan proses akademik</p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full mx-auto mt-6"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white/90 p-8 rounded-2xl shadow-xl border border-blue-100 hover:shadow-2xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 gradient-text group-hover:text-2xl transition-all">Manajemen Data Siswa</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center transform transition-transform hover:translate-x-1">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-2">✓</span>
                            Pendaftaran & update data siswa
                        </li>
                        <li class="flex items-center transform transition-transform hover:translate-x-1">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-2">✓</span>
                            Riwayat akademik & dokumen
                        </li>
                        <li class="flex items-center transform transition-transform hover:translate-x-1">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-2">✓</span>
                            Data terpusat & aman
                        </li>
                        <li class="flex items-center transform transition-transform hover:translate-x-1">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center mr-2">✓</span>
                            Upload & kelola foto siswa
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white/90 p-8 rounded-2xl shadow-xl border border-green-100 hover:shadow-2xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 gradient-text group-hover:text-2xl transition-all">Administrasi Kelas</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center transform transition-transform hover:translate-x-1">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-2">✓</span>
                            Pembagian kelas & jadwal
                        </li>
                        <li class="flex items-center transform transition-transform hover:translate-x-1">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-2">✓</span>
                            Presensi digital & monitoring
                        </li>
                        <li class="flex items-center transform transition-transform hover:translate-x-1">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-2">✓</span>
                            Pengelolaan ekstrakurikuler
                        </li>
                        <li class="flex items-center transform transition-transform hover:translate-x-1">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-2">✓</span>
                            Pantau perkembangan siswa
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white/90 p-8 rounded-2xl shadow-xl border border-purple-100 hover:shadow-2xl transition-all duration-300 group">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 gradient-text group-hover:text-2xl transition-all">Laporan & Analisis</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center transform transition-transform hover:translate-x-1">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center mr-2">✓</span>
                            Laporan akademik otomatis
                        </li>
                        <li class="flex items-center transform transition-transform hover:translate-x-1">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center mr-2">✓</span>
                            Statistik & grafik perkembangan
                        </li>
                        <li class="flex items-center transform transition-transform hover:translate-x-1">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center mr-2">✓</span>
                            Export data mudah
                        </li>
                        <li class="flex items-center transform transition-transform hover:translate-x-1">
                            <span class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center mr-2">✓</span>
                            Visualisasi data interaktif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- New Testimonial Section -->
    <section class="relative z-10 py-16">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <div class="inline-flex items-center px-4 py-1 bg-amber-100 rounded-full text-amber-800 text-sm font-medium mb-4">
                    <svg class="w-4 h-4 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                    Testimoni
                </div>
                <h2 class="text-4xl font-bold mb-4">
                    <span class="gradient-text">Yang Mereka Katakan</span>
                </h2>
                <p class="text-gray-600 md:text-lg">Pendapat dari para pengguna sistem manajemen siswa kami</p>
                <div class="w-24 h-1 bg-gradient-to-r from-amber-500 to-orange-600 rounded-full mx-auto mt-6"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-amber-500 mb-4">
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-gray-600 mb-6">"Sistem ini sangat membantu sekolah kami dalam mengelola data siswa. Proses administrasi menjadi lebih efisien dan data selalu terorganisir dengan baik."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full flex items-center justify-center text-white font-bold text-xl mr-3">B</div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Budi Santoso</h4>
                            <p class="text-sm text-gray-500">Kepala Sekolah SMAN 5</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-amber-500 mb-4">
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-gray-600 mb-6">"Fitur upload foto siswa sangat membantu kami dalam membuat kartu pelajar dan database siswa yang lengkap. Antarmuka yang intuitif memudahkan penggunaan sehari-hari."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full flex items-center justify-center text-white font-bold text-xl mr-3">S</div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Siti Rahma</h4>
                            <p class="text-sm text-gray-500">Admin Sekolah SMK 2</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-amber-500 mb-4">
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-gray-600 mb-6">"Sistem ini sangat membantu sekolah kami dalam mengelola data siswa. Proses administrasi menjadi lebih efisien dan data selalu terorganisir dengan baik."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full flex items-center justify-center text-white font-bold text-xl mr-3">B</div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Budi Santoso</h4>
                            <p class="text-sm text-gray-500">Kepala Sekolah SMAN 5</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-amber-500 mb-4">
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-6 h-6 inline-block" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <p class="text-gray-600 mb-6">"Fitur upload foto siswa sangat membantu kami dalam membuat kartu pelajar dan database siswa yang lengkap. Antarmuka yang intuitif memudahkan penggunaan sehari-hari."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-500 rounded-full flex items-center justify-center text-white font-bold text-xl mr-3">S</div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Siti Rahma</h4>
                            <p class="text-sm text-gray-500">Admin Sekolah SMK 2</p>
                        </div>
                    </div>
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