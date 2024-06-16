<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Gatos</title>
</head>
<body>
    <h1>Formulário de Exclusão de Gatos</h1>
    <form action="{{ route('gatos.update',$gato->id)}}" method="POST">
        @CSRF
        @method('DELETE')
        <label for="nome">Informe o nome do Gato</label>
        <input type="text" name="nome" id="nome" value="{{$gato->id}}" disabled><br>
        <label for="cor">Informe o cor do Gato</label>
        <input type="text" name="cor" id="cor" value="{{$gato->cor}}" disabled><br>
        <label for="genero">Informe o genero do Gato</label>
        <input type="text" name="genero" id="genero" value="{{$gato->genero}}" disabled></br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>