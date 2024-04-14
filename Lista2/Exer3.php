<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora PHP</h2>
    <form method="post">
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" required>
        <br><br>
        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2" required>
        <br><br>
        <button type="submit" name="calcular">Calcular</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calcular"])) {
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        
        $soma = $valor1 + $valor2;
        
        if ($valor1 == $valor2) {
            $soma *= 3;
        }
        
        echo "<p>A soma dos valores é: $soma</p>";
    }
    ?>
</body>
</html>
