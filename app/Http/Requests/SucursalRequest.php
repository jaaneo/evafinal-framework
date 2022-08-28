<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SucursalRequest extends FormRequest
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
            'codigosucursal' => 'required|min:5|max:10',
            'nombresucursal' => 'required|min:5|max:30',
            'ciudadsucursal' => 'required|min:5|max:30',
            'encargadosucursal' => 'required|min:5|max:100',
            'telsucursal' => 'required|integer' 
        ];
    }
}
