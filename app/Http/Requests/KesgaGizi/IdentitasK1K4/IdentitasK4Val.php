<?php

namespace App\Http\Requests\KesgaGizi\IdentitasK1K4;

use Illuminate\Foundation\Http\FormRequest;

class IdentitasK4Val extends FormRequest
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
            'nama_suami' => 'required|string|max:100',
            'alamat' => 'required',
            'tgl_k4' => 'required|date',
            'masalah' => 'required'
        ];
    }
}
