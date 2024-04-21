<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="calcular">Calcular</button>
    </form>
    
    <?php
    
    if (isset($_POST['calcular'])) {
        $numero = $_POST["numero"];
        
        if (!is_numeric($numero)) {
            
            echo "Por favor, digite um número válido.";
        } else {
            echo "<p>Tabuada do $numero:</p>";
            for ($i = 0; $i <= 10; $i++) {
                echo "<p>$numero X $i = " . ($numero * $i) . "</p>";
            }
        }
    }
    ?>
</body>
</html>