<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'buku_id',
        'tgl_pinjam',
        'tgl_kembali',
    ];

    public function buku(){
        return $this->belongsTo(Buku::class);
    }

    public function anggota(){
        return $this->belongsTo(Anggota::class, 'user_id');
    }

}
