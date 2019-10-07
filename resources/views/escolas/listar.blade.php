@extends('layouts.app')

@section('content')
    <script>
        $(document).ready(function () {
            $('input[type=text]').keyup(function () {
                $(this).val($(this).val().toUpperCase());
            });
        });
    </script>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white"  style="background-color: #05351a;"><i class="fa fa-search"></i> Buscar Escolas</div>
                    <div class="card-body">
                        <form method="GET" action="{{ route('listar_escola') }}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome') }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-search"></i>
                                        {{ __('Buscar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="py-4">
                    <div class="card">
                        <div class="card-header text-white"  style="background-color: #05351a;"><i class="fa fa-list"></i> Listagem de Escolas</div>
                        <div class="card-body">
                            @include('mensagens')
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <th>Nome</th>
                                <th>Quantidade de Visitantes</th>
                                <th>Ações</th>
                                </thead>
                                <tbody>
                                @if(count($escolas)>0)
                                    @foreach($escolas as $e)
                                        <tr>
                                            <td>{{$e->nome}}</td>
                                            <td>{{count($e->visitantes)}}</td>
                                            <td>
                                                @if(count($e->visitantes)==0)
                                                    <a class="btn btn-danger" href="{{route('excluir_escola',['id'=>$e->id])}}" data-toggle="tooltip" title="Excluir"><i class="fa fa-trash"></i></a>
                                                @endif
                                                <a class="btn btn-primary" href="{{route('novo_cadastro_visitante',['id'=>$e->id])}}" data-toggle="tooltip" title="Cadastrar Visitante"><i class="fa fa-plus"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">Não há dados a serem exibidos.</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
