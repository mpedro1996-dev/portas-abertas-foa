<?php

namespace PortasAbertas\Model;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='cursos';
    protected $fillable = ['nome'];
}
