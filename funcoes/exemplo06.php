<?php


$pessoa = array(
    'nome' => 'João',
    'idade' => 20
);

foreach ($pessoa as &$value) {   //  & passa valor por referencia, ou seja, vai atualizar o valor da variavel fora do for

    if (gettype($value) === 'integer') $value += 10;

    echo $value . "<br>";
}

print_r($pessoa);
