@extends('pdfs.includes')

@section('content')
    <div class="conteudo">
        <div class="row">
            <div class="col" style="width: 20%;">
                <img src="{{public_path('img/mascote-home-mobile.png')}}" style="max-width: 100px;">
            </div>
            <div class="col" style="width: 80%;">
                <h4 class="centro">Relatório de Escolas</h4>
            </div>
        </div>
        <div class="clearfix"></div>
        <table class="mg-topo mg-esquerda">
            <thead>
            <tr>
                <th width="20%">Nome</th>
                <th width="20%">Cidade</th>
                <th width="20%">Quantidade de Visitantes</th>
            </tr>
            </thead>
            <tbody>
            @foreach($escolas as $e)
                @if(count($e->visitantes)>0)
                    <tr>
                        <td>{{$e->nome}}</td>
                        <td>{{$e->cidade}} - {{$e->uf}}</td>
                        <td>{{count($e->visitantes)}}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
