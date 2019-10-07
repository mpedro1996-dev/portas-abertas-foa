<?php

namespace PortasAbertas\Model;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    protected $table = 'visitantes';
    protected $fillable = ['nome','email','data_nascimento','telefone','celular','escola_id','curso_id'];

    public function escola(){
        return $this->belongsTo(Escola::class,'escola_id','id');
    }

    public function curso(){
        return $this->belongsTo(Curso::class,'curso_id','id');
    }
}
