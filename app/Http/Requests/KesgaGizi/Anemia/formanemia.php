<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formanemia extends FormRequest
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
            'alamat' => 'required|string|min:3|max:35',
            'lahir' => 'required|date',
            'ditemukan' => 'required|date',
            'bb' => 'required|integer|min:1',
            'tb' => 'required|integer|min:1',
            'lila' => 'required|integer|min:1',
            'hb' => 'required|integer|min:1',
            'protein' => 'required|string|min:3|max:35',
            'siha' => 'required|string|min:3|max:35',
            'hamil' => 'required|integer|min:1',
            'intervansi' => 'required|string|min:3|max:35',
            'nama_suami' => 'required|string|min:3|max:35',
            'pekerjaan' => 'required|string|min:3|max:35',
            'status' => 'required|string|min:3|max:35',
            'bpjs' => 'required|string|min:3|max:35',
            'kasus' => 'required|string|min:3|max:35',
            'ket' => 'required|string|min:3|max:35'
            
        ];
    }
}
