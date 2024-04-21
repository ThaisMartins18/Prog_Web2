<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
</head>
<body>
    <h2>Calculadora de Idade</h2>
    <form method="post">
        <label for="ano_nascimento">Ano de nascimento:</label>
        <input type="number" id="ano_nascimento" name="ano_nascimento" required>
        <button type="submit" name="calcular">Calcular</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calcular"])) {
        $ano_nascimento = $_POST["ano_nascimento"];
        
        define('ANO_ATUAL', date('Y'));
        
        $idade = ANO_ATUAL - $ano_nascimento;
        
        $dias_vividos = $idade * 365;
        
        $idade_2025 = 2025 - $ano_nascimento;
        
        echo "<p>Idade: $idade anos</p>";
        echo "<p>Dias vividos: $dias_vividos dias</p>";
        echo "<p>Idade em 2025: $idade_2025 anos</p>";
    }
    ?>
</body>
</html>
