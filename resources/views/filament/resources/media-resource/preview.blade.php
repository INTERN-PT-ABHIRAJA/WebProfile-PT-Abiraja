@php
// Determine if the file is an image, video, or another type
$isImage = Str::startsWith($record->mime_type, 'image/');
$isVideo = Str::startsWith($record->mime_type, 'video/');
$isPDF = $record->mime_type === 'application/pdf';
$fileUrl = Storage::disk('public_assets')->url($record->file_path);
@endphp

<div class="space-y-4">
    <div class="p-2 bg-gray-50 dark:bg-gray-800 rounded-lg flex justify-center">
        @if ($isImage)
            <img 
                src="{{ $fileUrl }}" 
                alt="{{ $record->title }}" 
                class="max-h-[400px] w-auto rounded shadow-sm"
            >
        @elseif ($isVideo)
            <video 
                controls 
                class="max-h-[400px] w-auto rounded shadow-sm" 
                poster="{{ asset('assets/img/video-poster.png') }}"
            >
                <source src="{{ $fileUrl }}" type="{{ $record->mime_type }}">
                Your browser does not support the video tag.
            </video>
        @elseif ($isPDF)
            <div class="p-4 flex flex-col items-center">
                <svg class="w-16 h-16 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
                <a href="{{ $fileUrl }}" target="_blank" class="mt-3 text-primary-600 dark:text-primary-400 hover:underline">
                    Open PDF Document
                </a>
            </div>
        @else
            <div class="p-4 flex flex-col items-center">
                <svg class="w-16 h-16 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <a href="{{ $fileUrl }}" target="_blank" class="mt-3 text-primary-600 dark:text-primary-400 hover:underline">
                    Download File
                </a>
            </div>
        @endif
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="space-y-2">
            <div class="font-medium text-sm text-gray-500 dark:text-gray-400">Title</div>
            <div>{{ $record->title }}</div>
        </div>

        <div class="space-y-2">
            <div class="font-medium text-sm text-gray-500 dark:text-gray-400">File Type</div>
            <div>{{ $record->mime_type }}</div>
        </div>

        <div class="space-y-2">
            <div class="font-medium text-sm text-gray-500 dark:text-gray-400">File Size</div>
            <div>{{ format_bytes($record->file_size) }}</div>
        </div>

        <div class="space-y-2">
            <div class="font-medium text-sm text-gray-500 dark:text-gray-400">Uploaded</div>
            <div>{{ $record->created_at->format('M j, Y g:i A') }}</div>
        </div>
    </div>

    @if($record->description)
        <div class="mt-4 space-y-2">
            <div class="font-medium text-sm text-gray-500 dark:text-gray-400">Description</div>
            <p class="text-gray-600 dark:text-gray-300">{{ $record->description }}</p>
        </div>
    @endif

    <div class="mt-4 pt-4 border-t dark:border-gray-700">
        <p class="text-sm text-gray-500 dark:text-gray-400">
            File URL: 
            <code class="px-2 py-1 bg-gray-100 dark:bg-gray-800 rounded font-mono text-xs break-all">
                {{ $fileUrl }}
            </code>
        </p>
    </div>
</div>
