<?php namespace PortasAbertas\Model;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model {

    protected $table    = 'estados';
	protected $fillable =['nome','uf','pais_id'];

}
