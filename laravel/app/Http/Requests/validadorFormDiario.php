<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormDiario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    //Metodo de autorizacion (se cambia a true)
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
            //Reglas de validacion para form Diario
            'txtTitulo' => 'required|max:25', //reglas de validacion:requerido, maximo o minimo de caracteres
            'txtRecuerdo' => 'required|min:5',
        ];
    }
}
