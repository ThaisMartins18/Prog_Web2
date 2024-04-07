<?php

/*

Escreva um programa para calcular a soma dos dois valores 
de entrada. Se os dois valores forem iguais,
retorne o triplo da soma.

*/

function calcularSoma($valor1, $valor2) {
    $soma = $valor1 + $valor2;
    
    if ($valor1 == $valor2) {
        return 3 * $soma;
    } else {
        return $soma;
    }
}

echo "Digite o primeiro valor: ";
$valor1 = readline();

echo "Digite o segundo valor: ";
$valor2 = readline();

$resultado = calcularSoma($valor1, $valor2);

echo "O resultado da soma é: " . $resultado . "\n";

?>
