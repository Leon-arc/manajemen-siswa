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
                        <div class="space-y-8">
    <!-- Form Fields Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Nama Field - Full Width -->
        <div class="md:col-span-2">
            <div class="group relative transform transition-all duration-300 hover:scale-[1.01]">
                <!-- Label with Required Indicator -->
                <label for="nama" class="flex items-center text-sm font-semibold text-gray-700 mb-1.5 group-hover:text-indigo-700 transition-colors">
                    <span>Nama Lengkap</span>
                    <span class="text-red-500 ml-1">*</span>
                    <div class="ml-2 text-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </label>
                
                <!-- Input Field with Icon -->
                <div class="relative mt-1 rounded-xl shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-indigo-400 group-hover:text-indigo-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <input type="text"
                        name="nama"
                        id="nama"
                        class="pl-12 pr-4 py-3.5 w-full text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:ring focus:ring-indigo-200 focus:border-indigo-600 transition-all group-hover:border-indigo-300 @error('nama') border-red-300 focus:border-red-500 focus:ring-red-200 @enderror"
                        value="{{ old('nama', $siswa->nama ?? '') }}"
                        required
                        placeholder="Masukkan nama lengkap siswa">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
                
                <!-- Error Message -->
                @error('nama')
                <p class="mt-2 text-sm text-red-600 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    {{ $message }}
                </p>
                @enderror
                
                <!-- Helper Text -->
                <p class="mt-1.5 text-xs text-gray-500 flex items-center">
                    <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Masukkan nama lengkap dengan ejaan yang benar
                </p>
            </div>
        </div>

        <!-- NIS Field -->
        <div class="group relative transform transition-all duration-300 hover:scale-[1.01]">
            <label for="nis" class="flex items-center text-sm font-semibold text-gray-700 mb-1.5 group-hover:text-emerald-700 transition-colors">
                <span>Nomor Induk Siswa (NIS)</span>
                <span class="text-red-500 ml-1">*</span>
                <div class="ml-2 text-emerald-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </label>
            
            <div class="relative mt-1 rounded-xl shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-emerald-400 group-hover:text-emerald-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                    </svg>
                </div>
                <input type="text"
                    name="nis"
                    id="nis"
                    class="pl-12 pr-4 py-3.5 w-full text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:ring focus:ring-emerald-200 focus:border-emerald-600 transition-all group-hover:border-emerald-300 @error('nis') border-red-300 focus:border-red-500 focus:ring-red-200 @enderror"
                    value="{{ old('nis', $siswa->nis ?? '') }}"
                    required
                    placeholder="Contoh: 202205123">
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>
            
            @error('nis')
            <p class="mt-2 text-sm text-red-600 flex items-center">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                {{ $message }}
            </p>
            @enderror
            
            <p class="mt-1.5 text-xs text-gray-500 flex items-center">
                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                NIS harus unik untuk setiap siswa
            </p>
        </div>

        <!-- Kelas Field -->
        <div class="group relative transform transition-all duration-300 hover:scale-[1.01]">
            <label for="kelas" class="flex items-center text-sm font-semibold text-gray-700 mb-1.5 group-hover:text-purple-700 transition-colors">
                <span>Kelas</span>
                <span class="text-red-500 ml-1">*</span>
                <div class="ml-2 text-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </label>
            
            <div class="relative mt-1 rounded-xl shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-purple-400 group-hover:text-purple-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
                <select
                    name="kelas"
                    id="kelas"
                    class="pl-12 pr-12 py-3.5 w-full text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:ring focus:ring-purple-200 focus:border-purple-600 transition-all group-hover:border-purple-300 appearance-none @error('kelas') border-red-300 focus:border-red-500 focus:ring-red-200 @enderror"
                    required>
                    <option value="" disabled {{ old('kelas', $siswa->kelas ?? '') == '' ? 'selected' : '' }}>Pilih Kelas</option>
                    <option value="RPL" {{ old('kelas', $siswa->kelas ?? '') == 'RPL' ? 'selected' : '' }}>RPL</option>
                    <option value="DKV 1" {{ old('kelas', $siswa->kelas ?? '') == 'DKV 1' ? 'selected' : '' }}>DKV 1</option>
                    <option value="DKV 2" {{ old('kelas', $siswa->kelas ?? '') == 'DKV 2' ? 'selected' : '' }}>DKV 2</option>
                    <option value="MP" {{ old('kelas', $siswa->kelas ?? '') == 'MP' ? 'selected' : '' }}>MP</option>
                    <option value="AK" {{ old('kelas', $siswa->kelas ?? '') == 'AK' ? 'selected' : '' }}>AK</option>
                    <option value="BR" {{ old('kelas', $siswa->kelas ?? '') == 'BR' ? 'selected' : '' }}>BR</option>
                </select>
                
                <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                    <svg class="h-5 w-5 text-purple-400 group-hover:text-purple-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
            
            @error('kelas')
            <p class="mt-2 text-sm text-red-600 flex items-center">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                {{ $message }}
            </p>
            @enderror
            
            <p class="mt-1.5 text-xs text-gray-500 flex items-center">
                <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Pilih kelas sesuai dengan penempatan siswa
            </p>
        </div>

        <!-- Alamat Field - Full Width -->
        <div class="md:col-span-2">
            <div class="group relative transform transition-all duration-300 hover:scale-[1.01]">
                <label for="alamat" class="flex items-center text-sm font-semibold text-gray-700 mb-1.5 group-hover:text-amber-700 transition-colors">
                    <span>Alamat Lengkap</span>
                    <span class="text-red-500 ml-1">*</span>
                    <div class="ml-2 text-amber-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </label>
                
                <div class="relative mt-1 rounded-xl shadow-sm">
                    <div class="absolute top-3.5 left-3.5 flex items-start pointer-events-none">
                        <svg class="h-5 w-5 text-amber-400 group-hover:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <textarea
                        name="alamat"
                        id="alamat"
                        rows="3"
                        class="pl-12 pr-4 py-3.5 w-full text-gray-700 bg-white border-2 border-gray-200 rounded-xl focus:ring focus:ring-amber-200 focus:border-amber-600 transition-all group-hover:border-amber-300 resize-none @error('alamat') border-red-300 focus:border-red-500 focus:ring-red-200 @enderror"
                        required
                        placeholder="Masukkan alamat lengkap siswa termasuk RT/RW, kelurahan, dan kecamatan">{{ old('alamat', $siswa->alamat ?? '') }}</textarea>
                </div>
                
                @error('alamat')
                <p class="mt-2 text-sm text-red-600 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    {{ $message }}
                </p>
                @enderror
                
                <p class="mt-1.5 text-xs text-gray-500 flex items-center">
                    <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Alamat akan digunakan untuk keperluan korespondensi dan administrasi
                </p>
            </div>
        </div>

        <!-- Foto Field - Full Width with Enhanced UI -->
        <div class="md:col-span-2">
            <div class="group rounded-2xl border-2 border-dashed border-gray-200 group-hover:border-indigo-300 p-6 transition-all duration-300 bg-gray-50 group-hover:bg-indigo-50/30">
                <label for="foto" class="flex items-center text-sm font-semibold text-gray-700 mb-3 group-hover:text-indigo-700 transition-colors">
                    <span>Foto Siswa</span>
                    <div class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-indigo-100 text-indigo-800">
                        Opsional
                    </div>
                    <div class="ml-2 text-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </label>
                
                <div class="relative mt-1">
                    <!-- Hidden file input -->
                    <input type="file"
                        name="foto"
                        id="foto"
                        accept="image/*"
                        class="absolute inset-0 w-full h-full opacity-0 z-50 cursor-pointer"
                        onchange="showPreview(event)">
                    
                    <!-- Upload UI -->
                    <div class="flex flex-col items-center justify-center py-8 bg-white rounded-xl border-2 border-gray-200 group-hover:border-indigo-200 transition-all duration-300 relative overflow-hidden">
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 opacity-5 bg-[radial-gradient(#6366f1_1px,transparent_1px)] [background-size:16px_16px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_70%,transparent_100%)]"></div>
                        
                        <!-- Hover Effect -->
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-400/0 via-indigo-400/5 to-indigo-400/0 opacity-0 group-hover:opacity-100 animate-shimmer"></div>
                        
                        <!-- Upload Content -->
                        <div class="upload-placeholder flex flex-col items-center relative z-10">
                            <div class="mb-4 rounded-full bg-indigo-100 p-4 group-hover:bg-indigo-200 group-hover:scale-110 transform transition-all duration-300">
                                <svg class="h-8 w-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <p class="text-indigo-700 font-medium">Klik atau seret foto siswa ke sini</p>
                            <p class="text-sm text-indigo-500 mt-1">Format: JPG, PNG (Maks. 2MB)</p>
                            
                            <div class="flex space-x-2 mt-4">
                                <div class="px-4 py-2 bg-indigo-50 rounded-lg text-xs font-medium text-indigo-700 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                    </svg>
                                    Pilih File
                                </div>
                                <div class="px-4 py-2 bg-gray-50 rounded-lg text-xs font-medium text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Gunakan Kamera
                                </div>
                            </div>
                        </div>
                        
                        <!-- Preview Image -->
                        <div id="preview-container" class="hidden w-full h-full absolute inset-0 bg-white flex justify-center items-center">
                            <img id="preview-image" class="max-h-[200px] object-contain" src="#" alt="Preview">
                        </div>
                    </div>
                    
                    <!-- Current Photo Preview -->
                    @if(isset($siswa) && $siswa->foto)
                    <div class="mt-4 flex items-center p-4 bg-white rounded-xl shadow-sm border border-indigo-100">
                        <div class="flex-shrink-0 h-16 w-16 bg-gradient-to-br from-indigo-50 to-purple-50 rounded-lg overflow-hidden flex items-center justify-center border border-indigo-200">
                            <img src="{{ asset('storage/'.$siswa->foto) }}" alt="{{ $siswa->nama }}" class="h-full w-full object-cover">
                        </div>
                        <div class="ml-4 flex-1">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-sm font-medium text-gray-700">Foto saat ini</p>
                                    <p class="text-xs text-gray-500 break-all">{{ basename($siswa->foto) }}</p>
                                </div>
                                <div class="bg-indigo-100 text-indigo-800 text-xs px-1.5 py-0.5 rounded-md font-medium">
                                    Active
                                </div>
                            </div>
                            <p class="text-xs text-indigo-600 mt-1 flex items-center">
                                <svg class="w-3 h-3 mr-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Upload foto baru untuk mengganti
                            </p>
                        </div>
                    </div>
                    @endif
                    
                    <!-- Buttons and Info Section -->
                    <div class="mt-3 flex justify-between items-center">
                        <p class="text-xs text-gray-500 flex items-center">
                            <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Untuk mendapatkan hasil terbaik, gunakan foto rasio 3:4 dengan ukuran minimal 300x400px
                        </p>
                        <button type="button" id="remove-image" class="hidden px-2 py-1 text-xs font-medium text-red-600 bg-red-50 hover:bg-red-100 rounded-md transition-colors flex items-center" onclick="removePreview()">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Hapus
                        </button>
                    </div>
                </div>
                
                @error('foto')
                <p class="mt-2 text-sm text-red-600 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    {{ $message }}
                </p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Submit and Cancel Buttons Section -->
    <div class="pt-6 mt-6 border-t border-gray-100">
        <div class="flex flex-col sm:flex-row gap-4">
            <button type="submit" class="group relative flex-1 overflow-hidden rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 px-6 py-4 text-white shadow-md transition-all duration-300 hover:shadow-lg hover:from-indigo-700 hover:to-purple-700 active:scale-[0.98]">
                <div class="relative flex items-center justify-center">
                    <!-- Sparkle Effect -->
                    <div class="absolute bg-white/20 -inset-full top-0 block transform -skew-x-12 opacity-30 group-hover:duration-1000 group-hover:opacity-0"></div>
                    
                    <svg class="w-5 h-5 mr-2 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="font-medium text-base">{{ isset($siswa) ? 'Update Data Siswa' : 'Simpan Data Siswa' }}</span>
                </div>
            </button>

            <a href="{{ route('siswas.index') }}" class="group relative flex-1 overflow-hidden rounded-xl bg-gradient-to-r from-gray-100 to-gray-200 px-6 py-4 text-gray-700 shadow-md border border-gray-300 transition-all duration-300 hover:bg-gradient-to-r hover:from-gray-200 hover:to-gray-300 active:scale-[0.98]">
                <div class="relative flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span class="font-medium text-base">Kembali ke Daftar</span>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    function showPreview(event) {
        const input = event.target;
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const previewContainer = document.getElementById('preview-container');
                const previewImage = document.getElementById('preview-image');
                const uploadPlaceholder = document.querySelector('.upload-placeholder');
                const removeBtn = document.getElementById('remove-image');
                
                previewImage.src = e.target.result;
                previewContainer.classList.remove('hidden');
                uploadPlaceholder.classList.add('hidden');
                removeBtn.classList.remove('hidden');
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    function removePreview() {
        const input = document.getElementById('foto');
        const previewContainer = document.getElementById('preview-container');
        const previewImage = document.getElementById('preview-image');
        const uploadPlaceholder = document.querySelector('.upload-placeholder');
        const removeBtn = document.getElementById('remove-image');
        
        input.value = '';
        previewImage.src = '#';
        previewContainer.classList.add('hidden');
        uploadPlaceholder.classList.remove('hidden');
        removeBtn.classList.add('hidden');
    }
</script>

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
    
    @keyframes shimmer {
        0% {
            transform: translateX(-100%);
        }
        100% {
            transform: translateX(100%);
        }
    }
    
    .animate-shimmer {
        animation: shimmer 2.5s infinite;
    }
</style>