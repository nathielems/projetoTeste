@extends('layouts.master')
@section('title','Detalhamento')
@section('content')

@csrf
<form action="{{route('visualizar', $pessoa->id)}}" enctype="multipart/form-data" method="post" class="form-horizontal" id="formProduto">
<div class="container-fluid no-padding table-responsive-sm">

    <div class="card">
        <div class="container col-12">
            <input type="hidden" id="id" class="form-control">
            @if(isset($pessoa->fotoPerfil))
            <ul class="nav-justified">
            <li class="text-center"><img class="avatar avatar-128 img-circle img-thumbnail" src="data:image/png;base64, {{isset($pessoa->fotoPerfil) ? $pessoa->fotoPerfil : " "}} "/><p>Foto de Perfil</p></li>
            </ul>
            @endif

        <h4 class="col-12 modal-title text-row">Dados pessoais:</h4>
        
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nome" class="control-label">Nome: </label>
                <div class="card">
                    <div class="card-body">
                        {{$pessoa->nome}}
                    </div>
                </div>
            </div>
            
            <div class="form-group col-md-4">
			    <label for="sexo">Sexo: </label>
                <div class="card">
                    <div class="card-body">
                        {{$pessoa->sexo == 1 ? 'Masculino' :  $pessoa->sexo == 2 ? 'Feminino' : 'Outro' }}
                    </div>
                </div>
            </div>
            
            <div class="form-group col-md-4">
                <label for="dataNascimento" class="control-label">Data de Nascimento: </label>
                <div class="card">
                    <div class="card-body">
                        {{$pessoa->data_nascimento}}
                    </div>
                </div>
            </div>

            <div class="form-group col-md-4">
                <label for="cpf" class="control-label">CPF: </label>
                <div class="card">
                    <div class="card-body">
                        {{$pessoa->cpf}}
                    </div>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="escolaridade">Escolaridade: </label>
                <div class="card">
                    <div class="card-body">
                        {{$pessoa->escolaridade == 1 ? 'Superior Completo' :  $pessoa->escolaridade == 2 ? 'Superior Incompleto' : $pessoa->escolaridade == 3 ? 'Ensino Médio Completo' :$pessoa->escolaridade == 4 ? 'Ensino Médio Incompleto': $pessoa->escolaridade == 5 ? 'Ensino Fundamental Completo': $pessoa->escolaridade == 6 ? 'Ensino Fundamental Incompleto' : 'Outro' }}
                    </div>
                </div>
            </div>

              <div class="form-group col-md-6">
                <label for="telefone" class="control-label">Telefone:</label>
                <div class="card">
                    <div class="card-body">
                        {{$pessoa->telefone}}
                    </div>
                </div>
            </div>
      
        <div class="container col-12">
            <h4 class="col-12 modal-title text-row">Outros dados:</h5>
            <div class="form-group">
                <label for="email" class="control-label">E-mail: </label>
                <div class="card">
                    <div class="card-body">
                        {{$pessoa->email}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container col-12">
        <div class="form-row">
            <a class="btn btn-secondary" href="{{route('welcome')}}">Voltar</a>
        </div>
    </div>

</div>
</form>
@endsection
