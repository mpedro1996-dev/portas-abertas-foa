<?php

namespace PortasAbertas\Model;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    protected $table="escolas";
    protected $fillable = ['nome','cidade','uf'];

    public function visitantes(){
        return $this->hasMany(Visitante::class,'escola_id','id');
    }
}
