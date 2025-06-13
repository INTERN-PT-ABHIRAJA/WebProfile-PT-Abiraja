@extends('layouts.dashboard')

@section('title', 'Tambah Produk')

@section('content')
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-800">Tambah Produk Baru</h3>
        </div>
        
        <form action="{{ route('dashboard.products.store') }}" method="POST" class="p-6" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-6">
                <label for="id_anak_perusahaan" class="block text-sm font-medium text-gray-700 mb-1">Anak Perusahaan</label>
                <select name="id_anak_perusahaan" id="id_anak_perusahaan" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                    <option value="">-- Pilih Anak Perusahaan --</option>
                    @foreach(\App\Models\AnakPerusahaan::all() as $company)
                        <option value="{{ $company->id_anak_perusahaan }}" {{ old('id_anak_perusahaan') == $company->id_anak_perusahaan ? 'selected' : '' }}>
                            {{ $company->nama_perusahaan }}
                        </option>
                    @endforeach
                </select>
                @error('id_anak_perusahaan')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mb-6">
                    <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" value="{{ old('nama_produk') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                    @error('nama_produk')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-6">
                        <label for="harga" class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">Rp</span>
                            </div>
                            <input type="number" name="harga" id="harga" min="0" step="0.01" value="{{ old('harga') }}" class="w-full pl-12 border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                        </div>
                        @error('harga')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label for="stok" class="block text-sm font-medium text-gray-700 mb-1">Stok</label>
                        <input type="number" name="stok" id="stok" min="0" value="{{ old('stok') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                        @error('stok')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="mb-6">
                <label for="deskripsi_produk" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Produk</label>
                <textarea name="deskripsi_produk" id="deskripsi_produk" rows="4" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">{{ old('deskripsi_produk') }}</textarea>
                @error('deskripsi_produk')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Foto Produk</label>
                    <input type="file" name="foto" id="foto" class="w-full border border-gray-300 rounded-md p-2">
                    <p class="text-xs text-gray-500 mt-1">Format: JPEG, PNG, JPG, GIF (Maks. 2MB)</p>
                    @error('foto')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="video" class="block text-sm font-medium text-gray-700 mb-1">Video Produk (opsional)</label>
                    <input type="file" name="video" id="video" class="w-full border border-gray-300 rounded-md p-2">
                    <p class="text-xs text-gray-500 mt-1">Format: MP4, MOV, OGG, QT (Maks. 20MB)</p>
                    @error('video')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="flex justify-end">
                <a href="{{ route('dashboard.products.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 mr-2">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-md text-sm hover:bg-primary-700">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection
