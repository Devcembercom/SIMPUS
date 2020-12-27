<?php

namespace App\Http\Requests\KesgaGizi\PMT;

use Illuminate\Foundation\Http\FormRequest;

class FormPmt extends FormRequest
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
            'nama_bumil' => 'required|string|min:3|max:35',
            'usia' => 'required|integer|min:1',
            'hamil' => 'required|integer|min:3|max:35',
            'tgl1' => 'required|date',
            'bb1' => 'required|integer|min:3|max:35',
            'lila1' => 'required|integer|max:35',
            'hb1' => 'required|integer|min:3|max:35',
            'jumlah1' => 'required|integer|max:35',
            'tt1' => 'required|integer|min:3|max:35',

            'tgl2' => 'required|date',
            'bb2' => 'required|integer|min:3|max:35',
            'lila2' => 'required|integer|max:35',
            'hb2' => 'required|integer|min:3|max:35',
            'jumlah2' => 'required|integer|max:35',
            'tt2' => 'required|integer|min:3|max:35',

            'tgl3' => 'required|date',
            'bb3' => 'required|integer|min:3|max:35',
            'lila3' => 'required|integer|max:35',
            'hb3' => 'required|integer|min:3|max:35',
            'jumlah3' => 'required|integer|max:35',
            'tt3' => 'required|integer|min:3|max:35',
            
            
        ];
    }
}
