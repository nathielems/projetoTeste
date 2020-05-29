@extends('layouts.master')
@section('title','Editar cadastro')
@section('content')

<form action="{{route('atualizar', $pessoa->id)}}" enctype="multipart/form-data" method="post" class="form-horizontal" id="formProduto">
    <div class="conteudo">
    <div class="card-header">
        <h4 class="col-12 modal-title text-center">Editar Cadastro</h5>
    </div>
    <h6 class="col-12 modal-title text-center">Campos com * são obrigatórios</h6>
    @include('Pessoas.form')
</div>

@endsection
