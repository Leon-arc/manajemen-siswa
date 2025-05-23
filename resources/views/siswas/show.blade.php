@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 py-8 relative overflow-hidden">
    <!-- Enhanced Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-indigo-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 w-96 h-96 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-15 animate-blob animation-delay-4000"></div>
        
        <!-- Floating geometric shapes -->
        <div class="absolute top-20 left-10 w-4 h-4 bg-blue-400 rounded-full animate-float opacity-60"></div>
        <div class="absolute top-40 right-20 w-6 h-6 bg-indigo-400 rounded-full animate-float-delayed opacity-60"></div>
        <div class="absolute bottom-40 left-1/4 w-3 h-3 bg-purple-400 rounded-full animate-bounce opacity-60"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Enhanced Back Button with breadcrumb -->
        <div class="mb-8 animate-fade-in-down">
            <nav class="flex items-center space-x-2 text-sm text-gray-500 mb-4">
                <a href="{{ route('siswas.index') }}" class="hover:text-blue-600 transition-colors">Dashboard</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a href="{{ route('siswas.index') }}" class="hover:text-blue-600 transition-colors">Daftar Siswa</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-blue-600 font-medium">Profil Siswa</span>
            </nav>
            
            <a href="{{ route('siswas.index') }}"
                class="group inline-flex items-center px-6 py-3 bg-white/80 backdrop-blur-sm border border-gray-200 rounded-xl text-gray-700 hover:bg-white hover:text-blue-600 hover:border-blue-300 transition-all duration-300 shadow-sm hover:shadow-lg transform hover:-translate-y-1">
                <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                <span class="font-medium">Kembali ke Daftar Siswa</span>
            </a>
        </div>

        <!-- Main Profile Card with Enhanced Design -->
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl border border-white/50 overflow-hidden hover:shadow-3xl transition-all duration-500 animate-fade-in-up">
            <!-- Enhanced Header Section -->
            <div class="relative bg-gradient-to-br from-blue-500 via-indigo-600 to-purple-700 px-8 py-16 text-white overflow-hidden">
                <!-- Animated background pattern -->
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, rgba(255,255,255,0.2) 2px, transparent 2px), radial-gradient(circle at 75% 75%, rgba(255,255,255,0.2) 2px, transparent 2px); background-size: 50px 50px; animation: drift 20s linear infinite;"></div>
                </div>
                
                <!-- Floating particles -->
                <div class="absolute top-10 left-10 w-2 h-2 bg-white rounded-full animate-ping opacity-60"></div>
                <div class="absolute top-20 right-16 w-1 h-1 bg-white rounded-full animate-pulse opacity-80"></div>
                <div class="absolute bottom-16 left-1/4 w-1.5 h-1.5 bg-white rounded-full animate-bounce opacity-70"></div>
                
                <div class="relative z-10 text-center">
                    <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white/90 text-sm font-medium mb-4 animate-fade-in-down animation-delay-300">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Profil Siswa
                    </div>
                    <h1 class="text-4xl md:text-5xl font-extrabold mb-3 animate-fade-in-down animation-delay-500">{{ $siswa->nama }}</h1>
                    <p class="text-blue-100 text-lg animate-fade-in-down animation-delay-700">Informasi lengkap data siswa</p>
                </div>
            </div>

            <!-- Enhanced Profile Content -->
            <div class="px-8 py-12">
                <!-- Profile Image and Basic Info Section -->
                <div class="flex flex-col lg:flex-row items-center lg:items-start gap-12 mb-12 animate-fade-in-up animation-delay-300">
                    <!-- Enhanced Profile Image -->
                    <div class="relative group animate-scale-in">
                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 via-purple-500 to-indigo-500 rounded-3xl blur opacity-25 group-hover:opacity-40 transition duration-1000 group-hover:duration-300 animate-pulse"></div>
                        <div class="relative w-48 h-48 rounded-3xl bg-gradient-to-br from-blue-100 to-indigo-200 flex items-center justify-center overflow-hidden shadow-xl group-hover:shadow-2xl transition-all duration-300 border-4 border-white">
                            @if($siswa->foto)
                                <img src="{{ asset('storage/'.$siswa->foto) }}" alt="{{ $siswa->nama }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            @else
                                <svg class="w-20 h-20 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            @endif
                        </div>
                        
                        <!-- Status badge -->
                        <div class="absolute -bottom-2 -right-2 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg animate-bounce-subtle">
                            <svg class="w-3 h-3 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            Aktif
                        </div>
                    </div>

                    <!-- Enhanced Basic Info -->
                    <div class="flex-1 text-center lg:text-left space-y-6">
                        <div class="animate-fade-in-right animation-delay-500">
                            <h2 class="text-4xl font-bold text-gray-900 mb-3">{{ $siswa->nama }}</h2>
                            <div class="flex flex-wrap justify-center lg:justify-start gap-3 mb-4">
                                <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-full text-sm font-medium shadow-lg hover:shadow-xl transition-shadow duration-300">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    Kelas {{ $siswa->kelas }}
                                </div>
                                <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-full text-sm font-medium shadow-lg hover:shadow-xl transition-shadow duration-300">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    NIS: {{ $siswa->nis }}
                                </div>
                            </div>
                            <p class="text-gray-600 text-lg flex items-center justify-center lg:justify-start">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Terdaftar sejak {{ $siswa->created_at->format('d F Y') }}
                            </p>
                        </div>
                        
                        <!-- Quick stats -->
                        <div class="grid grid-cols-3 gap-4 animate-fade-in-right animation-delay-700">
                            <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl border border-blue-200 hover:scale-105 transition-transform duration-300">
                                <div class="text-2xl font-bold text-blue-600">{{ Carbon\Carbon::now()->diffInDays($siswa->created_at) }}</div>
                                <div class="text-xs text-blue-500 font-medium">Hari Terdaftar</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl border border-purple-200 hover:scale-105 transition-transform duration-300">
                                <div class="text-2xl font-bold text-purple-600">{{ strlen($siswa->alamat) > 20 ? 'Lengkap' : 'Singkat' }}</div>
                                <div class="text-xs text-purple-500 font-medium">Info Alamat</div>
                            </div>
                            <div class="text-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-2xl border border-green-200 hover:scale-105 transition-transform duration-300">
                                <div class="text-2xl font-bold text-green-600">{{ $siswa->foto ? '✓' : '✗' }}</div>
                                <div class="text-xs text-green-500 font-medium">Foto Profil</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Details Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                    <!-- NIS Card -->
                    <div class="group bg-gradient-to-br from-white to-blue-50 rounded-2xl p-8 shadow-lg border border-blue-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 animate-fade-in-left">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 group-hover:text-blue-600 transition-colors">Nomor Induk Siswa</h3>
                                <p class="text-sm text-gray-500">Identitas unik siswa</p>
                            </div>
                        </div>
                        <p class="text-3xl font-bold text-gray-900 mb-2">{{ $siswa->nis }}</p>
                        <div class="w-full bg-blue-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>

                    <!-- Class Card -->
                    <div class="group bg-gradient-to-br from-white to-green-50 rounded-2xl p-8 shadow-lg border border-green-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 animate-fade-in-right">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 group-hover:text-green-600 transition-colors">Kelas</h3>
                                <p class="text-sm text-gray-500">Tingkat pendidikan</p>
                            </div>
                        </div>
                        <p class="text-3xl font-bold text-gray-900 mb-2">{{ $siswa->kelas }}</p>
                        <div class="w-full bg-green-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-green-500 to-green-600 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                </div>

                <!-- Address Card - Full Width -->
                <div class="group bg-gradient-to-br from-white to-purple-50 rounded-2xl p-8 shadow-lg border border-purple-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 mb-12 animate-fade-in-up animation-delay-500">
                    <div class="flex items-start mb-6">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-gray-800 group-hover:text-purple-600 transition-colors mb-2">Alamat Lengkap</h3>
                            <p class="text-sm text-gray-500 mb-4">Tempat tinggal siswa</p>
                            <p class="text-gray-900 leading-relaxed text-lg">{{ $siswa->alamat }}</p>
                            
                            <!-- Address stats -->
                            <div class="mt-4 flex items-center space-x-4 text-sm text-gray-500">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    {{ str_word_count($siswa->alamat) }} kata
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg>
                                    {{ strlen($siswa->alamat) }} karakter
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 animate-fade-in-up animation-delay-700">
                    <a href="{{ route('siswas.edit', $siswa) }}"
                        class="group flex-1 relative overflow-hidden bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-2xl px-8 py-4 font-semibold shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">
                        <span class="absolute inset-0 bg-white/20 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></span>
                        <div class="relative flex items-center justify-center">
                            <svg class="w-6 h-6 mr-3 transform group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            <span class="text-lg">Edit Profil</span>
                        </div>
                    </a>

                    <form action="{{ route('siswas.destroy', $siswa) }}" method="POST" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="group w-full relative overflow-hidden bg-gradient-to-r from-red-600 to-red-700 text-white rounded-2xl px-8 py-4 font-semibold shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-105"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <span class="absolute inset-0 bg-white/20 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></span>
                            <div class="relative flex items-center justify-center">
                                <svg class="w-6 h-6 mr-3 transform group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                <span class="text-lg">Hapus Siswa</span>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Enhanced Animations */
    @keyframes float {
        0%, 100% { 
            transform: translateY(0px) rotate(0deg); 
        }
        50% { 
            transform: translateY(-20px) rotate(2deg); 
        }
    }

    @keyframes float-delayed {
        0%, 100% { 
            transform: translateY(0px) rotate(0deg); 
        }
        50% { 
            transform: translateY(-15px) rotate(-1deg); 
        }
    }

    @keyframes drift {
        0% { transform: translateX(0px); }
        100% { transform: translateX(50px); }
    }

    @keyframes fade-in-down {
        0% {
            opacity: 0;
            transform: translateY(-30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fade-in-up {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fade-in-left {
        0% {
            opacity: 0;
            transform: translateX(-30px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fade-in-right {
        0% {
            opacity: 0;
            transform: translateX(30px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes scale-in {
        0% {
            opacity: 0;
            transform: scale(0.8);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes bounce-subtle {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-5px);
        }
    }

    @keyframes blob-animation {
        0% {
            transform: translate(0px, 0px) scale(1);
        }
        33% {
            transform: translate(30px, -50px) scale(1.1);
        }
        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }
        100% {
            transform: translate(0px, 0px) scale(1);
        }
    }

    .animate-float {
        animation: float 8s ease-in-out infinite;
    }

    .animate-float-delayed {
        animation: float-delayed 6s ease-in-out infinite;
    }

    .animate-fade-in-down {
        animation: fade-in-down 0.8s ease-out forwards;
    }

    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out forwards;
    }

    .animate-fade-in-left {
        animation: fade-in-left 0.8s ease-out forwards;
    }

    .animate-fade-in-right {
        animation: fade-in-right 0.8s ease-out forwards;
    }

    .animate-scale-in {
        animation: scale-in 0.8s ease-out forwards;
    }

    .animate-bounce-subtle {
        animation: bounce-subtle 2s ease-in-out infinite;
    }

    .animate-blob {
        animation: blob-animation 7s infinite;
    }

    .animation-delay-300 {
        animation-delay: 300ms;
    }

    .animation-delay-500 {
        animation-delay: 500ms;
    }

    .animation-delay-700 {
        animation-delay: 700ms;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    /* Shadow utilities */
    .shadow-3xl {
        box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
    }
</style>
@endsection