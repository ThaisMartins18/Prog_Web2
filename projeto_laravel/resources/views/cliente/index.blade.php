<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <a href="{{route('clientes.create')}}">INSERIR CLIENTE</a>
    <table>
        <tr>
            <td>Nome</td>
            <td></td>
        </tr>
        @foreach ($clientes as $c)
        <tr>
            <td>{{$c->nome}}</td>
            <td><a href="{{ route('clientes.edit',$c->id)}}">Alterar</a></td>
            <td><a href="/clientes/delete/{{$c->id}}">Excluir</a></td>
        </tr>
        @endforeach
    </table>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <a href="{{route('clientes.create')}}">INSERIR CLIENTE</a>
    <table>
        <tr>
            <td>Nome</td>
            <td></td>
        </tr>
        @foreach ($clientes as $c)
        <tr>
            <td>{{$c->nome}}</td>
            <td><a href="{{ route('clientes.edit',$c->id)}}">Alterar</a></td>
            <td><a href="/clientes/delete/{{$c->id}}">Excluir</a></td>
        </tr>
        @endforeach
    </table>
</body>
>>>>>>> b64bd0123caab28fde88f3847c3536aa42b69999
</html>