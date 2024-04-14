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

    /*Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos 
seus valores. Caso os valores sejam iguais, informar o usuário e imprimir o valor em tela apenas uma 
vez.
Exemplo, para A=5, B=4 você deve imprimir na tela: "4 5".
 para A=5, B=5 você deve imprimir na tela: “Números iguais: 5”.
 */

    $a = readline("Digite o valor de A: ");
    $b = readline("Digite o valor de B: ");

    if ($a == $b) {
        echo "Números iguais: $a\n";
    } else {

        if ($a > $b) {
            $temp = $a;
            $a = $b;
            $b = $temp;
        }
        echo "$a $b\n";
    }

    ?>
</body>

</html>