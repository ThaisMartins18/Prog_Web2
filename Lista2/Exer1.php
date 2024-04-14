<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo ou Negativo</title>
</head>
<body>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="calcular">Calcular</button>
    </form>
    
    <?php

    function verificarNumero($numero) {
        if (is_numeric($numero)) {
            if ($numero > 0) {
                return "Valor Positivo";
            } elseif ($numero < 0) {
                return "Valor Negativo";
            } else {
                return "Igual a Zero";
            }
        } else {
            return "Entrada inválida. Por favor, insira um número válido.";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
        $numero = $_POST["numero"];
        $resultado = verificarNumero($numero);
        if ($resultado !== "") {
            echo $resultado;
        }
    }

    ?>

</body>
</html>
