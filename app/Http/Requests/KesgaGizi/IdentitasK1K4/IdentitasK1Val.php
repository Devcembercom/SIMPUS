<?php

namespace App\Http\Requests\KesgaGizi\IdentitasK1K4;

use Illuminate\Foundation\Http\FormRequest;

class IdentitasK1Val extends FormRequest
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
            'bulan' => 'required',
            'nama_ibu' => 'required|string|max:100',
            'umur' => 'required|integer',
            'alamat' => 'required',
            'nama_suami' => 'required|string|max:100',
            'hamil_ke' => 'required|integer|max:10',
            'hpht' => 'required|date',
            'usia_hamil' => 'required|integer',
            'jenis_resiko' => 'required|string|max:100',
            'dpt_buku' => 'required|string|max:100'
        ];
    }
}
