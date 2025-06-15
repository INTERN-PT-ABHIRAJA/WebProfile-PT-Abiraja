@extends('layouts.dashboard')

@section('title', isset($item) ? 'Edit User' : 'Tambah User')

@section('content')
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-800">{{ isset($item) ? 'Edit User' : 'Tambah User Baru' }}</h3>
        </div>
        
        <form action="{{ $formAction }}" method="POST" class="p-6">
            @csrf
            @if($formMethod === 'PUT')
                @method('PUT')
            @endif
            
            <div class="mb-6">
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $item?->nama ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                @error('nama')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $item?->email ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">{{ old('alamat', $item?->alamat ?? '') }}</textarea>
                @error('alamat')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">Telepon</label>
                <input type="text" name="telepon" id="telepon" value="{{ old('telepon', $item?->telepon ?? '') }}" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">
                @error('telepon')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password {{ isset($item) ? '(Kosongkan jika tidak ingin mengubah)' : '' }}</label>
                <input type="password" name="password" id="password" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" {{ !isset($item) ? 'required' : '' }}>
                @error('password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" {{ !isset($item) ? 'required' : '' }}>
            </div>
            
            <div class="mb-6">
                <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                <select name="role" id="role" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                    <option value="">-- Pilih Role --</option>
                    <option value="user" {{ old('role', $item?->role ?? '') == 'user' ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ old('role', $item?->role ?? '') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="owner" {{ old('role', $item?->role ?? '') == 'owner' ? 'selected' : '' }}>Owner</option>
                </select>
                @error('role')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex justify-end">
                <a href="{{ route('dashboard.users.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 mr-2">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-md text-sm hover:bg-primary-700">
                    {{ isset($item) ? 'Update' : 'Simpan' }}
                </button>
            </div>
        </form>
    </div>
@endsection
