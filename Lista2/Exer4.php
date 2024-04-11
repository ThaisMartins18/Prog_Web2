<?php

/*Crie um algoritmo que solicite a entrada de um número, e exiba 
a tabuada de 0 a 10 de acordo com 
o número solicitado, ex: 
    Entrada = 4
    Saída = 4 X 0 = 0...4 X 10 = 40.
*/

$numero = readline("Digite um número: ");

if (!is_numeric($numero)) {
    echo "Por favor, digite um número válido.\n";
    exit;
}

echo "Tabuada do $numero:\n";
for ($i = 0; $i <= 10; $i++) {
    echo "$numero X $i = " . ($numero * $i) . "\n";
}
?>
