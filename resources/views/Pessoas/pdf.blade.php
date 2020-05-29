<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>PDF - Lista</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css"
        rel="stylesheet" />
</head>
<style>
    .table-condensed {
        font-size: 13px;
    }

    div {
        margin-top: 10px;
    }
</style>

<body>
    <header>
        <div align="center">
                <h4 style="margin-top: 30px">Lista de pessoas cadastradas<br /></h4>
                <h4>Sistema de cadastros</h4>
        </div>
    </header>
    <div align="center">
        <h4 style="margin-top: 50px"><strong></strong><br /></h4>
    </div>
    <table class="table">
        <thead align="center">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pessoas as $pessoa)
            <tr>
                <td>{{$pessoa->id}}</td>
                <td>{{$pessoa->nome}}</td>
                <td>{{$pessoa->telefone}}</td>
                <td>{{$pessoa->cpf}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>