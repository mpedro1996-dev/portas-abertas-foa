<?php

namespace PortasAbertas\Http\Controllers;


use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use PortasAbertas\Model\Escola;
use PortasAbertas\Model\Visitante;

class PDFController extends Controller
{
    private $visitante;

    private $escola;

    public function __construct(Visitante $visitante, Escola $escola)
    {

        $this->visitante = $visitante;

        $this->escola = $escola;

    }

    public function relatorioVisitantes(){
        $visitantes = $this->visitante->orderBy('nome','ASC')->get();
        $pdf = PDF::loadView('pdfs.relatorio-visitantes',['visitantes'=>$visitantes]);
        return $pdf->stream('visitantes.pdf');
    }

    public function relatorioEscolas(){
        $escolas = $this->escola->orderBy('nome','ASC')->get();
        $pdf = PDF::loadView('pdfs.relatorio-escolas',['escolas'=>$escolas]);
        return $pdf->stream('escolas.pdf');
    }
}
