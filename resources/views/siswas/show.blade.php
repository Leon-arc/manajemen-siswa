@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-cyan-50 py-12 relative">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob"></div>
    <div class="absolute top-0 right-0 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob animation-delay-4000"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Enhanced Back Button -->
        <div class="mb-6">
            <a href="{{ route('siswas.index') }}"
                class="group relative inline-flex items-center px-6 py-3 bg-white border-2 border-indigo-500 rounded-xl
                hover:bg-gradient-to-r hover:from-indigo-500 hover:to-blue-500 
                transition-all duration-300 ease-in-out transform hover:-translate-y-0.5 hover:scale-105
                hover:shadow-lg hover:shadow-indigo-200">
                <!-- Animated Icon -->
                <div class="relative z-10">
                    <svg class="w-5 h-5 mr-2 text-indigo-500 group-hover:text-white transition-colors duration-300 transform 
                        group-hover:-translate-x-1"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </div>
                <!-- Text with Hover Effect -->
                <span class="relative z-10 font-semibold text-indigo-500 group-hover:text-white transition-colors duration-300">
                    Kembali ke Daftar Siswa
                </span>
                <!-- Decorative Dot -->
                <div class="absolute right-3 top-1/2 -translate-y-1/2 w-1.5 h-1.5 rounded-full 
                    bg-indigo-500 group-hover:bg-white transition-all duration-300 opacity-50 group-hover:opacity-100">
                </div>
                <!-- Background Shine Effect -->
                <div class="absolute inset-0 h-full w-full group-hover:scale-105 group-hover:rotate-1 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/5 to-transparent opacity-0 
                        group-hover:opacity-100 group-hover:animate-shine transition-opacity duration-300">
                    </div>
                </div>
            </a>
        </div>

        <!-- Enhanced Profile Card -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
            <!-- Enhanced Header with Interactive Gradient -->
            <div class="h-40 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-black/10 to-black/30"></div>
                <div class="absolute inset-0 bg-grid-white/10"></div>
            </div>

            <!-- Enhanced Profile Content -->
            <div class="relative px-6 pb-8">
                <!-- Enhanced Profile Image -->
                <div class="relative -mt-20 mb-6">
                    <div class="w-36 h-36 rounded-full bg-gradient-to-r from-blue-200 via-indigo-200 to-purple-200 mx-auto shadow-xl ring-4 ring-white flex items-center justify-center transform hover:scale-105 transition-transform duration-300 overflow-hidden">
                        @if($siswa->foto)
                        <img src="{{ asset('storage/'.$siswa->foto) }}" alt="{{ $siswa->nama }}" class="w-full h-full object-cover">
                        @else
                        <svg class="w-20 h-20 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        @endif
                    </div>
                </div>

                <!-- Enhanced Student Info -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $siswa->nama }}</h1>
                    <div class="flex items-center justify-center space-x-2">
                        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-semibold bg-indigo-100 text-indigo-800">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            Kelas {{ $siswa->kelas }}
                        </span>
                    </div>
                </div>

                <!-- Enhanced Details Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Enhanced NIS Card -->
                    <div class="p-5 rounded-xl bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-100 transform transition-all duration-300 hover:scale-105 hover:shadow-lg group">
                        <div class="flex items-center space-x-4">
                            <div class="p-3 bg-blue-100 rounded-lg group-hover:bg-blue-200 transition-colors duration-300">
                                <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-blue-600">Nomor Induk Siswa</p>
                                <p class="text-xl font-bold text-gray-900">{{ $siswa->nis }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Created At Card -->
                    <div class="p-5 rounded-xl bg-gradient-to-br from-purple-50 to-pink-50 border border-purple-100 transform transition-all duration-300 hover:scale-105 hover:shadow-lg group">
                        <div class="flex items-center space-x-4">
                            <div class="p-3 bg-purple-100 rounded-lg group-hover:bg-purple-200 transition-colors duration-300">
                                <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-purple-600">Terdaftar Sejak</p>
                                <p class="text-xl font-bold text-gray-900">{{ $siswa->created_at->format('d M Y') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Address Card -->
                    <div class="md:col-span-2">
                        <div class="p-5 rounded-xl bg-gradient-to-br from-emerald-50 to-teal-50 border border-emerald-100 transform transition-all duration-300 hover:scale-105 hover:shadow-lg group">
                            <div class="flex items-start space-x-4">
                                <div class="p-3 bg-emerald-100 rounded-lg group-hover:bg-emerald-200 transition-colors duration-300">
                                    <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-emerald-600">Alamat</p>
                                    <p class="text-xl font-bold text-gray-900">{{ $siswa->alamat }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Action Buttons -->
                <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                    <a href="{{ route('siswas.edit', $siswa) }}"
                        class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        <span class="font-medium">Edit Profil</span>
                    </a>
                    <form action="{{ route('siswas.destroy', $siswa) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            <span class="font-medium">Hapus Siswa</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .animate-blob {
        animation: blob 7s infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    @keyframes blob {
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

    .bg-grid-white\/10 {
        background-image: linear-gradient(to right, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
        background-size: 24px 24px;
    }

    @keyframes shine {
        from {
            transform: translateX(-100%) rotate(45deg);
        }

        to {
            transform: translateX(100%) rotate(45deg);
        }
    }

    .animate-shine {
        animation: shine 1.5s ease-in-out infinite;
    }
</style>
@endsection