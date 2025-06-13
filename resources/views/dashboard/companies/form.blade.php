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
                    <option value="">Pilih Kategori</option>
                    @foreach($formConfig['id_kategori']['options'] ?? [] as $value => $label)
                        <option value="{{ $value }}" {{ old('id_kategori', $item?->id_kategori ?? '') == $value ? 'selected' : '' }}>
                            {{ $label }}
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
                    <option value="">Pilih User</option>
                    @foreach($formConfig['id_user']['options'] ?? \App\Models\User::all()->pluck('nama', 'id_user') as $value => $label)
                        <option value="{{ $value }}" {{ old('id_user', $item?->id_user ?? '') == $value ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
                @error('id_user')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="5" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>{{ old('deskripsi', $item?->deskripsi ?? '') }}</textarea>
                @error('deskripsi')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>{{ old('alamat', $item?->alamat ?? '') }}</textarea>
                @error('alamat')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                <input type="text" name="telepon" id="telepon" value="{{ old('telepon', $item?->telepon ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                @error('telepon')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Logo</label>
                <input type="file" name="foto" id="foto" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">
                @if(isset($item) && $item->foto)
                    <div class="mt-2">
                        <img src="{{ Storage::url($item->foto) }}" alt="Logo Perusahaan" class="h-24 w-auto">
                        <p class="text-xs text-gray-500 mt-1">Logo saat ini. Unggah gambar baru untuk menggantinya.</p>
                    </div>
                @endif
                @error('foto')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="video" class="block text-sm font-medium text-gray-700 mb-1">Video</label>
                <input type="file" name="video" id="video" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">
                @if(isset($item) && $item->video)
                    <div class="mt-2">
                        <video width="320" controls>
                            <source src="{{ Storage::url($item->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <p class="text-xs text-gray-500 mt-1">Video saat ini. Unggah video baru untuk menggantinya.</p>
                    </div>
                @endif
                @error('video')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="berdiri_sejak" class="block text-sm font-medium text-gray-700 mb-1">Berdiri Sejak</label>
                <input type="date" name="berdiri_sejak" id="berdiri_sejak" value="{{ old('berdiri_sejak', isset($item) && $item->berdiri_sejak ? $item->berdiri_sejak->format('Y-m-d') : '') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">
                @error('berdiri_sejak')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="id_user" class="block text-sm font-medium text-gray-700 mb-1">Pengguna</label>
                <select name="id_user" id="id_user" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                    <option value="">Pilih Pengguna</option>
                    @foreach(\App\Models\User::all()->pluck('nama', 'id_user') as $value => $label)
                        <option value="{{ $value }}" {{ old('id_user', $item?->id_user ?? '') == $value ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
                @error('id_user')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex justify-end">
                <a href="{{ route('dashboard.companies.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 mr-2">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-md text-sm hover:bg-primary-700">
                    {{ isset($item) ? 'Simpan Perubahan' : 'Simpan' }}
                </button>
            </div>
        </form>
    </div>
@endsection
