@extends('layouts.app')

@section('content')
    <div class="container">
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
                    <div class="card-header text-white"  style="background-color: #56375e;"><i class="fa fa-plus"></i> {{ __('Cadastrar Visitante') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('cadastrar_visitante') }}">
                            @csrf
                            <input type="hidden" name="escola_id" value="{{$escola->id}}">
                            <div class="form-group row">
                                <label for="escola" class="col-md-4 col-form-label text-md-right">{{ __('Escola') }}</label>

                                <div class="col-md-8" style="padding-top: 7px;">
                                    <b>{{$escola->nome}}</b>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome') }}" autofocus>

                                    @if ($errors->has('nome'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento') }}</label>

                                <div class="col-md-8">
                                    <input id="name" type="date" class="form-control{{ $errors->has('data_nascimento') ? ' is-invalid' : '' }}" name="data_nascimento" value="{{ old('data_nascimento') }}" autofocus>

                                    @if ($errors->has('data_nascimento'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('data_nascimento') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                                <div class="col-md-8">
                                    <input id="name" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone Fixo') }}</label>

                                <div class="col-md-6">
                                    <input id="telefone" type="text" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="telefone" value="{{ old('telefone') }}" autofocus>

                                    @if ($errors->has('telefone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Telefone Celular') }}</label>

                                <div class="col-md-6">
                                    <input id="celular" type="text" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ old('celular') }}" autofocus>

                                    @if ($errors->has('celular'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="curso_id" class="col-md-4 col-form-label text-md-right">Curso Desejado</label>
                                <div class="col-md-8">
                                    <select class="form-control{{ $errors->has('curso_id') ? ' is-invalid' : '' }}" name="curso_id">
                                        <option value="">N/A</option>
                                        @foreach($cursos as $c)
                                            <option value="{{$c->id}}">{{$c->nome}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('curso_id'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('escola_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                   <button type="submit" class="btn btn-success" style="background-color:#b87997; border-color:#b87997; color:#faf5bf;">
                                        <i class="fa fa-paper-plane"></i>
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
