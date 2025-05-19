@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100">
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="mb-8 relative">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600">
                        Daftar Siswa
                    </h1>
                    <p class="mt-2 text-gray-600">
                        Kelola dan pantau data siswa dengan lebih efisien
                    </p>
                </div>
                <div class="hidden md:flex space-x-4">
                    <!-- Icon Group -->
                    <div class="flex items-center space-x-3">
                        <!-- Students Icon -->
                        <div class="p-3 bg-gradient-to-br from-violet-100 to-purple-100 rounded-2xl border border-violet-50 shadow-sm hover:shadow-md transition-shadow duration-300">
                            <svg class="w-7 h-7 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <!-- School Icon -->
                        <div class="p-3 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-2xl border border-blue-50 shadow-sm hover:shadow-md transition-shadow duration-300">
                            <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <!-- Achievement Icon -->
                        <div class="p-3 bg-gradient-to-br from-amber-100 to-orange-100 rounded-2xl border border-amber-50 shadow-sm hover:shadow-md transition-shadow duration-300">
                            <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Decorative separator -->
            <div class="relative mt-6">
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center">
                    <div class="bg-white px-3">
                        <div class="flex space-x-2">
                            <div class="h-2 w-2 rounded-full bg-blue-600"></div>
                            <div class="h-2 w-2 rounded-full bg-indigo-600"></div>
                            <div class="h-2 w-2 rounded-full bg-violet-600"></div>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-0 flex items-center mt-3" aria-hidden="true">
                    <div class="w-full border-t border-gray-100"></div>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Total Siswa -->
            <div class="bg-white rounded-2xl shadow-sm border border-violet-100/50 p-6 relative overflow-hidden group hover:shadow-lg transition-all duration-300">
                <div class="absolute right-0 top-0 -mt-4 -mr-12 opacity-20 group-hover:opacity-30 transition-opacity">
                    <svg class="w-32 h-32 text-violet-600 transform rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <div class="relative">
                    <p class="text-sm font-medium text-violet-600">Total Siswa</p>
                    <div class="flex items-baseline">
                        <p class="text-3xl font-bold text-gray-900 mt-2">{{ number_format($totalSiswa) }}</p>
                        <p class="ml-2 text-sm text-violet-600">Siswa</p>
                    </div>
                    <div class="flex items-center mt-4 text-xs text-violet-500">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <span>{{ number_format($persentasePertumbuhan, 1) }}% dari bulan lalu</span>
                    </div>
                </div>
            </div>

            <!-- Siswa Per Kelas -->
            <div class="bg-white rounded-2xl shadow-sm border border-indigo-100/50 p-6 relative overflow-hidden group hover:shadow-lg transition-all duration-300">
                <div class="absolute right-0 top-0 -mt-4 -mr-12 opacity-20 group-hover:opacity-30 transition-opacity">
                    <svg class="w-32 h-32 text-indigo-600 transform rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <div class="relative">
                    <p class="text-sm font-medium text-indigo-600">Rata-rata Per Kelas</p>
                    <div class="flex items-baseline">
                        <p class="text-3xl font-bold text-gray-900 mt-2">{{ number_format($rataRataPerKelas, 1) }}</p>
                        <p class="ml-2 text-sm text-indigo-600">Siswa/kelas</p>
                    </div>
                    <div class="flex items-center mt-4 text-xs text-indigo-500">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <span>{{ $totalKelas }} Total Kelas</span>
                    </div>
                </div>
            </div>

            <!-- Kelas Terbanyak -->
            <div class="bg-white rounded-2xl shadow-sm border border-emerald-100/50 p-6 relative overflow-hidden group hover:shadow-lg transition-all duration-300">
                <div class="absolute right-0 top-0 -mt-4 -mr-12 opacity-20 group-hover:opacity-30 transition-opacity">
                    <svg class="w-32 h-32 text-emerald-600 transform rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <div class="relative">
                    <p class="text-sm font-medium text-emerald-600">Kelas Terbanyak</p>
                    <div class="flex items-baseline">
                        <p class="text-3xl font-bold text-gray-900 mt-2">{{ $kelasTerbanyak }}</p>
                        <p class="ml-2 text-sm text-emerald-600">{{ $jumlahSiswaKelasTerbanyak }} siswa</p>
                    </div>
                    <div class="flex items-center mt-4 text-xs text-emerald-500">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <span>Kelas dengan siswa terbanyak</span>
                    </div>
                </div>
            </div>

            <!-- Siswa Baru -->
            <div class="bg-white rounded-2xl shadow-sm border border-amber-100/50 p-6 relative overflow-hidden group hover:shadow-lg transition-all duration-300">
                <div class="absolute right-0 top-0 -mt-4 -mr-12 opacity-20 group-hover:opacity-30 transition-opacity">
                    <svg class="w-32 h-32 text-amber-600 transform rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4" />
                    </svg>
                </div>
                <div class="relative">
                    <p class="text-sm font-medium text-amber-600">Siswa Baru Bulan Ini</p>
                    <div class="flex items-baseline">
                        <p class="text-3xl font-bold text-gray-900 mt-2">{{ number_format($siswaBaru) }}</p>
                        <p class="ml-2 text-sm text-amber-600">Siswa</p>
                    </div>
                    <div class="flex items-center mt-4 text-xs text-amber-500">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ $persentaseSiswaBaru }}% pertumbuhan</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <!-- Search Card -->
            <div class="bg-white rounded-xl shadow-md border border-gray-100/80 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 p-2 bg-gradient-to-br from-amber-100 to-orange-100 rounded-lg">
                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <h3 class="ml-3 text-lg font-semibold text-gray-900">Cari Siswa</h3>
                    </div>
                    <form action="{{ route('siswas.index') }}" method="GET">
                        <div class="relative">
                            <input type="text" name="query"
                                class="w-full pl-12 pr-4 py-3 rounded-xl border-2 border-amber-200 focus:border-amber-500 focus:ring focus:ring-amber-200 transition-colors"
                                placeholder="Cari berdasarkan nama atau NIS..."
                                value="{{ request('query') }}">
                            <span class="absolute left-4 top-3.5 text-amber-500">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Add Student Card -->
            <div class="bg-white rounded-xl shadow-md border border-gray-100/80 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 p-2 bg-gradient-to-br from-green-100 to-emerald-100 rounded-lg">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-900">Tambah Siswa</h3>
                                <p class="text-sm text-gray-600">Daftarkan siswa baru ke dalam sistem</p>
                            </div>
                        </div>
                        <a href="{{ route('siswas.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white text-sm font-medium rounded-lg transition duration-150 ease-in-out shadow-md hover:shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Tambah Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div class="mb-6 animate-fade-in-down">
            <div class="rounded-xl bg-gradient-to-r from-green-50 to-emerald-50 border border-green-100 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Table Section -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">NIS</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Kelas</th>
                            <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Alamat</th>
                            <th scope="col" class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($siswas as $siswa)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">{{ $siswa->nama }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600">{{ $siswa->nis }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    {{ $siswa->kelas }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                {{ $siswa->alamat }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm">
                                <div class="flex justify-center gap-3">
                                    <!-- View Button -->
                                    <a href="{{ route('siswas.show', $siswa) }}"
                                        class="inline-flex items-center px-3.5 py-1.5 bg-gradient-to-r from-blue-500 to-indigo-500 
                                        hover:from-blue-600 hover:to-indigo-600 text-white rounded-lg font-medium text-sm
                                        transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg hover:shadow-blue-200
                                        focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        <span class="relative top-px">Detail</span>
                                    </a>

                                    <!-- Edit Button -->
                                    <a href="{{ route('siswas.edit', $siswa) }}"
                                        class="inline-flex items-center px-3.5 py-1.5 bg-gradient-to-r from-amber-500 to-orange-500 
                                        hover:from-amber-600 hover:to-orange-600 text-white rounded-lg font-medium text-sm
                                        transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg hover:shadow-orange-200
                                        focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
                                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        <span class="relative top-px">Edit</span>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('siswas.destroy', $siswa) }}" method="POST" class="inline-block">
                                        @csrf @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center px-3.5 py-1.5 bg-gradient-to-r from-red-500 to-pink-500 
                                            hover:from-red-600 hover:to-pink-600 text-white rounded-lg font-medium text-sm
                                            transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg hover:shadow-red-200
                                            focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            <span class="relative top-px">Hapus</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                <div class="flex flex-col items-center">
                                    <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                    </svg>
                                    <p class="text-lg font-medium">Tidak ada data siswa</p>
                                    <p class="text-sm text-gray-500">Silakan tambahkan data siswa baru</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Enhanced Pagination -->
        <div class="mt-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100/80 p-4">
                {{ $siswas->appends(['query' => request('query')])->links() }}
            </div>
        </div>
    </div>
</div>

<style>
    .animate-fade-in-down {
        animation: fade-in-down 0.5s ease-out;
    }

    @keyframes fade-in-down {
        0% {
            opacity: 0;
            transform: translateY(-10px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection