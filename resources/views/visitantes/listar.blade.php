@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <script>
            $(document).ready(function () {
                $('#name').keyup(function () {
                    $(this).val($(this).val().toUpperCase());
                });
            });
        </script>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white"  style="background-color: #56375e;"><i class="fa fa-search"></i> Buscar Visitantes</div>
                    <div class="card-body">
                        <form method="GET" action="{{ route('listar_visitante') }}">
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
                                    <a href="{{route('listar_escola')}}" class="btn btn-primary">
                                        <i class="fa fa-plus"></i>
                                        {{ __('Novo Visitante') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="py-4">
                    <div class="card">
                        <div class="card-header text-white"  style="background-color: #56375e;"><i class="fa fa-list"></i> Listagem de Visitantes</div>
                        <div class="card-body">
                            @include('mensagens')
                            @if(count($visitantes)>0)
                                @foreach($visitantes as $v)
                                    <div class="py-2">
                                        <div class="card headline">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5><b>NOME</b></h5>
                                                        {{$v->nome}}
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5><b>E-MAIL</b></h5>
                                                        <p>{{$v->email}}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h5><b>CURSO DESEJADO</b></h5>
                                                        <p>{{$v->curso?$v->curso->nome:'N/A'}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="ml-auto col-auto">
                                                        <a class="btn btn-danger" href="{{route('excluir_visitante',['id'=>$v->id])}}"><i class="fa fa-trash"></i> Excluir</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>Não há dados a serem exibidos.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
