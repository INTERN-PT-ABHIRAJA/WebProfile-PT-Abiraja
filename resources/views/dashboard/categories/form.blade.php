@extends('layouts.dashboard')

@section('title', isset($item) ? 'Edit Kategori' : 'Tambah Kategori')

@section('content')
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-800">{{ isset($item) ? 'Edit Kategori' : 'Tambah Kategori Baru' }}</h3>
        </div>
        
        <form action="{{ $formAction }}" method="POST" class="p-6">
            @csrf
            @if($formMethod === 'PUT')
                @method('PUT')
            @endif
            
            <div class="mb-6">
                <label for="nama_kategori" class="block text-sm font-medium text-gray-700 mb-1">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" value="{{ old('nama_kategori', $item?->nama_kategori ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                @error('nama_kategori')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="deskripsi_kategori" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="deskripsi_kategori" id="deskripsi_kategori" rows="5" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>{{ old('deskripsi_kategori', $item?->deskripsi_kategori ?? '') }}</textarea>
                @error('deskripsi_kategori')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
              <div class="flex justify-end">
                <a href="{{ route('dashboard.categories.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 mr-2">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-md text-sm hover:bg-primary-700">
                    {{ isset($item) ? 'Simpan Perubahan' : 'Simpan' }}
                </button>
            </div>
        </form>
    </div>
@endsection
