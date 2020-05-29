@extends('layouts.master')
@section('title','Página Inicial')
@section('content')

<div class="conteudo">
    <div class="row d-flex justify-content-around">
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('../assets/img/add.ico') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Novo Cadastro</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('cadastro') }}" class="btn btn-primary stretched-link">Cadastrar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('../assets/img/lista.ico') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Lista de cadastros</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('lista') }}" class="btn btn-primary stretched-link">Acessar lista</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('../assets/img/pdf.ico') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Lista em PDF</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('pdf') }}" class="btn btn-primary stretched-link">Gerar PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection