@extends('layouts.app')
@section('content')
<div class="mb-8">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold bg-gradient-to-r from-amber-600 to-orange-600 bg-clip-text text-transparent">
                Edit Data Siswa
            </h1>
            <p class="mt-2 text-sm text-gray-600">Silakan edit formulir di bawah ini untuk memperbarui data siswa</p>
        </div>
        <div class="bg-gradient-to-r from-amber-200 to-orange-200 p-3 rounded-2xl">
            <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
        </div>
    </div>
    <div class="h-1 w-full bg-gradient-to-r from-amber-600 to-orange-600 rounded-full mt-4"></div>
</div>

<form action="{{ route('siswas.update', $siswa) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    @include('siswas._form')
</form>
@endsection