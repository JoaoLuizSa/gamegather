<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class FormularioRequest extends FormRequest
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
        'name'      => 'required|min:3|max:100',
        'email'     => 'required|max:100',
        'idade'     => 'required',
        'sexo'      => 'required',
        'descricao' => 'max:1000'   
    ];
    }

    public function messages(){

        return[
        'name.required'    => 'O campo nome é  de preenchimento obrigatorio',
        'name.required'    => 'O campo nome é  de preenchimento obrigatorio',
        'email.max'    => 'O campo email possui no maximo 100 caracteres',
        'idade.required'    => 'O campo Idade é  de preenchimento obrigatorio',
        'sexo.required'    => 'O campo Sexo é  de preenchimento obrigatorio',
        'descricao.max'    => 'O campo Descrição possui no maximo 1000 caracteres'
    ];
    }
}
