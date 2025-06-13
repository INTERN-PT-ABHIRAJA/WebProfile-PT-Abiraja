@extends('layouts.dashboard')

@section('title', 'Upload Media')

@section('content')
    @include('dashboard.media.form', [
        'formAction' => route('dashboard.media.store'),
        'formMethod' => 'POST',
        'item' => null
    ])
            
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="description" id="description" rows="5" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="file_path" class="block text-sm font-medium text-gray-700 mb-1">File</label>
                <input type="file" name="file_path" id="file_path" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                <p class="mt-1 text-sm text-gray-500">Ukuran maksimum: 10MB. Format yang didukung: jpeg, png, jpg, gif, pdf, doc, docx, xls, xlsx, ppt, pptx, mp4, mp3</p>
                @error('file_path')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
              
            <div class="flex justify-end">
                <a href="{{ route('dashboard.media.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 mr-2">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-md text-sm hover:bg-primary-700">
                    Upload
                </button>
            </div>
        </form>
    </div>
@endsection
