@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-purple-50 py-10 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-indigo-300/20 to-purple-300/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute -bottom-32 left-0 w-96 h-96 bg-gradient-to-tr from-blue-300/20 to-cyan-300/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
    <div class="absolute top-1/2 left-1/3 w-96 h-96 bg-gradient-to-tr from-purple-300/20 to-pink-300/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
    
    <div class="max-w-5xl mx-auto">
        <!-- Enhanced Header with Animation -->
        <div class="relative mb-12">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                <div class="max-w-2xl relative z-10">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 border border-indigo-200 mb-3 animate-fade-in-down">
                        <span class="animate-pulse mr-2 h-2 w-2 rounded-full bg-indigo-600"></span>
                        Form Input Data
                    </div>
                    <h1 class="text-4xl font-extrabold mb-3 bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600 animate-fade-in-down animation-delay-150">
                        Tambah Siswa Baru
                    </h1>
                    <p class="text-gray-600 md:text-lg max-w-2xl animate-fade-in-down animation-delay-300">
                        Silakan lengkapi formulir berikut dengan informasi lengkap dan benar
                    </p>
                </div>
                
                <div class="relative animate-fade-in-down animation-delay-450">
                    <a href="{{ route('siswas.index') }}" 
                       class="group inline-flex items-center px-5 py-3 text-base font-medium rounded-xl text-white bg-gradient-to-r from-gray-600 to-gray-700 hover:from-gray-700 hover:to-gray-800 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="relative flex items-center">
                            <span class="absolute w-0 h-full rounded-xl left-0 bottom-0 bg-white/20 group-hover:w-full transition-all duration-300 ease-in-out"></span>
                            <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform duration-200 ease-out" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            <span class="relative">Kembali ke Daftar</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Decorative Animated Separator -->
            <div class="relative my-10">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200/50"></div>
                </div>
                
                <div class="relative flex justify-center">
                    <div class="bg-white px-6 py-3 rounded-full shadow-sm border border-gray-100">
                        <div class="flex space-x-3">
                            <div class="h-3 w-3 rounded-full bg-indigo-600 animate-pulse"></div>
                            <div class="h-3 w-3 rounded-full bg-violet-600 animate-pulse animation-delay-500"></div>
                            <div class="h-3 w-3 rounded-full bg-purple-600 animate-pulse animation-delay-1000"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Form Card with Animation -->
        <div class="transform transition duration-500 animate-fade-in-up">
            <div class="relative group">
                <!-- Card Glow Effect -->
                <div class="absolute -inset-0.5 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl blur-lg opacity-20 group-hover:opacity-40 transition duration-1000 group-hover:duration-300"></div>
                
                <!-- Card Content -->
                <div class="relative bg-white rounded-2xl shadow-xl border border-gray-100/80 overflow-hidden">
                    <div class="absolute top-0 w-full h-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500"></div>
                    
                    <!-- Form Header with Progress -->
                    <div class="px-6 py-5 bg-gradient-to-r from-gray-50 to-slate-50 border-b border-gray-100">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div class="flex items-center">
                                <div class="p-2 bg-indigo-100 rounded-full mr-3">
                                    <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="text-lg font-semibold text-gray-800">Form Data Siswa</h2>
                                    <p class="text-sm text-gray-500">Isi semua bidang yang ditandai dengan <span class="text-red-500">*</span></p>
                                </div>
                            </div>
                            
                            <div class="bg-white pl-4 pr-5 py-2 rounded-full shadow-sm border border-gray-100 flex items-center space-x-2">
                                <div class="flex items-center">
                                    <div class="w-6 h-6 rounded-full bg-indigo-600 flex items-center justify-center">
                                        <span class="text-xs text-white font-bold">1</span>
                                    </div>
                                    <div class="ml-2 text-xs font-medium text-indigo-700">Input</div>
                                </div>
                                <div class="w-5 h-0.5 bg-gray-200"></div>
                                <div class="flex items-center opacity-50">
                                    <div class="w-6 h-6 rounded-full bg-gray-200 flex items-center justify-center">
                                        <span class="text-xs text-gray-600 font-bold">2</span>
                                    </div>
                                    <div class="ml-2 text-xs font-medium text-gray-500">Verifikasi</div>
                                </div>
                                <div class="w-5 h-0.5 bg-gray-200"></div>
                                <div class="flex items-center opacity-50">
                                    <div class="w-6 h-6 rounded-full bg-gray-200 flex items-center justify-center">
                                        <span class="text-xs text-gray-600 font-bold">3</span>
                                    </div>
                                    <div class="ml-2 text-xs font-medium text-gray-500">Selesai</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Form Content -->
                    <div class="p-8">
                        <form action="{{ route('siswas.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                            @csrf
                            @include('siswas._form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Animations */
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

    .animate-fade-in-down {
        animation: fade-in-down 0.5s ease-out forwards;
    }
    
    .animate-fade-in-up {
        animation: fade-in-up 0.5s ease-out forwards;
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
</style>
@endsection