<?php

/*
Escreva um programa que leia 7 números diferentes, imprima o 
menor valor e imprima a posição do menor valor 
na sequência de entrada.
*/
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