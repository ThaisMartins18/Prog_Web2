<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gatos</title>
</head>
<body>
    <h1>Gatos</h1>
    <a href="{{route('gatos.create')}}">INSERIR GATO</a>
    <table>
        <tr>
            <td>Nome</td>
            <td></td>
        </tr>
        @foreach ($gatos as $c)
        <tr>
            <td>{{$c->nome}}</td>
            <td><a href="{{ route('gatos.edit',$c->id)}}">Alterar</a></td>
            <td><a href="/gatos/delete/{{$c->id}}">Excluir</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>