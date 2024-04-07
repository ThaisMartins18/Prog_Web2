<?php


/*

Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é 
positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", 
"Valor Negativo" ou "Igual a Zero".

*/

function verificarNumero($numero) {
    if ($numero > 0) {
        return "Valor Positivo";
    } elseif ($numero < 0) {
        return "Valor Negativo";
    } else {
        return "Igual a Zero";
    }
}

echo "Digite um número: ";
$numero = readline();

echo verificarNumero($numero);

?>
