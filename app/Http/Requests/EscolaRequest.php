<?php

namespace PortasAbertas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EscolaRequest extends FormRequest
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
            'nome'=>'required|max:255|unique:escolas,nome',
            'cidade'=>'required|max:255',
            'uf'=>'required|max:2',
        ];
    }

    public function messages()
    {
        return [
            'nome.unique'=>'Essa escola já existe.'
        ];
    }
}
