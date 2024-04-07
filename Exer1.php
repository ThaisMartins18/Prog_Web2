<?php

// Função para verificar se o número é positivo, negativo ou igual a zero
function verificarNumero($numero) {
    if ($numero > 0) {
        return "Valor Positivo";
    } elseif ($numero < 0) {
        return "Valor Negativo";
    } else {
        return "Igual a Zero";
    }
}

// Solicitar ao usuário que digite um número
echo "Digite um número: ";
$numero = readline();

// Chamar a função para verificar o número e imprimir o resultado
echo verificarNumero($numero);

?>
