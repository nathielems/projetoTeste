<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoPessoa extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|min:5|max:120',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'telefone' => 'required',
            'cpf' => 'required',
            'escolaridade' => 'required',
            'email' => 'required|min:5',
            'senha' => 'required|min:5',
            'confirmarSenha' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O nome é requerido',
            'nome.min' => 'É necessário no mínimo 5 letras',
            'nome.max' => 'É necessário no máximo 120 letras',
            'nome.alpha' => 'Apenas letras alfabéticas',
            'data_nascimento.required' => 'O campo data é necessário',
            'sexo.required' => 'O campo sexo é necessário',
            'telefone.required' => 'O campo telefone é necessário',
            'cpf.required' => 'O campo CPF é necessário',
            'escolaridade.required' => 'O campo escolaridade é necessário',
            'email.required' => 'O campo e-mail é necessário',
            'senha.required' => 'O campo senha é necessário',
            'confirmarSenha.required' => 'O campo confirmar senha é necessário',
            
        ];
    }
}
