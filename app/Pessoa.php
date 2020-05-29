<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    //use \OwenIt\Auditing\Auditable;
    protected $fillable = [
        'nome', 'sexo', 'telefone', 'data_nascimento', 'cpf', 'email', 'escolaridade', 'senha', 'confirmarSenha', 'fotoPerfil', 'envioFormulario'
    ];

}
