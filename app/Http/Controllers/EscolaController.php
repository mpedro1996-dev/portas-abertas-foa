<?php

namespace PortasAbertas\Http\Controllers;

use Illuminate\Http\Request;
use PortasAbertas\Http\Requests\EscolaRequest;
use PortasAbertas\Model\Escola;
use PortasAbertas\Model\Estado;

class EscolaController extends Controller
{
    private $escola;

    private $estado;

    public function __construct(Escola $escola, Estado $estado){
        $this->escola = $escola;
        $this->estado = $estado;
    }

    public function novo(){
        $estados = $this->estado->all();
        return view('escolas.criar',['ufs'=>$estados]);
    }

    public function cadastrar(EscolaRequest $request){
        $escola =  new Escola();

        $encoding = mb_internal_encoding(); // ou UTF-8, ISO-8859-1...


        $escola->nome =  mb_strtoupper($request->get('nome'),$encoding);
        $escola->cidade =  mb_strtoupper($request->get('cidade'),$encoding);
        $escola->uf =  mb_strtoupper($request->get('uf'),$encoding);

        $escola->save();

        return redirect()->action('EscolaController@listar')->with(['msgSuccess'=>'Escola cadastrada com sucesso.']);
    }

    public function listar(Request $request){
        $nome = $request->get('nome',null);

        $escolas = $this->escola->orderBy('created_at','DESC');

        $encoding = mb_internal_encoding(); // ou UTF-8, ISO-8859-1...


        if($nome){
            $escolas->where('nome','like','%'. mb_strtoupper($nome, $encoding).'%');
        }

        return view('escolas.listar')->with(['escolas'=>$escolas->get()]);
    }

    public function excluir($id){
        $visitante = $this->escola->find($id);

        $visitante->delete();

        return redirect()->action('EscolaController@listar')->with(['msgSuccess'=>'Visitante excluído com sucesso.']);

    }


}
