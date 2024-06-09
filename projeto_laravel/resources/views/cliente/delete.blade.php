<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Clientes</title>
</head>
<body>
    <h1>Formulário de Exclusão de Clientes</h1>
    <form action="{{ route('clientes.update',$cliente->id)}}" method="POST">
        @CSRF
        @method('DELETE')
        <label for="nome">Informe o nome do Cliente</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->id}}" disabled><br>
        <label for="telefone">Informe o telefone do Cliente</label>
        <input type="text" name="telefone" id="telefone" value="{{$cliente->telefone}}" disabled><br>
        <label for="email">Informe o email do Cliente</label>
        <input type="text" name="email" id="email" value="{{$cliente->email}}" disabled></br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>