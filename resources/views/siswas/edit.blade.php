@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-amber-50 via-orange-50 to-red-50 py-10 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    <!-- Enhanced Background Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-amber-300/20 to-orange-300/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute -bottom-32 left-0 w-96 h-96 bg-gradient-to-tr from-orange-300/20 to-red-300/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
    <div class="absolute top-1/2 left-1/3 w-96 h-96 bg-gradient-to-tr from-yellow-300/20 to-amber-300/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
    
    <!-- Floating geometric shapes -->
    <div class="absolute top-20 right-10 w-4 h-4 bg-amber-400 rounded-full animate-float opacity-60"></div>
    <div class="absolute top-40 left-20 w-6 h-6 bg-orange-400 rounded-full animate-float-delayed opacity-60"></div>
    <div class="absolute bottom-40 right-1/4 w-3 h-3 bg-red-400 rounded-full animate-bounce opacity-60"></div>

    <div class="max-w-5xl mx-auto relative z-10">
        <!-- Enhanced Header with Animation -->
        <div class="relative mb-12">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                <div class="max-w-2xl relative z-10">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-amber-100 text-amber-800 border border-amber-200 mb-3 animate-fade-in-down">
                        <span class="animate-pulse mr-2 h-2 w-2 rounded-full bg-amber-600"></span>
                        Mode Edit Data
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl font-extrabold mb-4 animate-fade-in-down animation-delay-150">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-amber-600 via-orange-600 to-red-600 drop-shadow-lg">
                            Edit Data Siswa
                        </span>
                    </h1>
                    
                    <p class="text-gray-600 md:text-lg max-w-2xl animate-fade-in-down animation-delay-300">
                        Perbarui informasi siswa dengan mudah. Pastikan semua data yang dimasukkan akurat dan terbaru.
                    </p>
                </div>
                
                <!-- Back Button with Enhanced Animation -->
                <div class="animate-fade-in-down animation-delay-450">
                    <a href="{{ route('siswas.index') }}" 
                        class="group relative inline-flex items-center px-6 py-3 bg-white/90 backdrop-blur-sm border border-amber-200 rounded-xl text-amber-700 hover:bg-amber-50 hover:text-amber-800 hover:border-amber-300 transition-all duration-300 shadow-sm hover:shadow-lg transform hover:-translate-y-1 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-amber-400/0 via-amber-400/5 to-amber-400/0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative flex items-center">
                            <span class="absolute w-0 h-full rounded-xl left-0 bottom-0 bg-amber-100/50 group-hover:w-full transition-all duration-300 ease-in-out"></span>
                            <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform duration-200 ease-out relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            <span class="relative z-10 font-medium">Kembali ke Daftar</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Decorative Animated Separator -->
            <div class="relative my-10">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-amber-200/50"></div>
                </div>
                
                <div class="relative flex justify-center">
                    <div class="bg-white px-4 py-2 rounded-full shadow-sm border border-amber-100">
                        <div class="flex space-x-3">
                            <div class="h-3 w-3 rounded-full bg-amber-600 animate-pulse"></div>
                            <div class="h-3 w-3 rounded-full bg-orange-600 animate-pulse animation-delay-500"></div>
                            <div class="h-3 w-3 rounded-full bg-red-600 animate-pulse animation-delay-1000"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Form Card with Animation -->
        <div class="transform transition duration-500 animate-fade-in-up">
            <div class="relative group">
                <!-- Card Glow Effect -->
                <div class="absolute -inset-0.5 bg-gradient-to-r from-amber-500 to-orange-500 rounded-2xl blur-lg opacity-20 group-hover:opacity-40 transition duration-1000 group-hover:duration-300"></div>
                
                <!-- Card Content -->
                <div class="relative bg-white rounded-2xl shadow-xl border border-amber-100/80 overflow-hidden">
                    <div class="absolute top-0 w-full h-1 bg-gradient-to-r from-amber-500 via-orange-500 to-red-500"></div>
                    
                    <!-- Form Header with Student Info -->
                    <div class="px-6 py-6 bg-gradient-to-r from-amber-50 to-orange-50 border-b border-amber-100">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div class="flex items-center">
                                <div class="p-3 bg-amber-100 rounded-2xl mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <svg class="h-8 w-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900">Edit Profil Siswa</h2>
                                    <p class="text-sm text-gray-600 mt-1">
                                        Sedang mengedit: <span class="font-semibold text-amber-700">{{ $siswa->nama }}</span>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Student Quick Info -->
                            <div class="flex items-center space-x-3">
                                <div class="text-center p-3 bg-white rounded-xl border border-amber-200 shadow-sm">
                                    <div class="text-lg font-bold text-amber-600">{{ $siswa->nis }}</div>
                                    <div class="text-xs text-gray-500">NIS</div>
                                </div>
                                <div class="text-center p-3 bg-white rounded-xl border border-amber-200 shadow-sm">
                                    <div class="text-lg font-bold text-orange-600">{{ $siswa->kelas }}</div>
                                    <div class="text-xs text-gray-500">Kelas</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Progress Indicator -->
                        <div class="mt-6">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-700">Progress Edit</span>
                                <span class="text-sm text-gray-500">Langkah 1 dari 1</span>
                            </div>
                            <div class="w-full bg-amber-200 rounded-full h-2">
                                <div class="bg-gradient-to-r from-amber-600 to-orange-600 h-2 rounded-full transition-all duration-1000 animate-progress" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Form Content -->
                    <div class="p-8">
                        <!-- Student Photo Preview (if exists) -->
                        @if($siswa->foto)
                        <div class="mb-8 flex justify-center animate-fade-in-up animation-delay-300">
                            <div class="relative group">
                                <div class="absolute -inset-1 bg-gradient-to-r from-amber-500 via-orange-500 to-red-500 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                                <div class="relative w-32 h-32 rounded-2xl overflow-hidden border-4 border-white shadow-xl">
                                    <img src="{{ asset('storage/'.$siswa->foto) }}" alt="{{ $siswa->nama }}" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div class="absolute -bottom-2 -right-2 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                    <svg class="w-3 h-3 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Ada Foto
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Form -->
                        <form action="{{ route('siswas.update', $siswa) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                            @csrf 
                            @method('PUT')
                            @include('siswas._form')
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Info Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 animate-fade-in-up animation-delay-500">
            <!-- Last Updated -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg border border-amber-100 p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-500 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Terakhir Diupdate</h3>
                        <p class="text-sm text-gray-500">{{ $siswa->updated_at->format('d M Y, H:i') }}</p>
                    </div>
                </div>
            </div>

            <!-- Data Status -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg border border-green-100 p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Status Data</h3>
                        <p class="text-sm text-green-600 font-medium">Lengkap & Valid</p>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg border border-blue-100 p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900">Aksi Cepat</h3>
                        <a href="{{ route('siswas.show', $siswa) }}" class="text-sm text-blue-600 hover:text-blue-700 font-medium">Lihat Profil →</a>
                    </div>
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

    @keyframes fade-in-down {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fade-in-up {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes blob-animation {
        0% {
            transform: translate(0px, 0px) scale(1);
        }
        33% {
            transform: translate(30px, -30px) scale(1.1);
        }
        66% {
            transform: translate(-30px, 30px) scale(0.9);
        }
        100% {
            transform: translate(0px, 0px) scale(1);
        }
    }

    @keyframes progress {
        0% {
            width: 0%;
        }
        100% {
            width: 100%;
        }
    }

    .animate-float {
        animation: float 8s ease-in-out infinite;
    }

    .animate-float-delayed {
        animation: float-delayed 6s ease-in-out infinite;
    }

    .animate-fade-in-down {
        animation: fade-in-down 0.5s ease-out forwards;
    }
    
    .animate-fade-in-up {
        animation: fade-in-up 0.5s ease-out forwards;
    }

    .animate-progress {
        animation: progress 2s ease-out forwards;
    }

    .animation-delay-150 {
        animation-delay: 150ms;
    }
    
    .animation-delay-300 {
        animation-delay: 300ms;
    }
    
    .animation-delay-450 {
        animation-delay: 450ms;
    }
    
    .animation-delay-500 {
        animation-delay: 500ms;
    }
    
    .animation-delay-1000 {
        animation-delay: 1000ms;
    }
    
    .animate-blob {
        animation: blob-animation 10s infinite ease alternate;
    }
    
    .animation-delay-2000 {
        animation-delay: 2s;
    }
    
    .animation-delay-4000 {
        animation-delay: 4s;
    }

    /* Enhanced Hover Effects */
    .group:hover .animate-pulse {
        animation-duration: 0.5s;
    }

    /* Shadow Utilities */
    .shadow-3xl {
        box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
    }
</style>
@endsection