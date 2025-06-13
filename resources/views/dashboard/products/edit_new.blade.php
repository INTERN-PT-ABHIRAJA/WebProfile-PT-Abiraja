@extends('layouts.dashboard')

@section('title', 'Edit Produk')

@section('content')
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-800">Edit Produk</h3>
        </div>
        
        <form action="{{ route('dashboard.products.update', $product->id_produk) }}" method="POST" class="p-6" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            @include('dashboard.products.form', ['item' => $product])
            
            <div class="flex justify-end">
                <a href="{{ route('dashboard.products.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 mr-2">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-md text-sm hover:bg-primary-700">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection
