<!DOCTYPE html>
<html>
<head>
    <title>Encontrar o menor número</title>
</head>
<body>
    <h2>Encontrar o menor número e sua posição na sequência</h2>
    <form method="post">
        <?php
        // Verificando se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Inicializando um array para armazenar os números
            $numeros = array();
            
            // Lendo os 7 números do formulário e armazenando-os no array
            for ($i = 1; $i <= 7; $i++) {
                $numero = $_POST["numero$i"];
                // Verificando se o número já foi inserido anteriormente
                if (in_array($numero, $numeros)) {
                    echo "Por favor, insira números diferentes.";
                    exit();
                }
                $numeros[] = $numero;
            }

            // Encontrando o menor valor e sua posição
            $menor = $numeros[0];
            $posicao = 0;
            for ($i = 1; $i < count($numeros); $i++) {
                if ($numeros[$i] < $menor) {
                    $menor = $numeros[$i];
                    $posicao = $i;
                }
            }

            // Imprimindo o menor valor e sua posição
            echo "O menor valor é $menor e está na posição $posicao na sequência.";
        }
        ?>
        <br><br>
        <!-- Formulário para inserir os números -->
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required><br><br>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required><br><br>
        <label for="numero3">Número 3:</label>
        <input type="number" name="numero3" required><br><br>
        <label for="numero4">Número 4:</label>
        <input type="number" name="numero4" required><br><br>
        <label for="numero5">Número 5:</label>
        <input type="number" name="numero5" required><br><br>
        <label for="numero6">Número 6:</label>
        <input type="number" name="numero6" required><br><br>
        <label for="numero7">Número 7:</label>
        <input type="number" name="numero7" required><br><br>
        <input type="submit" value="Encontrar menor valor">
    </form>
</body>
</html>
