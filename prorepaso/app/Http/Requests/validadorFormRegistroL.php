<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormRegistroL extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Reglas de validacion para el formulario de registro del libro
            'ISBN' => 'required|numeric|min:13', //Solo numeros y minimo de 13 digitos
            'pages' => 'required|numeric', //Solo numeros
            'txtEmail' => 'required|email' //Formato de correo
        ];
    }
}
