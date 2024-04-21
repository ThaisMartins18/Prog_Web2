<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenação de Valores</title>
</head>

<body>
    <h2>Ordenação de Valores</h2>
    <form method="post">
        <label for="valor1">Valor A:</label>
        <input type="number" id="valor1" name="valor1" required>
        <br><br>
        <label for="valor2">Valor B:</label>
        <input type="number" id="valor2" name="valor2" required>
        <br><br>
        <button type="submit" name="ordenar">Ordenar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ordenar"])) {
        $valorA = $_POST["valor1"];
        $valorB = $_POST["valor2"];

        if ($valorA < $valorB) {
            echo "Valores em ordem crescente: $valorA $valorB";
        } elseif ($valorA > $valorB) {
            echo "Valores em ordem crescente: $valorB $valorA";
        } else {
            echo "Números iguais: $valorA";
        }
    }
    ?>
</body>

</html>
