<?php

namespace App\Models\Cadastro;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable=['name','email','password','image','categoria','sexo','descricao'];
}
