<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>

<body>
    <h2>Calculadora Fatorial</h2>
    <form method="post">
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" required>
        <br><br>
        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calcular"])) {
        $numero = $_POST["valor1"];

        if (!is_numeric($numero) || $numero < 0) {
            echo "Por favor, digite um número inteiro positivo.\n";
            exit;
        }

        $fatorial = 1;
        for ($i = $numero; $i > 0; $i--) {
            $fatorial *= $i;
        }

        echo "O fatorial de $numero é: $fatorial\n";
    }
    ?>
</body>

</html>
