<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Gatos</title>
</head>
<body>
    <h1>Formulário de Alterar dados de Gatos</h1>
    <form action="{{ route('gatos.update',$gato->id)}}" method="POST">
        @CSRF
        @method('PUT')
        <label for="nome">Informe o nome do Cliente</label>
        <input type="text" name="nome" id="nome" value="{{$gato->nome}}"><br>
        <label for="cor">Informe o cor do Cliente</label>
        <input type="text" name="cor" id="cor" value="{{$gato->cor}}"><br>
        <label for="genero">Informe o genero do Cliente</label>
        <input type="text" name="genero" id="genero" value="{{$gato->genero}}"></br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>