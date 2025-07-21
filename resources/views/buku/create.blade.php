@extends('layout.app')

@section('title', 'Tambah Buku')

@section('content')
<form action="{{ route('buku.store') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label>Judul:</label>
        <input type="text" name="judul" class="w-full border p-2" required>
    </div>
    <div>
        <label>Penulis:</label>
        <input type="text" name="penulis" class="w-full border p-2" required>
    </div>
    <div>
        <label>Tahun:</label>
        <input type="number" name="tahun" class="w-full border p-2" required>
    </div>
    <div>
        <label>Kategori:</label>
        <input type="text" name="kategori" class="w-full border p-2" required>
    </div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
