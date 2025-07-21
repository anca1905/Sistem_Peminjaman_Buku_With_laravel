@extends('layout.app')

@section('title', 'Tambah Buku')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <form action="{{ route('buku.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="block font-medium mb-1 text-gray-700">Judul</label>
            <input type="text" name="judul" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ old('judul') }}">
            @error('judul')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-medium mb-1 text-gray-700">Penulis</label>
            <input type="text" name="penulis" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ old('penulis') }}">
            @error('penulis')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-medium mb-1 text-gray-700">Tahun</label>
            <input type="number" name="tahun" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ old('tahun') }}">
            @error('tahun')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-medium mb-1 text-gray-700">Kategori</label>
            <input type="text" name="kategori" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" value="{{ old('kategori') }}">
            @error('kategori')
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="pt-4">
            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded transition">
                Simpan Buku
            </button>
        </div>
    </form>
</div>
@endsection
