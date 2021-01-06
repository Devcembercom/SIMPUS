<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormBayi extends FormRequest
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
            'nama_jorong' => 'required|string|min:3|max:35',
            'nama_posyandu' => 'required|string|min:3|max:35',

            'jumlah_umur' => 'required|integer',
            
            'jumlah_bayi1' => 'required|integer',
            'eklusif1' => 'required|integer',
            'persen1' => 'required|integer',

            'jumlah_bayi2' => 'required|integer',
            'eklusif2' => 'required|integer',
            'persen2' => 'required|integer',

            'jumlah_bayi3' => 'required|integer',
            'eklusif3' => 'required|integer',
            'persen3' => 'required|integer',

            'jumlah_bayi4' => 'required|integer',
            'eklusif4' => 'required|integer',
            'persen4' => 'required|integer',

            'jumlah_bayi5' => 'required|integer',
            'eklusif5' => 'required|integer',
            'persen5' => 'required|integer',

            'jumlah_bayi6' => 'required|integer',
            'eklusif6' => 'required|integer',
            'persen6' => 'required|integer',

            'jumlah_bayi7' => 'required|integer',
            'eklusif7' => 'required|integer',
            'persen7' => 'required|integer',
        
        ];
    }
}
