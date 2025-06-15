@extends('layouts.dashboard')

@section('title', 'Daftar Kategori')

@section('content')
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="flex justify-between items-center p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-800">Daftar Kategori</h3>
            <a href="{{ route('dashboard.categories.create') }}" class="px-4 py-2 bg-primary-600 text-white rounded-lg text-sm hover:bg-primary-700">
                Tambah Kategori
            </a>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Kategori</th>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah Anak Perusahaan</th>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">                    
                    @forelse($items as $category)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $category->nama_kategori }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            {{ Str::limit($category->deskripsi_kategori, 100) }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $category->anakPerusahaan->count() }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('dashboard.categories.edit', $category->id_kategori) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                            <form action="{{ route('dashboard.categories.destroy', $category->id_kategori) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin ingin menghapus kategori ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">
                            Belum ada kategori yang terdaftar.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="p-6 border-t">
            {{ $items->links() }}
        </div>
    </div>
@endsection
