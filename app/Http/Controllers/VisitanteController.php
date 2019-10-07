<?php

namespace PortasAbertas\Http\Controllers;

use Illuminate\Http\Request;
use PortasAbertas\Http\Requests\VisitanteRequest;
use PortasAbertas\Model\Curso;
use PortasAbertas\Model\Escola;
use PortasAbertas\Model\Visitante;

class VisitanteController extends Controller
{
    private $escola;

    private $curso;

    private $visitante;

    public function __construct(Curso $curso, Escola $escola, Visitante $visitante)
    {
        $this->escola = $escola;
        $this->curso = $curso;
        $this->visitante = $visitante;

    }

    public function novo($id){

        $escola = $this->escola->find($id);

        $cursos = $this->curso->all();

        return view('visitantes.criar',['escola'=>$escola,'cursos'=>$cursos]);
    }
    public function cadastrar(VisitanteRequest $request){

        $visitante = new $this->visitante($request->all());

        $visitante->save();

        return redirect()->action('VisitanteController@listar')->with(['msgSuccess'=>'Visitante cadastrado com sucesso.']);

    }

    public function listar(Request $request){
        $nome = $request->get('nome',null);

        $visitantes = $this->visitante->orderBy('created_at','DESC');

        if($nome){
            $visitantes->where('nome','like','%'.$nome.'%');
        }

        return view('visitantes.listar')->with(['visitantes'=>$visitantes->get()]);
    }

    public function excluir($id){
        $visitante = $this->visitante->find($id);

        $visitante->delete();

        return redirect()->action('VisitanteController@listar')->with(['msgSuccess'=>'Visitante excluído com sucesso.']);

    }
}
