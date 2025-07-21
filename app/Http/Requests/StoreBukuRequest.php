<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBukuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'judul' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
            'kategori' => 'required',
            'user_id' => 'required',
            'buku_id' => 'required',
            'tgl_pinjam' => 'required|date',
            'tgl_kembali' => 'required|date',
        ];
    }
}
