@extends('pdfs.includes')

@section('content')
    <div class="conteudo">
        <div class="row">
            <div class="col" style="width: 20%;">
                <img src="{{public_path('img/mascote-home-mobile.png')}}" style="max-width: 100px;">
            </div>
            <div class="col" style="width: 80%;">
                <h4 class="centro">Relatório de Visitantes</h4>
            </div>
        </div>
        <div class="clearfix"></div>
        <table class="mg-topo mg-esquerda">
            <thead>
            <tr>
                <th width="25%">Nome</th>
                <th width="25%">E-mail</th>
                <th width="25%">Telefone/Celular</th>
                <th width="25%">Curso Desejado</th>
            </tr>
            </thead>
            <tbody>
            @foreach($visitantes as $v)
                <tr>
                    <td>{{$v->nome}}</td>
                    <td>{{$v->email}}</td>
                    <td>{{$v->telefone!=null?$v->telefone:"N/A"}} / {{$v->celular}}</td>
                    <td>{{$v->curso!=null?$v->curso->nome:'N/A'}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <p><b>Total de Visitantes:</b> {{count($visitantes)}}</p>
    </div>


@endsection
