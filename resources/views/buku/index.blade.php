@extends('layout.app')

@section('title', 'Daftar Buku')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-semibold text-gray-800">📚 Daftar Buku</h2>
    <a href="{{ route('buku.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded shadow">
        + Tambah Buku
    </a>
</div>

<div class="overflow-x-auto bg-white rounded-lg shadow">
    <table class="min-w-full text-sm text-left text-gray-600">
        <thead class="bg-gray-100 text-xs uppercase text-gray-700 border-b">
            <tr>
                <th class="px-6 py-3">Judul</th>
                <th class="px-6 py-3">Penulis</th>
                <th class="px-6 py-3">Tahun</th>
                <th class="px-6 py-3">Kategori</th>
                <th class="px-6 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($buku as $b)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $b->judul }}</td>
                    <td class="px-6 py-4">{{ $b->penulis }}</td>
                    <td class="px-6 py-4">{{ $b->tahun }}</td>
                    <td class="px-6 py-4">{{ $b->kategori }}</td>
                    <td class="px-6 py-4 flex gap-2">
                        <a href="{{ route('buku.edit', $b->id) }}"
                           class="text-sm bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded shadow">
                            ✏️ Edit
                        </a>
                        <form action="{{ route('buku.destroy', $b->id) }}" method="POST" onsubmit="return confirm('Hapus buku ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-sm bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded shadow">
                                🗑️ Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500 italic">Tidak ada buku tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
