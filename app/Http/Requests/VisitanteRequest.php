<?php

namespace PortasAbertas\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class VisitanteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'=>'required|max:255|min:3',
            'email'=>'required|email|max:255|unique:visitantes',
            'telefone'=>'max:13',
            'celular'=>'max:14|required_if:telefone,'.null,
            'escola_id'=>'required',
            'data_nascimento'=>'date|required|before:'. Carbon::today(),

        ];
    }

    public function messages()
    {
        return [
            'celular.required_if'=>'Esse campo é obrigatório quando Telefone Fixo não está preenchido.',
            'data_nascimento.before'=>'Essa data tem que ser anterior a hoje.',
            'email.unique'=>'O E-mail já foi cadastrado.'
        ];
    }
}
