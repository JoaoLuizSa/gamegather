<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $fillable=['name','email','idade','sexo','descricao'];

    public $rules=[
    	'name'      => 'required|min:3|max:100',
    	'email'     => 'required|max:100',
    	'idade'     => 'required',
    	'sexo'	    => 'required',
    	'descricao' => 'max:1000'	
    ];
   	public $messages=[
   		'name.required'    => 'O campo nome é  de preenchimento obrigatorio',
		'name.required'    => 'O campo nome é  de preenchimento obrigatorio',
		'email.max'    => 'O campo email possui no maximo 100 caracteres',
		'idade.required'    => 'O campo Idade é  de preenchimento obrigatorio',
		'sexo.required'    => 'O campo Sexo é  de preenchimento obrigatorio',
		'descricao.max'    => 'O campo Descrição possui no maximo 1000 caracteres'
    ];
}
