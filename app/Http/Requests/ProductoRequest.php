<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'codigo' => 'required|min:5|max:10',
            'nombre' => 'required|min:5|max:30',
            //'categoria' => 'required|numeric|min:0|max:1',
            'descripcion' => 'required|min:5|max:100',
            'precio' => 'required|integer' 
        ];
    }
}
