@extends('layout.app')

@section('title', 'Edit Buku')

@section('content')
<form action="{{ route('buku.update', $buku->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')
    <div>
        <label>Judul:</label>
        <input type="text" name="judul" value="{{ $buku->judul }}" class="w-full border p-2" required>
    </div>
    <div>
        <label>Penulis:</label>
        <input type="text" name="penulis" value="{{ $buku->penulis }}" class="w-full border p-2" required>
    </div>
    <div>
        <label>Tahun:</label>
        <input type="number" name="tahun" value="{{ $buku->tahun }}" class="w-full border p-2" required>
    </div>
    <div>
        <label>Kategori:</label>
        <input type="text" name="kategori" value="{{ $buku->kategori }}" class="w-full border p-2" required>
    </div>
    <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
