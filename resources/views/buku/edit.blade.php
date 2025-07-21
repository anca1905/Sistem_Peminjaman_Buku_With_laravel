@extends('layout.app')

@section('title', 'Edit Buku')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <form action="{{ route('buku.update', $buku->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium mb-1 text-gray-700">Judul</label>
            <input type="text" name="judul" value="{{ old('judul', $buku->judul) }}"
                   class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div>
            <label class="block font-medium mb-1 text-gray-700">Penulis</label>
            <input type="text" name="penulis" value="{{ old('penulis', $buku->penulis) }}"
                   class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div>
            <label class="block font-medium mb-1 text-gray-700">Tahun</label>
            <input type="number" name="tahun" value="{{ old('tahun', $buku->tahun) }}"
                   class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div>
            <label class="block font-medium mb-1 text-gray-700">Kategori</label>
            <input type="text" name="kategori" value="{{ old('kategori', $buku->kategori) }}"
                   class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="pt-4">
            <button type="submit"
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded transition">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
