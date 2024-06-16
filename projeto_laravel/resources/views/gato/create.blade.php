<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Gatos</title>
</head>
<body>
    <h1>Formulário de Inserção de Gatos</h1>
    <form action="{{ route('gatos.store')}}" method="POST">
        @CSRF
        <label for="nome">Informe o nome do Gato</label>
        <input type="text" name="nome" id="nome"><br>
        <label for="cor">Inofrme o cor do Gato</label>
        <input type="text" name="cor" id="cor"><br>
        <label for="genero">Informe o genero do Gato</label>
        <input type="text" name="genero" id="genero"></br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>