@extends('layouts.dashboard')

@section('title', 'Edit Media')

@section('content')
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-800">Edit Media</h3>
        </div>
        
        <form action="{{ route('dashboard.media.update', $item->id) }}" method="POST" class="p-6" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                <input type="text" name="title" id="title" value="{{ old('title', $item->title) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="description" id="description" rows="5" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">{{ old('description', $item->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">File Saat Ini</label>
                <div class="mt-2">
                    @if(Str::startsWith($item->mime_type, 'image/'))
                        <img src="{{ Storage::url($item->file_path) }}" alt="{{ $item->title }}" class="max-h-40 rounded">
                    @elseif(Str::startsWith($item->mime_type, 'video/'))
                        <video controls class="max-h-40 rounded">
                            <source src="{{ Storage::url($item->file_path) }}" type="{{ $item->mime_type }}">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    @else
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <a href="{{ Storage::url($item->file_path) }}" target="_blank" class="text-blue-500 hover:underline">{{ $item->title }}</a>
                        </div>
                    @endif
                </div>
                
                <div class="mt-4">
                    <label for="file_path" class="block text-sm font-medium text-gray-700">Ganti File (opsional)</label>
                    <input type="file" name="file_path" id="file_path" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">
                    <p class="mt-1 text-sm text-gray-500">Biarkan kosong jika tidak ingin mengganti file yang ada.</p>
                </div>
                @error('file_path')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
              
            <div class="flex justify-end">
                <a href="{{ route('dashboard.media.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 mr-2">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-md text-sm hover:bg-primary-700">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection
