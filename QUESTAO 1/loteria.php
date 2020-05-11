<?php 
/**
 * Criar uma função que retorne um array com 6 dezenas 
 * aleatórias entre 1 e 50, atentando que os números nunca 
 * se repitam e que estejam na ordem crescente (loteria)
 */
function loteria() {
    $numerosSorteados = [];
    $numerosValidos = range(1, 50);
    shuffle($numerosValidos);
    for($i = 0; $i < 6; $i++) {
        $numerosSorteados[i] = $numerosValidos[i];
    } 
    return sort($numerosSorteados);
}

?>