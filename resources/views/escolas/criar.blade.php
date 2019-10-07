@extends('layouts.app')

@section('content')
    <script>
        $(document).ready(function () {
           $('input[type=text]').keyup(function () {
              $(this).val($(this).val().toUpperCase());
           });
        });
    </script>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white"  style="background-color: #05351a;"><i class="fa fa-plus"></i> {{ __('Cadastrar Escola') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('cadastrar_escola') }}">
                            @csrf
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
                                <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control{{ $errors->has('cidade') ? ' is-invalid' : '' }}" name="cidade" value="{{ old('cidade') }}" autofocus>

                                    @if ($errors->has('cidade'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cidade') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="uf" class="col-md-4 col-form-label text-md-right">{{ __('UF') }}</label>
                                <div class="col-md-4">
                                    <select class="form-control{{ $errors->has('uf') ? ' is-invalid' : '' }}" name="uf">
                                        <option value="">--Selecione--</option>
                                        @foreach($ufs as $u)
                                            <option value="{{$u->uf}}" {{$u->uf == old('uf')?'selected':''}}>{{$u->uf}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('uf'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('uf') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
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
