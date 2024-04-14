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

    $numeros = array();

    for ($i = 0; $i < 7; $i++) {
        echo "Digite o " . ($i + 1) . "º número: ";
        $numero = readline();
        $numeros[] = $numero;
    }

    $menor_valor = $numeros[0];
    $posicao_menor_valor = 0;

    for ($i = 1; $i < count($numeros); $i++) {
        if ($numeros[$i] < $menor_valor) {
            $menor_valor = $numeros[$i];
            $posicao_menor_valor = $i;
        }
    }

    echo "O menor valor é: " . $menor_valor . "\n";
    echo "A posição do menor valor na sequência de entrada é: " . ($posicao_menor_valor + 1) . "\n";

    ?>

</body>

</html>