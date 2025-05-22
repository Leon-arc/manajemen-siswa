@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-indigo-50 py-10 px-4 sm:px-6 lg:px-8 relative">
    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob"></div>
    <div class="absolute top-0 right-0 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob animation-delay-4000"></div>

    <div class="max-w-7xl mx-auto relative">
        <!-- Header Section with Animation -->
        <div class="mb-10 relative z-10">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div class="md:max-w-2xl">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 border border-indigo-200 mb-3">
                        <span class="animate-pulse mr-2 h-2 w-2 rounded-full bg-indigo-600"></span>
                        Manajemen Data
                    </div>
                    <h1 class="text-4xl font-extrabold mb-3 bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600">
                        Daftar Siswa
                    </h1>
                    <p class="text-gray-600 md:text-lg max-w-2xl">
                        Kelola dan pantau data siswa dengan lebih efisien. Temukan dan edit informasi dengan cepat.
                    </p>
                </div>
                
                <div class="flex items-center space-x-4">
                    <div class="flex -space-x-2 overflow-hidden">
                        <div class="inline-block h-12 w-12 rounded-full ring-2 ring-white bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white font-bold">
                            {{ substr($totalSiswa, 0, 1) }}
                        </div>
                        <div class="inline-block h-12 w-12 rounded-full ring-2 ring-white bg-gradient-to-br from-purple-500 to-violet-600 flex items-center justify-center text-white font-bold">
                            {{ substr($totalSiswa, 1, 1) > 0 ? substr($totalSiswa, 1, 1) : '0' }}
                        </div>
                        <div class="inline-block h-12 w-12 rounded-full ring-2 ring-white bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center text-white font-bold">
                            {{ substr($totalSiswa, 2, 1) > 0 ? substr($totalSiswa, 2, 1) : '0' }}
                        </div>
                    </div>
                    
                    <a href="{{ route('siswas.create') }}" 
                       class="inline-flex items-center px-5 py-3 text-base font-medium rounded-xl text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 shadow-lg hover:shadow-xl shadow-blue-500/20 hover:shadow-blue-600/30 transition-all duration-300 transform hover:-translate-y-1">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Tambah Siswa
                    </a>
                </div>
            </div>

            <!-- Animated Separator -->
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center">
                    <div class="bg-white px-4 py-2 rounded-full shadow-sm">
                        <div class="flex space-x-2">
                            <div class="h-2.5 w-2.5 rounded-full bg-indigo-600 animate-pulse"></div>
                            <div class="h-2.5 w-2.5 rounded-full bg-violet-600 animate-pulse animation-delay-500"></div>
                            <div class="h-2.5 w-2.5 rounded-full bg-purple-600 animate-pulse animation-delay-1000"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards with Enhanced Design -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <!-- Total Siswa -->
            <div class="bg-gradient-to-br from-white to-indigo-50 rounded-2xl shadow-sm border border-indigo-100 overflow-hidden group hover:shadow-lg transition-all duration-500 hover:-translate-y-1">
                <div class="p-6 relative">
                    <div class="absolute right-0 top-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-indigo-100 transform rotate-45 group-hover:scale-125 transition-transform duration-500"></div>
                    <div class="absolute right-5 top-5 text-indigo-500 transform group-hover:rotate-45 transition-transform duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="relative">
                        <h3 class="text-sm font-semibold text-indigo-600 uppercase tracking-wider mb-1">Total Siswa</h3>
                        <div class="flex items-baseline">
                            <p class="text-4xl font-extrabold text-gray-900">{{ number_format($totalSiswa) }}</p>
                            <p class="ml-2 text-sm text-indigo-600 font-medium">Siswa</p>
                        </div>
                        <div class="flex items-center mt-4 text-xs font-semibold text-indigo-500">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            <span>{{ number_format($persentasePertumbuhan, 1) }}% dari bulan lalu</span>
                        </div>
                    </div>
                </div>
                <!-- Progress Bar -->
                <div class="h-1.5 w-full bg-gradient-to-r from-indigo-400 to-indigo-600 transform origin-left scale-x-50 group-hover:scale-x-100 transition-transform duration-500"></div>
            </div>
            
            <!-- More stat cards with similar enhanced styling -->
            <!-- Rata-rata Per Kelas -->
            <div class="bg-gradient-to-br from-white to-blue-50 rounded-2xl shadow-sm border border-blue-100 overflow-hidden group hover:shadow-lg transition-all duration-500 hover:-translate-y-1">
                <div class="p-6 relative">
                    <div class="absolute right-0 top-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-blue-100 transform rotate-45 group-hover:scale-125 transition-transform duration-500"></div>
                    <div class="absolute right-5 top-5 text-blue-500 transform group-hover:rotate-45 transition-transform duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div class="relative">
                        <h3 class="text-sm font-semibold text-blue-600 uppercase tracking-wider mb-1">Rata-rata Per Kelas</h3>
                        <div class="flex items-baseline">
                            <p class="text-4xl font-extrabold text-gray-900">{{ number_format($rataRataPerKelas, 1) }}</p>
                            <p class="ml-2 text-sm text-blue-600 font-medium">Siswa/kelas</p>
                        </div>
                        <div class="flex items-center mt-4 text-xs font-semibold text-blue-500">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            <span>{{ $totalKelas }} Total Kelas</span>
                        </div>
                    </div>
                </div>
                <!-- Progress Bar -->
                <div class="h-1.5 w-full bg-gradient-to-r from-blue-400 to-blue-600 transform origin-left scale-x-50 group-hover:scale-x-100 transition-transform duration-500"></div>
            </div>

            <!-- Kelas Terbanyak -->
            <div class="bg-gradient-to-br from-white to-emerald-50 rounded-2xl shadow-sm border border-emerald-100 overflow-hidden group hover:shadow-lg transition-all duration-500 hover:-translate-y-1">
                <div class="p-6 relative">
                    <div class="absolute right-0 top-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-emerald-100 transform rotate-45 group-hover:scale-125 transition-transform duration-500"></div>
                    <div class="absolute right-5 top-5 text-emerald-500 transform group-hover:rotate-45 transition-transform duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <div class="relative">
                        <h3 class="text-sm font-semibold text-emerald-600 uppercase tracking-wider mb-1">Kelas Terbanyak</h3>
                        <div class="flex items-baseline">
                            <p class="text-4xl font-extrabold text-gray-900">{{ $kelasTerbanyak }}</p>
                            <p class="ml-2 text-sm text-emerald-600 font-medium">{{ $jumlahSiswaKelasTerbanyak }} siswa</p>
                        </div>
                        <div class="flex items-center mt-4 text-xs font-semibold text-emerald-500">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
                            </svg>
                            <span>Kelas dengan siswa terbanyak</span>
                        </div>
                    </div>
                </div>
                <!-- Progress Bar -->
                <div class="h-1.5 w-full bg-gradient-to-r from-emerald-400 to-emerald-600 transform origin-left scale-x-50 group-hover:scale-x-100 transition-transform duration-500"></div>
            </div>

            <!-- Siswa Baru -->
            <div class="bg-gradient-to-br from-white to-amber-50 rounded-2xl shadow-sm border border-amber-100 overflow-hidden group hover:shadow-lg transition-all duration-500 hover:-translate-y-1">
                <div class="p-6 relative">
                    <div class="absolute right-0 top-0 -mt-4 -mr-4 h-16 w-16 rounded-full bg-amber-100 transform rotate-45 group-hover:scale-125 transition-transform duration-500"></div>
                    <div class="absolute right-5 top-5 text-amber-500 transform group-hover:rotate-45 transition-transform duration-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div class="relative">
                        <h3 class="text-sm font-semibold text-amber-600 uppercase tracking-wider mb-1">Siswa Baru Bulan Ini</h3>
                        <div class="flex items-baseline">
                            <p class="text-4xl font-extrabold text-gray-900">{{ number_format($siswaBaru) }}</p>
                            <p class="ml-2 text-sm text-amber-600 font-medium">Siswa</p>
                        </div>
                        <div class="flex items-center mt-4 text-xs font-semibold text-amber-500">
                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>{{ $persentaseSiswaBaru }}% pertumbuhan</span>
                        </div>
                    </div>
                </div>
                <!-- Progress Bar -->
                <div class="h-1.5 w-full bg-gradient-to-r from-amber-400 to-amber-600 transform origin-left scale-x-50 group-hover:scale-x-100 transition-transform duration-500"></div>
            </div>
        </div>

        <!-- Search Section with Glass Morphism Effect -->
        <div class="mb-10 backdrop-blur-sm bg-white/70 rounded-2xl shadow-lg border border-gray-100 p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div class="flex items-center">
                    <div class="p-3 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl shadow-md mr-4 text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800">Cari Siswa</h2>
                        <p class="text-sm text-gray-600">Temukan data siswa berdasarkan nama atau NIS</p>
                    </div>
                </div>
                
                <form action="{{ route('siswas.index') }}" method="GET" class="flex-1 md:max-w-lg">
                    <div class="relative">
                        <input type="text" name="query"
                            class="w-full pl-12 pr-14 py-4 rounded-xl border-2 border-amber-200 focus:border-amber-500 focus:ring focus:ring-amber-200 transition-all shadow-sm hover:shadow-md text-gray-700 placeholder-gray-400"
                            placeholder="Cari berdasarkan nama atau NIS..."
                            value="{{ request('query') }}">
                        <span class="absolute left-4 top-4 text-amber-500">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </span>
                        <button type="submit" class="absolute right-3 top-3 p-1.5 bg-amber-500 hover:bg-amber-600 rounded-lg text-white transition-colors">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Success Message with Animation -->
        @if(session('success'))
        <div class="mb-6 animate-bounce-in">
            <div class="rounded-xl bg-gradient-to-r from-green-50 to-emerald-50 border border-green-100 p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-green-100 rounded-xl p-3">
                        <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-medium text-green-800">Sukses!</h3>
                        <p class="text-green-700">{{ session('success') }}</p>
                    </div>
                    <div class="ml-auto pl-3">
                        <div class="-mx-1.5 -my-1.5">
                            <button type="button" class="inline-flex bg-green-100 rounded-lg p-1.5 text-green-500 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                <span class="sr-only">Dismiss</span>
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Enhanced Table Section -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gradient-to-r from-gray-50 to-slate-50">
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Siswa</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">NIS</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Kelas</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Alamat</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse($siswas as $siswa)
                        <tr class="hover:bg-blue-50/40 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 rounded-full overflow-hidden bg-slate-100 flex items-center justify-center border border-slate-200">
                                        @if($siswa->foto)
                                            <img src="{{ asset('storage/'.$siswa->foto) }}" alt="{{ $siswa->nama }}" class="h-full w-full object-cover">
                                        @else
                                            <svg class="h-6 w-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        @endif
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-semibold text-gray-900">{{ $siswa->nama }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600 font-medium">{{ $siswa->nis }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1.5 inline-flex items-center text-xs font-bold rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
                                    {{ $siswa->kelas }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                {{ $siswa->alamat }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm">
                                <div class="flex justify-center gap-2">
                                    <!-- View Button -->
                                    <a href="{{ route('siswas.show', $siswa) }}"
                                        class="inline-flex items-center px-3 py-1.5 bg-gradient-to-r from-blue-500 to-indigo-500 
                                        hover:from-blue-600 hover:to-indigo-600 text-white rounded-lg font-medium text-sm
                                        transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg hover:shadow-blue-200">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        <span>Detail</span>
                                    </a>

                                    <!-- Edit Button -->
                                    <a href="{{ route('siswas.edit', $siswa) }}"
                                        class="inline-flex items-center px-3 py-1.5 bg-gradient-to-r from-amber-500 to-orange-500 
                                        hover:from-amber-600 hover:to-orange-600 text-white rounded-lg font-medium text-sm
                                        transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg hover:shadow-orange-200">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        <span>Edit</span>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('siswas.destroy', $siswa) }}" method="POST" class="inline-block">
                                        @csrf @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center px-3 py-1.5 bg-gradient-to-r from-red-500 to-pink-500 
                                            hover:from-red-600 hover:to-pink-600 text-white rounded-lg font-medium text-sm
                                            transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg hover:shadow-red-200"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?')">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            <span>Hapus</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center">
                                    <div class="p-4 bg-blue-50 rounded-full mb-4">
                                        <svg class="w-16 h-16 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                        </svg>
                                    </div>
                                    <p class="text-xl font-bold text-gray-700 mb-1">Tidak ada data siswa</p>
                                    <p class="text-gray-500 mb-6">Belum ada data siswa yang tersedia di sistem</p>
                                    <a href="{{ route('siswas.create') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors flex items-center shadow-md hover:shadow-lg">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                        Tambah Siswa Baru
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Enhanced Pagination with Custom Design -->
        <div class="mt-8">
            <div class="bg-white rounded-xl shadow-md border border-gray-100 p-4">
                {{ $siswas->appends(['query' => request('query')])->links() }}
            </div>
        </div>
    </div>
</div>

<style>
    /* Animations */
    .animate-bounce-in {
        animation: bounce-in 0.7s ease-out;
    }
    
    @keyframes bounce-in {
        0% {
            opacity: 0;
            transform: scale(0.8) translateY(-10px);
        }
        50% {
            opacity: 1;
            transform: scale(1.05) translateY(0);
        }
        100% {
            transform: scale(1) translateY(0);
        }
    }
    
    .animation-delay-500 {
        animation-delay: 500ms;
    }
    
    .animation-delay-1000 {
        animation-delay: 1000ms;
    }
    
    .animate-blob {
        animation: blob-animation 7s infinite;
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
            transform: translate(30px, -50px) scale(1.1);
        }
        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }
        100% {
            transform: translate(0px, 0px) scale(1);
        }
    }
</style>
@endsection