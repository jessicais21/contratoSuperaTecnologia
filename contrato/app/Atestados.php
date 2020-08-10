<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atestados extends Model
{
    protected $fillable = ['paciente','acompanhante','obito'];
}
