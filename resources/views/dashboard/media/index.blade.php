@extends('layouts.dashboard')

@section('title', 'Daftar Media')

@section('content')
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="flex justify-between items-center p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-800">Daftar Media</h3>
            <a href="{{ route('dashboard.media.create') }}" class="px-4 py-2 bg-primary-600 text-white rounded-lg text-sm hover:bg-primary-700">
                Upload Media Baru
            </a>
        </div>
        
        <!-- Search and filter -->
        <div class="p-4 border-b">
            <form action="{{ route('dashboard.media.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">
                <div class="flex-grow">
                    <input type="text" name="search" value="{{ $searchTerm ?? '' }}" placeholder="Cari media..." class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">
                </div>
                <button type="submit" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm hover:bg-gray-200">
                    Cari
                </button>
                @if(!empty($searchTerm))
                <a href="{{ route('dashboard.media.index') }}" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md text-sm hover:bg-gray-200">
                    Reset
                </a>
                @endif
            </form>
        </div>
        
        <!-- Media Grid -->
        <div class="p-6">
            @if($items->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach($items as $media)
                        <div class="border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all">
                            <div class="aspect-w-16 aspect-h-9 bg-gray-100 border-b flex items-center justify-center h-40">
                                @if(Str::startsWith($media->mime_type, 'image/'))
                                    <img src="{{ Storage::url($media->file_path) }}" alt="{{ $media->title }}" class="object-cover h-full w-full">
                                @elseif(Str::startsWith($media->mime_type, 'video/'))
                                    <video class="h-full w-full">
                                        <source src="{{ Storage::url($media->file_path) }}" type="{{ $media->mime_type }}">
                                    </video>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="w-12 h-12 rounded-full bg-black bg-opacity-50 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                @elseif(Str::startsWith($media->mime_type, 'audio/'))
                                    <div class="flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                        </svg>
                                    </div>
                                @elseif(Str::contains($media->mime_type, 'pdf'))
                                    <div class="flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @elseif(Str::contains($media->mime_type, ['excel', 'spreadsheet']))
                                    <div class="flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                @elseif(Str::contains($media->mime_type, 'word'))
                                    <div class="flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                @else
                                    <div class="flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            <div class="p-4">
                                <h4 class="font-medium text-gray-900 truncate">{{ $media->title }}</h4>
                                <p class="text-sm text-gray-500 mt-1 truncate">{{ $media->description }}</p>
                                <div class="flex items-center justify-between mt-2">
                                    <span class="text-xs text-gray-500">{{ $media->created_at->format('d M Y') }}</span>
                                    <div class="flex space-x-2">
                                        <a href="{{ route('dashboard.media.edit', $media->id) }}" class="text-primary-600 hover:text-primary-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <a href="{{ Storage::url($media->file_path) }}" target="_blank" class="text-blue-600 hover:text-blue-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('dashboard.media.delete', $media->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus media ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="mt-6">
                    {{ $items->links() }}
                </div>
            @else
                <div class="text-center py-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-300 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Tidak ada media</h3>
                    <p class="mt-1 text-gray-500">Upload media pertama Anda sekarang.</p>
                    <div class="mt-6">
                        <a href="{{ route('dashboard.media.create') }}" class="px-4 py-2 bg-primary-600 text-white rounded-lg text-sm hover:bg-primary-700">
                            Upload Media
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
