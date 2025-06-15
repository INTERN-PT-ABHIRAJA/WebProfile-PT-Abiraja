@extends('layouts.dashboard')

@section('title', isset($item) ? 'Edit Anak Perusahaan' : 'Tambah Anak Perusahaan')

@section('content')
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-800">{{ isset($item) ? 'Edit Anak Perusahaan' : 'Tambah Anak Perusahaan Baru' }}</h3>
        </div>
        
        <form action="{{ $formAction }}" method="POST" class="p-6" enctype="multipart/form-data">
            @csrf
            @if($formMethod === 'PUT')
                @method('PUT')
            @endif
            
            <div class="mb-6">
                <label for="nama_perusahaan" class="block text-sm font-medium text-gray-700 mb-1">Nama Perusahaan</label>
                <input type="text" name="nama_perusahaan" id="nama_perusahaan" value="{{ old('nama_perusahaan', $item?->nama_perusahaan ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                @error('nama_perusahaan')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="id_kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                <select name="id_kategori" id="id_kategori" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach(\App\Models\Kategori::all() as $kategori)
                        <option value="{{ $kategori->id_kategori }}" {{ old('id_kategori', $item?->id_kategori ?? '') == $kategori->id_kategori ? 'selected' : '' }}>
                            {{ $kategori->nama_kategori }}
                        </option>
                    @endforeach
                </select>
                @error('id_kategori')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="id_user" class="block text-sm font-medium text-gray-700 mb-1">User (Pemilik/Pengelola)</label>
                <select name="id_user" id="id_user" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                    <option value="">-- Pilih User --</option>
                    @foreach(\App\Models\User::all() as $user)
                        <option value="{{ $user->id_user }}" {{ old('id_user', $item?->id_user ?? '') == $user->id_user ? 'selected' : '' }}>
                            {{ $user->nama }} ({{ $user->email }})
                        </option>
                    @endforeach
                </select>
                @error('id_user')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>{{ old('deskripsi', $item?->deskripsi ?? '') }}</textarea>
                @error('deskripsi')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="3" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>{{ old('alamat', $item?->alamat ?? '') }}</textarea>
                    @error('alamat')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">Telepon</label>
                    <input type="text" name="telepon" id="telepon" value="{{ old('telepon', $item?->telepon ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                    @error('telepon')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="mb-6">
                <label for="berdiri_sejak" class="block text-sm font-medium text-gray-700 mb-1">Berdiri Sejak</label>
                <input type="date" name="berdiri_sejak" id="berdiri_sejak" value="{{ old('berdiri_sejak', $item?->berdiri_sejak?->format('Y-m-d') ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">
                @error('berdiri_sejak')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Logo Perusahaan</label>
                    @if(isset($item) && $item->foto)
                        <div class="mb-2">
                            <img src="{{ Storage::url($item->foto) }}" alt="Logo" class="w-20 h-20 object-cover rounded">
                            <p class="text-xs text-gray-500 mt-1">Logo saat ini</p>
                        </div>
                    @endif
                    <input type="file" name="foto" id="foto" accept="image/*" class="w-full border border-gray-300 rounded-md p-2">
                    <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF (Maks. 2MB)</p>
                    @error('foto')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="video" class="block text-sm font-medium text-gray-700 mb-1">Video Profil</label>
                    @if(isset($item) && $item->video)
                        <div class="mb-2">
                            <video width="100" height="60" controls class="rounded">
                                <source src="{{ Storage::url($item->video) }}" type="video/mp4">
                            </video>
                            <p class="text-xs text-gray-500 mt-1">Video saat ini</p>
                        </div>
                    @endif
                    <input type="file" name="video" id="video" accept="video/*" class="w-full border border-gray-300 rounded-md p-2">
                    <p class="text-xs text-gray-500 mt-1">Format: MP4, MOV, AVI (Maks. 20MB)</p>
                    @error('video')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="flex justify-end">
                <a href="{{ route('dashboard.companies.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 mr-2">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-md text-sm hover:bg-primary-700">
                    {{ isset($item) ? 'Update' : 'Simpan' }}
                </button>
            </div>
        </form>
    </div>
@endsection
