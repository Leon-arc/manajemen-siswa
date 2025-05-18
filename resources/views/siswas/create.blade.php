@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100">
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <!-- Enhanced Header Section -->
        <div class="mb-8 relative">
            <!-- Background Shapes -->
            <div class="absolute -top-8 right-0 w-64 h-64 bg-gradient-to-br from-violet-500/5 to-purple-500/5 rounded-full blur-3xl"></div>
            <div class="absolute -top-4 right-12 w-32 h-32 bg-gradient-to-br from-indigo-500/5 to-blue-500/5 rounded-full blur-2xl animate-pulse"></div>
            
            <div class="flex items-center justify-between relative">
                <div>
                    <h1 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-violet-600 to-indigo-600">
                        Tambah Siswa Baru
                    </h1>
                    <p class="mt-2 text-gray-600">
                        Lengkapi informasi siswa pada formulir di bawah ini
                    </p>
                </div>
                <div class="hidden md:flex space-x-3">
                    <!-- Status Tag -->
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-violet-50 text-violet-700 border border-violet-100">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                        Mode Tambah
                    </span>
                </div>
            </div>

            <!-- Separator with Dots -->
            <div class="relative mt-6">
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center">
                    <div class="bg-white px-3">
                        <div class="flex space-x-2">
                            <div class="h-2 w-2 rounded-full bg-violet-600"></div>
                            <div class="h-2 w-2 rounded-full bg-indigo-600"></div>
                            <div class="h-2 w-2 rounded-full bg-blue-600"></div>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-0 flex items-center mt-3" aria-hidden="true">
                    <div class="w-full border-t border-gray-100"></div>
                </div>
            </div>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100/80 overflow-hidden">
            <div class="p-6">
                <form action="{{ route('siswas.store') }}" method="POST">
                    @csrf
                    @include('siswas._form')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection