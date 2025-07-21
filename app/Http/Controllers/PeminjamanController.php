<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBukuRequest;
use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(){
        $peminjamans = Peminjaman::with(['buku', 'anggota'])->latest()->get();

        return view('peminjaman.index', compact('peminjamans'));
    }

    public function create(){

        $anggotas = Anggota::all();
        $bukus = Buku::all();

        return view('peminjaman.create', compact('anggotas', 'bukus'));
    }

    public function store(StoreBukuRequest $request)
    {

        $data = $request->validated();

        $data['user_id'] = $request->user_id;
        $data['buku_id'] = $request->buku_id;
        $data['tgl_pinjam'] = $request->tgl_pinjam;
        $data['tgl_kembali'] = $request->tgl_kembali;

        Peminjaman::create($data);

        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {

    }
}
