@extends('layouts.dashboard')

@section('title', 'Daftar Anak Perusahaan')

@section('content')
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="flex justify-between items-center p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-800">Daftar Anak Perusahaan</h3>
            <a href="{{ route('dashboard.companies.create') }}" class="px-4 py-2 bg-primary-600 text-white rounded-lg text-sm hover:bg-primary-700">
                Tambah Anak Perusahaan
            </a>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Perusahaan</th>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Telepon</th>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Berdiri Sejak</th>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($items as $company)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                @if($company->foto)
                                    <img class="h-10 w-10 rounded-full mr-3" src="{{ Storage::url($company->foto) }}" alt="{{ $company->nama_perusahaan }}">
                                @else
                                    <div class="h-10 w-10 rounded-full bg-gray-300 flex items-center justify-center mr-3">
                                        <span class="text-sm font-medium text-gray-700">{{ substr($company->nama_perusahaan, 0, 2) }}</span>
                                    </div>
                                @endif
                                <div>
                                    <div class="text-sm font-medium text-gray-900">{{ $company->nama_perusahaan }}</div>
                                    <div class="text-sm text-gray-500">{{ $company->user->nama ?? 'N/A' }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $company->kategori->nama_kategori ?? 'N/A' }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            {{ Str::limit($company->alamat, 50) }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $company->telepon }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $company->berdiri_sejak ? $company->berdiri_sejak->format('d/m/Y') : 'N/A' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('dashboard.companies.edit', $company->id_anak_perusahaan) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                            <form action="{{ route('dashboard.companies.destroy', $company->id_anak_perusahaan) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin ingin menghapus perusahaan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">
                            Belum ada anak perusahaan yang terdaftar.
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
