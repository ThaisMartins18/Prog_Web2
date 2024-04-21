<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Metros para Centímetros</title>
</head>
<body>
    <h2>Conversor de Metros para Centímetros</h2>
    <form method="post">
        <label for="metros">Digite o valor em metros:</label>
        <input type="number" id="metros" name="metros" step="0.01" required>
        <button type="submit" name="converter">Converter</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["converter"])) {
        $metros = $_POST["metros"];
        $centimetros = $metros * 100;
        echo "<p>$metros metro(s) equivale(m) a $centimetros centímetros.</p>";
    }
    ?>
</body>
</html>
