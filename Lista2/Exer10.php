<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h2>Calculadora de IMC</h2>
    <form method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required>
        <br><br>
        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01" required>
        <br><br>
        <button type="submit" name="calcular">Calcular IMC</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calcular"])) {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        
        $imc = $peso / ($altura * $altura);
        
        echo "<p>Seu IMC é: $imc</p>";
        
        if ($imc < 18.5) {
            echo "<p>Você está abaixo do peso.</p>";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo "<p>Você está com o peso normal.</p>";
        } elseif ($imc >= 24.9 && $imc < 29.9) {
            echo "<p>Você está com sobrepeso.</p>";
        } else {
            echo "<p>Você está obeso.</p>";
        }
    }
    ?>
    <img src="https://www.drrogermoura.com.br/images/artigos/tabela-imc.png" alt="Tabela IMC">
    <p>Para mais informações sobre o Índice de Massa Corporal (IMC), consulte <a href="https://pt.wikipedia.org/wiki/%C3%8Dndice_de_massa_corporal">este link</a>.</p>
</body>
</html>
