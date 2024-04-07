<?php

// Inicializar um array para armazenar os números inseridos pelo usuário
$numeros = array();

// Solicitar ao usuário que insira 7 números diferentes
for ($i = 0; $i < 7; $i++) {
    echo "Digite o " . ($i + 1) . "º número: ";
    $numero = readline();
    $numeros[] = $numero;
}

// Encontrar o menor valor e sua posição
$menor_valor = $numeros[0];
$posicao_menor_valor = 0;

for ($i = 1; $i < count($numeros); $i++) {
    if ($numeros[$i] < $menor_valor) {
        $menor_valor = $numeros[$i];
        $posicao_menor_valor = $i;
    }
}

// Imprimir o menor valor e sua posição na sequência de entrada
echo "O menor valor é: " . $menor_valor . "\n";
echo "A posição do menor valor na sequência de entrada é: " . ($posicao_menor_valor + 1) . "\n";

?>