<?php

namespace App\Http\Requests\KesgaGizi\IdentitasPersalinan;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_ibu' => 'required|string|min:3|max:35',
            'umur' => 'required|integer|min:1',
            'nama_suami' => 'required|string|min:3|max:35',
            'alamat' => 'required',
            'tgl_partus' => 'required|date',
            'kondisi_ibu' => 'required|string|min:3|max:35',
            'jml_darah' => 'required|string|max:35',
            'partograf' => 'required|boolean',
            'kondisi_bayi' => 'required|max:10',
            'jk_bayi' => 'required|boolean',
            'bbl' => 'required|string|max:10',
            'imd' => 'required|boolean',
            'tgl_unijek' => 'required|date',
            'tgl_vit_k' => 'required|date',
            'jns_persalinan' => 'required|string|max:30',
            'petugas' => 'required|string|max:30',
            'status_bayar' => 'required|string|max:20',
            'author' => 'required|integer',
        ];
    }
}
