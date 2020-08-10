<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = ['cnpj','razaosocial','nome','email','logomarca','status'];

}
