@extends('layouts.master')
@section('title','Tabela de pessoas cadastradas')
@section('content')

<div class="container-fluid no-padding table-responsive-sm">
    <table class="table table-striped nowrap" style="width:100%" id="tabela">
        <thead align="left">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>  </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pessoas as $pessoa)
            <tr>
                <td>{{$pessoa->id}}</td>
                <td>{{$pessoa->nome}}</td>
                <td>{{$pessoa->telefone}}</td>
                <td>{{$pessoa->cpf}}</td>
                <td>
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <button class="btn btn-secondary"  onclick="window.location='{{ route('visualizar', $pessoa->id)}}'">Visualizar</button>
                        <button class="btn btn-primary" onclick="window.location='{{ route('editar', $pessoa->id)}}'">Editar</button>
                        <button class="btn btn-danger"  onclick="window.location='{{ route('deletar', $pessoa->id)}}'">Deletar</button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
    $('#exemplo').DataTable({
        select: false,
        responsive: true,
        "order": [
            [0, "asc"]
        ],
        "info": false,
        "sLengthMenu": false,
        "bLengthChange": false,
        "oLanguage": {

            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de START até END de TOTAL registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de MAX registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "MENU resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });
});
</script>
@endsection