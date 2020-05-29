@extends('layouts.master')
@section('title','Cadastrar novo')
@section('content')

<form action="{{route('salvar')}}" method="post" enctype="multipart/form-data" class="form-horizontal" id="formProduto">
<div class="conteudo">
    <div class="card-header">
        <h4 class="col-12 modal-title text-center">Cadastrar Aluno</h5>
    </div>
    <h6 class="col-12 modal-title text-center">Campos com * são obrigatórios</h6>
    @include('Pessoas.form')
</div>

@endsection