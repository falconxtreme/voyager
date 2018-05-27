<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterAccesoInternetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
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
            'codigoUbigeoInput' => ['required','max:6']
        ];
    }

    public function messages(){
        return [
            'codigoUbigeoInput.required' => 'Por favor, es necesario que ingreses el código de ubigeo.',
            'codigoUbigeoInput.max' => 'El código de ubigeo no puede supear los 6 caracteres.'
        ];
    }
}
