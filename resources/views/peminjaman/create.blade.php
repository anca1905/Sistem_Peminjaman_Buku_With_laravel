@extends('layout.app')

@section('title', 'Form Peminjaman')

@section('content')
<div class="bg-white p-6 rounded shadow max-w-xl mx-auto">
    <form action="{{ route('peminjaman.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label class="block font-semibold mb-1">👤 Nama Anggota:</label>
            <select name="user_id" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-blue-200">
                <option value="">-- Pilih Anggota --</option>
                @foreach ($anggotas as $anggota)
                    <option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
                @endforeach
            </select>
            @error('user_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-semibold mb-1">📖 Judul Buku:</label>
            <select name="buku_id" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-blue-200">
                <option value="">-- Pilih Buku --</option>
                @foreach ($bukus as $buku)
                    <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                @endforeach
            </select>
            @error('buku_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-semibold mb-1">📅 Tanggal Pinjam:</label>
            <input type="date" name="tgl_pinjam" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-blue-200">
            @error('tgl_pinjam')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label class="block font-semibold mb-1">📆 Tanggal Kembali:</label>
            <input type="date" name="tgl_kembali" class="w-full border-gray-300 rounded p-2 focus:ring focus:ring-blue-200">
            @error('tgl_kembali')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="text-right">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded shadow">
                💾 Simpan
            </button>
        </div>
    </form>
</div>
@endsection
