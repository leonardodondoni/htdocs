<?php


$a = 10;

function trocaValor(&$b) { //& passa valor por referencia, ou seja, vai atualizar o valor da variavel fora da função

    $b += 50;

    return $b;

}



echo trocaValor($a);

echo "<br>";

echo trocaValor($a);

echo "<br>";

echo $a;