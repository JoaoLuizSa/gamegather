<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Produto as Authenticatable;

class Produto extends Authenticatable
{
    use Notifiable;

    protected $fillable=['name','number','active','categoria','descricao'];

}
