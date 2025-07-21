@extends('layout.app')

@section('title', 'Riwayat Peminjaman')

@section('content')
<div class="bg-white shadow-md rounded p-6">
    <h2 class="text-2xl font-semibold mb-6 text-gray-700">📚 Riwayat Peminjaman</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded">
            <thead>
                <tr class="bg-blue-100 text-gray-800 text-left">
                    <th class="px-4 py-2 border">#</th>
                    <th class="px-4 py-2 border">👤 Nama Anggota</th>
                    <th class="px-4 py-2 border">📖 Judul Buku</th>
                    <th class="px-4 py-2 border">📅 Tgl Pinjam</th>
                    <th class="px-4 py-2 border">📆 Tgl Kembali</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($peminjamans as $peminjaman)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 border">{{ $peminjaman->anggota->nama }}</td>
                        <td class="px-4 py-2 border">{{ $peminjaman->buku->judul }}</td>
                        <td class="px-4 py-2 border">{{ $peminjaman->tgl_pinjam }}</td>
                        <td class="px-4 py-2 border">{{ $peminjaman->tgl_kembali }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-4 text-center text-gray-500">
                            Tidak ada data peminjaman.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
