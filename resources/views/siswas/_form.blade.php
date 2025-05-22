<div class="min-h-screen py-12 bg-gradient-to-br from-gray-50 via-white to-gray-100">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto">
            <!-- Enhanced Centered Header -->
            <div class="text-center mb-12">
                <!-- Title Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-50 border border-blue-100 mb-4">
                    <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                    <span class="text-sm font-medium text-blue-700">{{ isset($siswa) ? 'Mode Edit' : 'Siswa Baru' }}</span>
                </div>

                <!-- Main Title -->
                <h1 class="text-4xl font-bold mb-4">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600">
                        {{ isset($siswa) ? 'Edit Data Siswa' : 'Tambah Siswa Baru' }}
                    </span>
                </h1>

                <!-- Description with Icon -->
                <div class="flex items-center gap-3 text-gray-600 justify-center mb-6">
                    <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-base">Silakan lengkapi formulir di bawah ini dengan informasi yang benar</p>
                </div>

                <!-- Progress Steps -->
                <div class="flex items-center justify-center gap-2 mt-6">
                    <div class="flex items-center gap-2">
                        <span class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-sm font-medium">1</span>
                        <span class="text-sm font-medium text-blue-600">Isi Form</span>
                    </div>
                    <div class="w-12 h-[2px] bg-gray-200"></div>
                    <div class="flex items-center gap-2">
                        <span class="w-8 h-8 rounded-full bg-gray-100 text-gray-500 flex items-center justify-center text-sm font-medium">2</span>
                        <span class="text-sm font-medium text-gray-500">Verifikasi</span>
                    </div>
                    <div class="w-12 h-[2px] bg-gray-200"></div>
                    <div class="flex items-center gap-2">
                        <span class="w-8 h-8 rounded-full bg-gray-100 text-gray-500 flex items-center justify-center text-sm font-medium">3</span>
                        <span class="text-sm font-medium text-gray-500">Selesai</span>
                    </div>
                </div>
            </div>

            <!-- Card with decorative design -->
            <div class="relative group">
                <!-- Decorative shapes -->
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-gradient-to-br from-blue-600/30 to-indigo-600/30 rounded-full blur-2xl opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-tr from-violet-600/30 to-purple-600/30 rounded-full blur-2xl opacity-20 group-hover:opacity-30 transition-opacity duration-500"></div>

                <!-- Main Form Card -->
                <div class="relative bg-white/70 backdrop-blur-xl rounded-2xl shadow-xl border border-gray-200/70 overflow-hidden">
                    <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,transparent,black)] opacity-20"></div>
                    
                    <!-- Form Content -->
                    <div class="relative p-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nama & NIS Fields -->
                            <div class="md:col-span-2 space-y-6">
                                <div class="form-group transform transition-all duration-200 ease-in-out hover:scale-[1.01]">
                                    <label for="nama" class="block text-sm font-semibold text-indigo-700 mb-2">Nama Lengkap</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </div>
                                        <input type="text"
                                            name="nama"
                                            id="nama"
                                            class="pl-10 w-full h-12 rounded-xl border-2 border-indigo-200 focus:border-indigo-500 focus:ring focus:ring-indigo-200 transition-all hover:border-indigo-300 @error('nama') border-red-500 @enderror"
                                            value="{{ old('nama', $siswa->nama ?? '') }}"
                                            required
                                            placeholder="Masukkan nama lengkap">
                                    </div>
                                    @error('nama')
                                    <p class="mt-1 text-sm text-red-500 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="space-y-6">
                                <div class="form-group transform transition-all duration-200 ease-in-out hover:scale-[1.01]">
                                    <label for="nis" class="block text-sm font-semibold text-emerald-700 mb-2">NIS</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                            </svg>
                                        </div>
                                        <input type="text"
                                            name="nis"
                                            id="nis"
                                            class="pl-10 w-full h-12 rounded-xl border-2 border-emerald-200 focus:border-emerald-500 focus:ring focus:ring-emerald-200 transition-all hover:border-emerald-300 @error('nis') border-red-500 @enderror"
                                            value="{{ old('nis', $siswa->nis ?? '') }}"
                                            required
                                            placeholder="Masukkan NIS">
                                    </div>
                                    @error('nis')
                                    <p class="mt-1 text-sm text-red-500 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="space-y-6">
                                <div class="form-group transform transition-all duration-200 ease-in-out hover:scale-[1.01]">
                                    <label for="kelas" class="block text-sm font-semibold text-purple-700 mb-2">Kelas</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                            </svg>
                                        </div>
                                        <select
                                            name="kelas"
                                            id="kelas"
                                            class="pl-10 w-full h-12 rounded-xl border-2 border-purple-200 focus:border-purple-500 focus:ring focus:ring-purple-200 transition-all hover:border-purple-300 @error('kelas') border-red-500 @enderror bg-white text-gray-700 appearance-none pr-10"
                                            required
                                        >
                                            <option value="" disabled {{ old('kelas', $siswa->kelas ?? '') == '' ? 'selected' : '' }}>Pilih Kelas</option>
                                            <option value="RPL" {{ old('kelas', $siswa->kelas ?? '') == 'RPL' ? 'selected' : '' }}>RPL</option>
                                            <option value="DKV 1" {{ old('kelas', $siswa->kelas ?? '') == 'DKV 1' ? 'selected' : '' }}>DKV 1</option>
                                            <option value="DKV 2" {{ old('kelas', $siswa->kelas ?? '') == 'DKV 2' ? 'selected' : '' }}>DKV 2</option>
                                            <option value="MP" {{ old('kelas', $siswa->kelas ?? '') == 'MP' ? 'selected' : '' }}>MP</option>
                                            <option value="AK" {{ old('kelas', $siswa->kelas ?? '') == 'AK' ? 'selected' : '' }}>AK</option>
                                            <option value="BR" {{ old('kelas', $siswa->kelas ?? '') == 'BR' ? 'selected' : '' }}>BR</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                                            <svg class="h-5 w-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </div>
                                    </div>
                                    @error('kelas')
                                    <p class="mt-1 text-sm text-red-500 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Alamat Field spanning full width -->
                            <div class="md:col-span-2 space-y-6">
                                <div class="form-group transform transition-all duration-200 ease-in-out hover:scale-[1.01]">
                                    <label for="alamat" class="block text-sm font-semibold text-orange-700 mb-2">Alamat</label>
                                    <div class="relative">
                                        <div class="absolute left-3 top-3 flex items-start pointer-events-none">
                                            <svg class="h-5 w-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </div>
                                        <textarea
                                            name="alamat"
                                            id="alamat"
                                            class="pl-10 w-full min-h-[120px] rounded-xl border-2 border-orange-200 focus:border-orange-500 focus:ring focus:ring-orange-200 transition-all hover:border-orange-300 resize-none @error('alamat') border-red-500 @enderror"
                                            required
                                            placeholder="Masukkan alamat lengkap">{{ old('alamat', $siswa->alamat ?? '') }}</textarea>
                                    </div>
                                    @error('alamat')
                                    <p class="mt-1 text-sm text-red-500 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="md:col-span-2 space-y-6">
                                <div class="form-group transform transition-all duration-200 ease-in-out hover:scale-[1.01]">
                                    <label for="foto" class="block text-sm font-semibold text-indigo-700 mb-2">Foto Siswa</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                        <div class="pl-10 w-full">
                                            <input type="file"
                                                name="foto"
                                                id="foto"
                                                accept="image/*"
                                                class="w-full h-12 rounded-xl border-2 border-indigo-200 focus:border-indigo-500 focus:ring focus:ring-indigo-200 transition-all hover:border-indigo-300 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:bg-indigo-50 file:text-indigo-700 file:font-medium hover:file:bg-indigo-100 @error('foto') border-red-500 @enderror">
                                            <div class="mt-2 text-sm text-gray-500">Upload foto siswa (JPG, PNG, max 2MB)</div>
                                            @if(isset($siswa) && $siswa->foto)
                                                <div class="mt-2">
                                                    <p class="text-sm text-gray-500">Foto saat ini: <span class="text-indigo-600 font-medium">{{ basename($siswa->foto) }}</span></p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    @error('foto')
                                    <p class="mt-1 text-sm text-red-500 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Action Buttons spanning full width -->
                            <div class="md:col-span-2">
                                <div class="flex flex-col sm:flex-row gap-4 mt-8 pt-6 border-t border-gray-100">
                                    <button type="submit"
                                        class="flex-1 px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-medium rounded-xl transform transition-all duration-300 hover:scale-[1.02] active:scale-[.98] hover:shadow-xl hover:shadow-blue-600/20 active:shadow-none">
                                        <span class="flex items-center justify-center">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span>{{ isset($siswa) ? 'Update Data' : 'Simpan Data' }}</span>
                                        </span>
                                    </button>

                                    <a href="{{ route('siswas.index') }}"
                                        class="flex-1 px-6 py-3 bg-gradient-to-r from-gray-500 to-gray-600 text-white font-medium rounded-xl transform transition-all duration-300 hover:scale-[1.02] active:scale-[.98] hover:shadow-xl hover:shadow-gray-500/20 active:shadow-none">
                                        <span class="flex items-center justify-center">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                            </svg>
                                            <span>Kembali</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-grid-slate-100 {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='32' height='32' fill='none' stroke='rgb(51 65 85 / 0.05)'%3e%3cpath d='M0 .5H31.5V32'/%3e%3c/svg%3e");
    }

    @keyframes gradient {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    .group:hover .bg-gradient-animate {
        animation: gradient 8s ease infinite;
        background-size: 200% 200%;
    }
</style>