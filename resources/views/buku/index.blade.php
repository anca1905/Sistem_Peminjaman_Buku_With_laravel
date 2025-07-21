@extends('layout.app')

@section('title', 'Daftar Buku')

@section('content')
<a href="{{ route('buku.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Buku</a>

<table class="w-full table-auto border">
    <thead>
        <tr class="bg-gray-200">
            <th class="p-2">Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($buku as $b)
            <tr class="border-t">
                <td class="p-2">{{ $b->judul }}</td>
                <td>{{ $b->penulis }}</td>
                <td>{{ $b->tahun }}</td>
                <td>{{ $b->kategori }}</td>
                <td class="flex gap-2">
                    <a href="{{ route('buku.edit', $b->id) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('buku.destroy', $b->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus buku ini?')" class="text-red-500">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
