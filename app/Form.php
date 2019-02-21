<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Form as Authenticatable;

class Form extends Authenticatable
{
    use Notifiable;

    protected $fillable=['name','email','idade','sexo','descricao'];
}
