<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tintas</title>
</head>
<body>
    <h2>Calculadora de Tintas</h2>
    <form method="post">
        <label for="metros_quadrados">Tamanho em metros quadrados da área a ser pintada:</label>
        <input type="number" id="metros_quadrados" name="metros_quadrados" step="0.01" required>
        <button type="submit" name="calcular">Calcular</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calcular"])) {
        $metros_quadrados = $_POST["metros_quadrados"];
        
        $litros = $metros_quadrados / 3;
        
        $latas = ceil($litros / 18);
        
        $preco_total = $latas * 80;
        
        echo "<p>Quantidade de latas de tinta necessárias: $latas</p>";
        echo "<p>Preço total: R$ $preco_total</p>";
    }
    ?>
</body>
</html>
